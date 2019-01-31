@extends('layout')

@section('title')
ER Railway Apprentice 2019
@endsection

@section('content')
    
<?php

$exam_links=array(

    ["Apply Online",    "http://rrcer.in:8080/rrcer1/Registration.jsp"],

    // ["Candidate Login",    "#"),

    // ["Verify Fees Payment","#"),

    ["Download Notification","http://139.99.53.236:8080/rrcer/Act_Appr._NOTICE_.docx_-_FOR_WEB_UPLOAD.PDF"],

    // ["How to Apply (Step by Step Guide)",    "#"),

    ["General Instruction [English]",   "http://139.99.53.236:8080/rrcer/Notification_-_ACT_APPR_2018-19.PDF"],

    ["official Website","http://139.99.53.236:8080/rrcer/notice_board.html"],


);

// [END] List of all links under exam links heading

$apply =  "<ul class=\"list-group\">
<a class=\"blue list-group_item text-center list-group-item-danger\" href=\"" .$exam_links[0][1]. "\"
 target=\"_blank\">" .$exam_links[0][0]. " -->  <b>[Click Here]</b></a>
</ul><br>";

?>

<!-- main heading starts -->

<h2 class="text-center main-heading">
        Act Apprentices for Eastern Railways 2018-19<br> <u>ER Apprentice 2019</u></h2>
        <br>
    
    <!-- main heading ends -->
    
    
    
    
    
    <!--date heading starts here -->
    
    <?php echo $date; ?>
    
    <table class="table table-bordered table-sm table-striped">
        <tbody>
            <tr>
                <th>Exam form filling start date:-</th>
                <td>15-10-2018</td>
            </tr>
            <tr>
                <th>Last Date Apply Online:-</th>
                <td class="highlight-red">14-11-2018 (5:00 p.m)</td>
            </tr>
            <tr>
                <th>Last Date Fees Payment:-</th>
                <td class="highlight-red"></td>
            </tr>
            <tr>
                <th>Correction in Application form</th>
                <td class="highlight-red"></td>
            </tr>
            <tr>
                <th>Admit Card Available</th>
                <td></td>
            </tr>
            <tr>
                <th>Exam Date:-</th>
                <td class="highlight-red"></td>
            </tr>
            <tr>
                <th>Result announce</th>
                <td></td>
            </tr>
        <tbody>
    </table>
    
    <!--date heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    <!--fees heading starts here -->
    
    <?php echo $fees; ?>
    
    <h4>Coming Soon</h4>
    
    <!--fees heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    
    
    
    <!--eligibility heading starts here -->
    
    <?php echo $eligibility; ?>
    
    <h4>Coming Soon</h4>
    
    <!--eligibility heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    
    <!--pattern heading starts here -->
    
    <?php echo $pattern; ?>
    
    <h4>Coming Soon</h4>
    
    <!--pattern heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    
    <!--selection heading starts here -->
    
    <?php echo $selection; ?>
    
    <h4>Coming Soon</h4>
    
    <!--selection heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    <!--vacancies heading starts here -->
    
    <?php echo $vacancies; ?>
    
    <h4>Coming Soon</h4>
    
    <!--vacancies heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    
    
    
    <!--centers heading starts here -->
    
    <?php echo $centers; ?>
    
    <h4>Coming Soon</h4>
    
    <!--centers heading ends here -->
    
    <?php echo $apply; ?>
    
    
    
    
    
    
    
    <!--links heading starts here -->
    
    <?php echo $links; ?>
    <br>
    <?php
    
    $length = count($exam_links);
    
    for($i=0;$i<$length;$i++){
        
        printf("<ul class=\"list-group\">
        <a class=\"blue list-group_item text-center list-group-item-danger\" href=\"%s\"
         target=\"_blank\">%s -->  <b>[Click Here]</b></a>
        </ul><br>",$exam_links[$i][1], $exam_links[$i][0]);
    }
    
    ?>

@endsection