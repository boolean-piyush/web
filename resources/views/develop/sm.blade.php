<!DOCTYPE html>
<html lang="en">
<head>
    @include('references')
    <title>Sitemap Creator</title>
</head>
<body>
    <div class="d-none">
    <?php ob_start(); ?>
<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

@php
    use App\Exam;
    $exams = Exam::all();
    $dept = array();
    foreach ($exams as $exam) {
        array_push($dept,$exam->dept);
        printf ("
        <url>
        <loc>https://examdate.in/exams/%s</loc>
        <lastmod>%s</lastmod>
        </url>
        ",$exam->exam_name,explode(' ',$exam->updated_at)[0]);
    }

@endphp
</urlset>
    @php
        $content = ob_get_contents();
        file_put_contents("sitemap.xml",$content);
    @endphp
</div>
<h1><a href="/sitemap.xml">GoTo</a></h1>
</body>
</html>