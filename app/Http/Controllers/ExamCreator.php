<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class ExamCreator extends Controller
{

   public function test(Request $request){
      $inputs = $request->all();
      return dd($inputs);
   }

    public function creator(Request $request){

            $inputs = $request->all();
            $apply_online = "<child-status myhref=\"". $inputs['apply_online_value'] ."\" stage=". $inputs['stage'] ." last_date=\"". $inputs['last_date'] ."\"></child-status><br>";

            if(array_key_exists("modify_db", $inputs)){

               if(array_key_exists("new_dept", $inputs)){
                  $dept = $request->new_dept;
               }
               else {
                  $dept = $request->dept;
               }

               Exam::create([
                  'exam_name' => $request->exam_name,
                  'exam_link' => $request->exam_link,
                  'qualification' => $request->qualification,
                  'next_check' => $request->next_check,
                  'status' => $request->status,
                  'completed_on' => $request->completed_on,

                  'dept' => $dept,
         
                  ]);
            }

            echo "<div v-if=false id=\"hide_controller_output\">";

            ob_start();

            echo "\n\n<div id=\"main_heading\">";
               echo "<h2 class=\"text-center main-heading\">\n";
               echo  "\t". $this->parsed_cell_value($inputs['heading_1']). "<br>\n<u>\n". $this->parsed_cell_value($inputs['heading_2']). "\n</u>\n\n";
               echo "</h2>\n";
               echo "<br>\n";
            echo "</div>";


            
            echo "\n\n<div id=\"exam_date\">";
               echo "\n\n<?php echo \$date; ?>\n";
               printf("%s",$this->get_table('date', $inputs));
               echo $apply_online;
            echo "</div>";

            
            
            echo "\n\n<div id=\"exam_fees\">";
               if($this->get_table('fees', $inputs) != false){
                  echo "\n\n<?php echo \$fees; ?>\n";
                  printf("%s",$this->get_table('fees', $inputs));
                  echo "\n\n".$apply_online."\n\n";
               }
            echo "</div>";

            
         
            echo "\n\n<div id=\"exam_eligibility\">";
               if($this->get_table('eligible', $inputs)){
                  echo "\n\n<?php echo \$eligibility; ?>\n";
                  printf("%s",$this->get_table('eligible', $inputs));
                  echo $apply_online;
               }
               else if($this->get_table('age_limit', $inputs) != false){
                  echo "\n\n<?php echo \$eligibility; ?>\n";
                  echo "<p> <b>A.) Age Limit</b> </p>";
                  printf("%s",$this->get_table('age_limit', $inputs));
                  echo "<p> <b>B.) Qualification</b> </p>";
                  printf("%s",$this->get_table('qualification', $inputs));
         
                  echo $apply_online;
               }
            echo "</div>";

         
               if(array_key_exists("pattern_block", $inputs)){
                  echo "\n\n<div id=\"exam_pattern\">";
                  if($this->get_table('pattern', $inputs) != false){
                     echo "\n\n<?php echo \$pattern; ?>\n";
                     echo $this->get_table('pattern', $inputs);
                     echo $this->get_notes("pattern", $inputs);
                     echo "\n<br>\n";
                     echo $apply_online;
                  }
                  else if($this->get_table('tier_1', $inputs) != false){
                     echo "\n\n<?php echo \$pattern; ?>\n";
                     echo "<p><b>".  parsed_cell_value($inputs["tier_1_heading"]) ."</b> </p>";
                     printf("%s",$this->get_table('tier_1', $inputs));
                     echo "<p><b>".  parsed_cell_value($inputs['tier_2_heading']) ."</b> </p>";
                     printf("%s",$this->get_table('tier_2', $inputs));
                     echo $this->get_notes("pattern", $inputs);
                     echo "\n<br>\n";
                     echo $apply_online;
               }         
                     echo "<br>";
   
               echo "</div>";
               }

         
             
               if(array_key_exists("selection_block", $inputs)){
                  echo "\n\n<div id=\"exam_selection\">";
                  if($this->get_table('selection', $inputs) != false){
                     echo "\n\n<?php echo \$selection; ?>\n";
                     printf("%s",$this->get_table('selection', $inputs));
                     echo $this->get_notes("selection", $inputs);
                     echo "\n<br>\n";
                     echo $apply_online;
                  }
                  echo "<br>";
               echo "</div>";
               }


         
               if(array_key_exists("vacancies_block", $inputs)){
                  echo "\n\n<div id=\"exam_vacancies\">";
                  if($this->get_table('vacancies', $inputs) != false){
                       echo "\n\n<?php echo \$vacancies; ?>\n";
                       printf("%s",$this->get_table('vacancies', $inputs));
                       echo $apply_online;
                  }
                  echo "</div>";
               }

            
         
               if(array_key_exists("centers_block", $inputs)){
                  echo "\n\n<div id=\"exam_centers\">";
                  if($this->get_table('centers', $inputs) != false){
                       echo "\n\n<?php echo \$centers; ?>\n";
                       printf("%s",$this->get_table('centers', $inputs));
                       echo $apply_online;
                  }
                  echo "</div>";
               }

            
         
               echo "\n\n<div id=\"exam_links\">";
                  if($this->get_links('links', $inputs) != false){
                     echo "\n\n<?php echo \$links; ?>\n";
                     echo $apply_online;
                     printf("%s",$this->get_links('links', $inputs));
                  }
               echo "</div>";
            
         
            
               $content = 
               
               "@extends('layout')\n\n @section('title') \n \t"
               .$inputs['title'].
               "\n @endsection \n\n @section('meta') \n \t"
               .$inputs['meta_meta'].
               "\n @endsection \n\n @section('content')\n\n";


               $content .= ob_get_contents();
               $content .= "\n\n @endsection\n\n";
               $myfile = fopen("C:/xampp/blog/resources/views/exams/".$inputs["exam_name"].".blade.php", "w");
               fwrite($myfile, $content);
               echo "</div>";
            
            return view("exams.".$inputs["exam_name"]);

    }

    function get_table($section, $inputs){

        if(!array_key_exists($section.'_table_properties', $inputs)){
           return false;
        }

        $table_properties = json_decode($inputs[$section.'_table_properties']);
        $n_rows = $table_properties->n_rows;
        $n_cols = $table_properties->n_cols;
        if($n_rows > 0){

           $rowspane_depth = [];

           $table = "\n<table class=\"table table-sm table-bordered table-striped\">\n<tbody>\n";

           for ($i=1; $i <=$n_rows; $i++) {

              $colspane_depth = 0;
  
              $table .= "\t<tr>\n";

              if($table_properties->first_row_bold && $i==1){
                 $first_row_bold = true;
              }
              else{
                 $first_row_bold = false;
              }

              $text_center = "";

              for ($j=1; $j <= $n_cols; $j++) {

                 $rowspaned = false;
                 $colspaned = false;
                 $span_attr = "";

                 $cell = $section. '-cell-'. $i .'-'. $j;
                 $cell_value = $this->parsed_cell_value($inputs[$cell]);

                 $pattern=[];
                 if(preg_match("%#[r,c]sp=[1-9]%", $cell_value, $pattern)){ //found span attribute
                    $span_count = (int) explode("=",$pattern[0])[1];

                    if($span_count == $n_cols) $text_center= " class=\"text-center\" ";

                    if(preg_match("%#rsp%", $pattern[0])){ // found rowspan
                       $rowspane_depth[$j] = $span_count - 1;
                       $span_attr = "rowspan=".$span_count;
                    }
                    else{                                     //found colspan
                       $colspane_depth = $span_count - 1;
                       $span_attr = "colspan=".$span_count;
                    }

                    $cell_value = str_replace($pattern[0],"", $cell_value);
                 }

                 else {   // not found span attribute
                    if(array_key_exists($j, $rowspane_depth)){
                       if($rowspane_depth[$j] != 0){    //checks if this cell is effected by previously found row span attr
                             $rowspane_depth[$j] -= 1;
                             $rowspaned = true;
                       }
                    }

                    if($colspane_depth > 0){ //checks if this cell is effected by previously found col span attr
                          $colspane_depth -= 1;
                          $colspaned = true;
                    }
                 }

                 if(preg_match("%#center%", $cell_value)){
                  $text_center = " class=\"text-center\" ";
                  $cell_value = str_replace("#center","",$cell_value);
                 }

                 $col_bold= false;

                 foreach ($table_properties->column_bold as $key) {
                    if($key == $j)
                       $col_bold = true;
                 }

                 if( !($rowspaned || $colspaned) ){
                    if($first_row_bold || $col_bold){
                    $table .= "\t\t<th ". $text_center . $span_attr . ">". $cell_value ."</th>\n";
                    }
                    else {
                       $table .= "\t\t<td ". $text_center . $span_attr . ">". $cell_value ."</td>\n";
                    }
                 }

              }

              $table .= "\t</tr>\n\n";
           }

           $table .= "</tbody></table>";
           return $table;
        }

   }

   function get_links($section, $inputs){

           if(!array_key_exists($section.'_table_properties', $inputs)){
              return false;
           }

           $table_properties = json_decode($inputs[$section.'_table_properties']);
           $n_rows = $table_properties->n_rows;
           $n_cols = $table_properties->n_cols;

           if($n_rows > 0){

              $links= "\n\n<ul class=\"list-group\">\n\n";

              for ($i=1; $i <= $n_rows; $i++) {

                 for ($j=1; $j <= $n_cols; $j++) {

                    $cell = $section. '-cell-'. $i .'-'. $j;
                    $cell_value = $this->parsed_cell_value($inputs[$cell]);

                    if($j==1){
                    $text = $cell_value. "<b> --> [Click Here]</b>";      
                    }

                    if($j==2){
                    $href = $cell_value;
                    }

                 }

                 $link = "<a class=\"blue list-group_item text-center list-group-item-danger\" href=\"". $href. "\" target=\"_blank\">". $text. "</a><br>\n\n";

                 $links .= $link;
              }

              $links .= "</ul>\n\n";

              return $links;
           }

     }

public function parsed_cell_value($input){
        $colors="class=\"";

         $input = str_replace("\r\n","<br>",$input);

        $tags = false;

         if(preg_match("%#red%", $input)){
            $colors .= "red ";
            $input = str_replace("#red","",$input);
            $tags=true;
         }
         elseif (preg_match("%#green%", $input)) {
            $colors .= "green ";
            $input = str_replace("#green","",$input);
            $tags=true;
         }


        if (preg_match("%#bold%", $input)) {
           $input = str_replace("#bold","",$input);
           $input = "<b>".$input."</b>";
           $tags=true;
        }

        $colors .= " \"";

        if($tags){
           return "<span ". $colors  . ">" . $input . "</span>";
        }
        else {
           return $input;
        }
  }

  function get_notes($section, $inputs){

     $notes ="";
     
     for ($i=1; array_key_exists($section. "-note-".$i, $inputs) ; $i++) {

      if($inputs[$section. "-note-".$i] != ""){
         $name = $section. "-note-".$i ;
         $notes .=  "<ul class=\"list-group list-group-flush\">\n";
         $notes .= "<li class=\"list-group-item\">". $this->parsed_cell_value($inputs[$name]). "</li>\n";
         $notes .= "</ul>";
      }
  }

  return $notes;
}

}
