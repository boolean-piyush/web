@extends('layout')

 @section('title') 
 	NTA NCHM JEE-2019
 @endsection 

 @section('meta') 
 	NTA NCHM JEE-2019 | Online Form |  NATIONAL COUNCIL FOR HOTEL MANAGEMENT (NCHM) conducted by National Testing Agency (NTA)
 @endsection 

 @section('content')



<div id="main_heading"><h2 class="text-center main-heading">
	NTA NCHM JEE-2019<br>
<u>
NATIONAL COUNCIL FOR HOTEL MANAGEMENT (NCHM)
</u>

</h2>
<br>
</div>

<div id="exam_date">

<?php echo $date; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Exam form filling start date:-</th>
		<td >15-01-2019</td>
	</tr>

	<tr>
		<th >Last Date Apply Online:-</th>
		<td ><span class="red  "><b>15-03-2019 </b></span></td>
	</tr>

	<tr>
		<th >Last Date Fees Payment:-</th>
		<td ><span class="red  "><b>16-03-2019 (11.50 p.m.)</b></span></td>
	</tr>

	<tr>
		<th >Admit Card Available:-</th>
		<td >From 3rd April, 2019</td>
	</tr>

	<tr>
		<th >Exam Date:-</th>
		<td ><span class="red  "><b>27-04-2019 (Saturday) 9:30 a.m to 12:30 p.m</b></span></td>
	</tr>

	<tr>
		<th >Result Date:-</th>
		<td ><span class="red  "><b>By 15th May, 2019 </b></span></td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/ntanchm/root/Home.aspx?appFormId=NCHM19">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div>

<div id="exam_fees">

<?php echo $fees; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >General / OBC</th>
		<th >SC/ST/PwD /Transgender</th>
	</tr>

	<tr>
		<th ><span class="red  ">800 ₹</span></th>
		<th ><span class="red  ">400 ₹</span></th>
	</tr>

</tbody></table>



<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/ntanchm/root/Home.aspx?appFormId=NCHM19">Apply Online<b> --> [Click Here]</b> </a>
</ul><br>

</div>

<div id="exam_eligibility">

<?php echo $eligibility; ?>
<p> <b>A.) Age Limit</b> </p>
<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >GEN / OBC</th>
		<th >SC/ST</th>
	</tr>

	<tr>
		<td >Born on or after July 01, 1994.</td>
		<td >Born on or after July 01, 1991.</td>
	</tr>

</tbody></table><p> <b>B.) Qualification</b> </p>
<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Qualification</th>
		<th >Pass in 10+2 system of Senior Secondary examination or its equivalent with English as one of the subjects.</th>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/ntanchm/root/Home.aspx?appFormId=NCHM19">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div>

<div id="exam_pattern">

<?php echo $pattern; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th class="text-center">Subject</th>
		<th >No. Of Questions</th>
		<th >Duration</th>
	</tr>

	<tr>
		<th >Numerical Ability and Analytical Aptitude</th>
		<td >30</td>
		<td >03:00 hrs</td>
	</tr>

	<tr>
		<th >Reasoning and Logical Deduction</th>
		<td >30</td>
		<td >03:00 hrs</td>
	</tr>

	<tr>
		<th >General Knowledge & Current Affairs</th>
		<td >30</td>
		<td >03:00 hrs</td>
	</tr>

	<tr>
		<th >English Language</th>
		<td >60</td>
		<td >03:00 hrs</td>
	</tr>

	<tr>
		<th >Aptitude for Service Sector</th>
		<td >50</td>
		<td >03:00 hrs</td>
	</tr>

	<tr>
		<th  class="text-center" ><span class="green  ">GRAND TOTAL </span></th>
		<td  class="text-center" ><span class="red  "><b>200</b></span></td>
		<td  class="text-center" ></td>
	</tr>

</tbody></table><ul class="list-group list-group-flush">
<li class="list-group-item"><span class="red  "><b>Incorrect Answer - Minus One Mark (-1)  </b></span></li>
</ul><ul class="list-group list-group-flush">
<li class="list-group-item"><span class="red  "><b>Unanswered/Marked - No marks (0)  </b></span></li>
</ul>
<br>


<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/ntanchm/root/Home.aspx?appFormId=NCHM19">Apply Online<b> --> [Click Here]</b> </a>
</ul><br><br></div>

<div id="exam_links">

<?php echo $links; ?>


<ul class="list-group">

<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/NTANCHM/Registration/Instruction.aspx" target="_blank">Apply Online<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/ntanchm/root/Home.aspx?appFormId=NCHM19" target="_blank">Candidate Login<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://ntanchm.nic.in/NTANCHMCMS/Handler/FileHandler.ashx?i=File&ii=1&iii=Y" target="_blank">Instructions [English]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="http://www.ntanchm.nic.in/" target="_blank">Official Website<b> --> [Click Here]</b></a><br>

</ul>

</div>

 @endsection