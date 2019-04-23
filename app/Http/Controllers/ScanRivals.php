<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanRivals extends Controller
{
    public function scan_rival_sites(){
        $websites = [
            "sarkariresult.com" => ["https://www.sarkariresult.com", "https://www.sarkariresult.com/sitemap.xml", "sarkari.xml", "sarkari.html"],
            "rojgarresult.com" => ["https://www.rojgarresult.com/", "https://www.rojgarresult.com/sitemap.xml", "rojgar.xml", "rojgar.html"],
            "sarkariresults.info" => ["https://sarkariresults.info/", "https://sarkariresults.info/sitemap.xml", "sarkari_info.xml", "sarkari_info.html"],
        ];

        foreach ($websites as $address => $value) {
            if(!file_exists("develop/".$value[2])){
                echo "File ".$value[2]." does not exist<br>";
                echo "Creating ". $value[2] ." with null content<br>";
                file_put_contents("develop/".$value[2], "");
            }
            if(!file_exists("develop/".$value[3])){
                echo "File ".$value[3]." also does not exist<br>";
                echo "Creating ". $value[3] ." with null content<br>";
                file_put_contents("develop/".$value[3], "");
            }
        }

        $now=date_create(date("Y-m-d H:i"));
        $previous = date_create((string)simplexml_load_file("develop/last_check.xml",'SimpleXMLElement', LIBXML_NOERROR)->lastCheck);
        $diff=date_diff($now,$previous);
        $diff =  $diff->format("(%a days %H hours %I min) Ago");
        printf("<h4 class=\"green\"><b>Last Check --> %s</b></h4>",$diff);

        foreach ($websites as $address => $value) {

            printf("<h4 class=\"green\"><b>%s</b></h4>",$address);

            $oldUrls = $this->extract_url("develop/".$value[2]);
            $newUrls = $this->extract_url($value[1]);
            
            $result=array_diff($newUrls, $oldUrls);
            printf("<h4><b>Exams added according to Sitemap is %d</b></h4>", count($result));

            if(count($result) > 0) echo "Added exams are <br>";
            foreach ($result as $key) {
                echo "<br>".$key."<br>";
            }

            $old_page = $this->scan_homepage("develop/".$value[3]);
            $new_page =  $this->scan_homepage($value[0]);

            $page_diff =array_diff($new_page, $old_page);
            printf("<h4><b>Exams added according to Homepage is %d</b></h4> <br>", count($page_diff));

            if(count($page_diff) > 0) echo "Added exams are <br>";
            foreach ($page_diff as $key) {
                echo "<br>".$key."<br>";
            }

        }

        file_put_contents("develop/last_check.xml", $this->get_xml_last_check());

        foreach ($websites as $key => $value) {
            file_put_contents("develop/".$value[2], file_get_contents($value[1]));
            file_put_contents("develop/".$value[3], file_get_contents($value[0]));
        }

        echo "<br> Homepage and Sitemap Files are downloaded and saved successfully for future reference <br>";

    }

        function get_xml_last_check(){
            return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset>\n<lastCheck>".date("Y-m-d H:i")."</lastCheck>\n</urlset>";
        }

        function extract_url($source)
        {
            $urls = [];
            if(simplexml_load_file($source,'SimpleXMLElement', LIBXML_NOERROR)){
                $xml = simplexml_load_file($source);
                foreach ($xml as $url) {
                    array_push($urls, (string)$url->loc);
                }
            }
            return $urls;
        }

        function scan_homepage($source)
        {
            $content = file_get_contents($source);

            preg_match_all('%href=".*?"%', $content, $matches);
            $matches = array_unique($matches[0]);

            foreach ($matches as $key => $value) {
                $value = trim($value);
                $value = str_replace("href=","",$value);
                $value = str_replace("\"","",$value);
                $matches[$key] = $value;
            }
            return $matches;
        }

}
