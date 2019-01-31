@extends('layout')

@section('title')
    SER Railway Apprentice 2018-2019
@endsection

@section('content')
    

@php
    $exam_links=array(

    ["Apply Online",    "https://appr-recruit.co.in/gen_instructions.aspx"],

    ["Candidate Login",    "https://appr-recruit.co.in/login.aspx"],

    // ["Verify Fees Payment","#"),

    // ["Form Correction","#"),

    ["How to Apply (Step by Step Guide)",    "https://appr-recruit.co.in/"],

    ["Detailed Instruction [English]",   "http://www.ser.indianrailways.gov.in/cris//uploads/files/1539333761159-Notification-Act%20Apprentice.pdf"],

    ["official Website","http://ser.indianrailways.gov.in/index.jsp"],


    );

    // [END] List of all links under exam links heading

    $apply =  "<ul class=\"list-group\">
    <a class=\"blue list-group_item text-center list-group-item-danger\" href=\"" .$exam_links[0][1]. "\"
    target=\"_blank\">" .$exam_links[0][0]. " -->  <b>[Click Here]</b></a>
    </ul><br>";
@endphp

<!-- main heading starts -->

<h2 class="text-center main-heading">
        Act Apprentices for South Eastern Railways (SER) 2018-2019 <br> <u>SER Apprentice 2018-2019</u></h2>
            <br>
        
        <!-- main heading ends -->
        
        
        
        
        
        <!--date heading starts here -->
        
        <?php echo $date; ?>
        
        <table class="table table-bordered table-sm table-striped">
            <tbody>
                <tr>
                    <th>Exam form filling start date:-</th>
                    <td>22-10-2018</td>
                </tr>
                <tr>
                    <th>Last Date Apply Online:-</th>
                    <td class="highlight-red">22-11-2018 (5:00 p.m)</td>
                </tr>
                <tr>
                    <th>Last Date Fees Payment:-</th>
                    <td class="highlight-red">22-11-2018 (5:00 p.m)</td>
                </tr>
            <tbody>
        </table>
        
        <!--date heading ends here -->
        
        <?php echo $apply; ?>
        
        
        
        
        
        
        
        
        <!--fees heading starts here -->
        
        <?php echo $fees; ?>
        
        <table class="table table-sm table-bordered table-striped">
            <tbody>
                <tr>
                    <th class="highlight-red">Gen/OBC (Male)</th>
                    <td>100&#8377;</td>
                </tr>
                <tr>
                    <th>SC/ST/PWD/Female</th>
                    <td>Free</td>
                </tr>
            </tbody>
        </table>
        
        <!--fees heading ends here -->
        
        <?php echo $apply; ?>
        
        
        
        
        
        
        
        
        
        
        
        <!--eligibility heading starts here -->
        
        <?php echo $eligibility; ?>
        
        <p><b>A) Age Limit</b></p>
        <table class="table table-sm table-bordered table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>GEN</th>
                    <th>OBC</th>
                    <th>SC/ST</th>
                    <th>PWD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Age</th>
                    <td>15 to 24 years</td>
                    <td>15 to 27 years</td>
                    <td>15 to 29 years</td>
                    <td>15 to 34 years</td>
                </tr>
            </tbody>
        </table>
        <p><b>B) Educational Qualifications</b></p>
        <ul class="list-group">
            <li class="list-group-item highlight-red">10th or High School Pass with 50% marks</li>
            <li class="list-group-item highlight-red">ITI pass certificate in the trade in which apprentice is to be done.</li>
        </ul>
        <br>
        <!--eligibility heading ends here -->
        
        <?php echo $apply; ?>
        
        
        <!--vacancies heading starts here -->
        
        <?php echo $vacancies; ?>
        
        <table class="table table-sm table-bordered table-striped">
        <tbody>
        <tr>
        <td    >
        <p  ><b>Workshop Name</b></p>
        </td>
        <td  >
        <p  ><b>Total Post</b></p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Kharagpur Workshop</p>
        </td>
        <td  >
        <p  >360</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Signal &amp; Telecom (Workshop)/ Kharagpur</p>
        </td>
        <td  >
        <p  >87</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Track Machine Workshop/ Kharagpur</p>
        </td>
        <td  >
        <p  >120</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >SSE (Works)/ Engg/ Kharagpur</p>
        </td>
        <td  >
        <p  >28</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Carriage &amp; Wagon Depot/ Kharagpur</p>
        </td>
        <td  >
        <p  >121</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Diesel Loco Shed/ Kharagpur</p>
        </td>
        <td  >
        <p  >50</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Sr. DEE (G)/ Kharagpur</p>
        </td>
        <td  >
        <p  >90</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Engineering Workshop/ SINI</p>
        </td>
        <td  >
        <p  >100</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >TRD Dept/ Electrical/ Kharagpur</p>
        </td>
        <td  >
        <p  >40</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Track Machine Workshop/ SINI</p>
        </td>
        <td  >
        <p  >07</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >EMU Shed/ Electrical/ TPKR</p>
        </td>
        <td  >
        <p  >40</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >SSE (Works)/ Engg Chakradharpur</p>
        </td>
        <td  >
        <p  >26</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Electric Loco Sheld/ Santragachi</p>
        </td>
        <td  >
        <p  >36</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Sr. DEE (G)/ Chakradharpur</p>
        </td>
        <td  >
        <p  >93</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Electric Traction Dept/ Chakradharpur</p>
        </td>
        <td  >
        <p  >30</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Carriage &amp; Wagon Dept/ Chakradharpur</p>
        </td>
        <td  >
        <p  >65</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Electric Loco Shed/ Tata</p>
        </td>
        <td  >
        <p  >72</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Electric Loco Shed/ Bondamunda</p>
        </td>
        <td  >
        <p  >50</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Diesel Loco Shed/ Bondamunda</p>
        </td>
        <td  >
        <p  >52</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Sr. DEE (G)/ ADRA</p>
        </td>
        <td  >
        <p  >30</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Carriage &amp; Wagon Dept/ ADRA</p>
        </td>
        <td  >
        <p  >65</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Diesel Loco Shed/ BKSC</p>
        </td>
        <td  >
        <p  >33</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >TRD Dept/ Electrical/ ADRA</p>
        </td>
        <td  >
        <p  >30</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Electric Loco Shed/ BKSC</p>
        </td>
        <td  >
        <p  >31</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Flash Butt Welding Paint/ Jharusuguda</p>
        </td>
        <td  >
        <p  >25</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >SSE (Works)/ Engg/ ADRA</p>
        </td>
        <td  >
        <p  >24</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Carriage &amp; Wagon Dept/ Ranchi</p>
        </td>
        <td  >
        <p  >30</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >Sr. DEE (G)/ Ranchi</p>
        </td>
        <td  >
        <p  >20</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >SSE (Works)/ Engg/ Ranchi</p>
        </td>
        <td  >
        <p  >10</p>
        </td>
        </tr>
        <tr>
        <td    >
        <p  >TRD Dept/ Electrical/ Ranchi</p>
        </td>
        <td  >
        <p  >10</p>
        </td>
        </tr>
        <tr>
                        <th class = "text-center">Total Vacancies</th>
                        <td class="highlight-red">1785</td>
                    </tr>
        </tbody>
        </table>
        
        <!--vacancies heading ends here -->
        
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