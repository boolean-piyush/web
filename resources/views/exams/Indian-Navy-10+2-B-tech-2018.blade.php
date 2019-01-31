@extends('layout')

@section('title')
    Indian Navy 10+2 (B.tech) 2018
@endsection

@section('content')

@php
    $exam_links=array(

    ["Apply Online",    "https://www.joinindiannavy.gov.in/en/account/account/register"],

    ["Candidate Login",    "https://www.joinindiannavy.gov.in/en/account/login"],

    // ("Verify Fees Payment","#"),

    // ("Form Correction","#"),

    ["Detailed Instruction [English]",   "http://www.davp.nic.in/WriteReadData/ADS/eng_10701_27_1819b.pdf"],

    ["Official Website","https://www.joinindiannavy.gov.in/"]


    );

    $apply =  "<ul class=\"list-group\">
    <a class=\"blue list-group_item text-center list-group-item-danger\" href=\"" .$exam_links[0][1]. "\"
    target=\"_blank\">" .$exam_links[0][0]. " -->  <b>[Click Here]</b></a>
    </ul><br>";
@endphp

<!-- main heading starts -->

<h2 class="text-center main-heading">
        Indian Navy 10+2 (B.tech) 2018</h2>
            <br>
        
        <!-- main heading ends -->
        
        <!--date heading starts here -->
        
        <?php echo $date; ?>
        
        <table class="table table-bordered table-sm table-striped">
            <tbody>
                <tr>
                    <th>Exam form filling start date:-</th>
                    <td>03-11-2018</td>
                </tr>
                <tr>
                    <th>Last Date Apply Online:-</th>
                    <td class="highlight-red">22-11-2018</td>
                </tr>
                <tr>
                    <th>Last Date Fees Payment:-</th>
                    <td class="highlight-red">22-11-2018</td>
                </tr>
                <tr>
                    <th>Merit List</th>
                    <td>Coming Soon</td>
                </tr>
            <tbody>
        </table>
        
        <!--date heading ends here -->
        
        <?php echo $apply; ?>
        
        
        
        
        
        
        
        
        <!--fees heading starts here -->
        
        <?php echo $fees; ?>
        
        <p class="highlight-red">Free for all</p>
        
        <!--fees heading ends here -->
        
        <?php echo $apply; ?>
        
        

        
        <!--eligibility heading starts here -->
        
        <?php echo $eligibility; ?>
        
        <table class="table table-sm table-bordered table-striped">
            <tbody>
                <tr>
                    <th>Age</th>
                    <td>Born between 02 Jan 2000 and 01 Jul 2002</td>
                </tr>
                        <tr>
                            <th rowspan="2">Educational Qualifications</th>
                            <td >Passed 10+2 Exam or its equivalent with atleast 70% marks in Physics, Chemistry and Maths
                                and atleast 50% in English.
                            </td>
                        </tr>
                        <tr>
                            <td >Candidates who have appeared for JEE (Main)-2018.
                            </td>
                        </tr>
                                <tr>
                                    <th>Minimum Height</th>
                                    <td>157 cms</td>
                                </tr>
                                        <tr>
                                            <th>Eye Sight</th>
                                            <td>Minimum distant vision is 6/6, 6.9 correctable to 6/6, 6/6 with glasses</td>
                                        </tr>
            </tbody>
        </table>
        
        <!--eligibility heading ends here -->
        
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
        
        <!--links heading ends here -->

@endsection