@extends('layout')

 @section('title') 
 	UPSEE Online Form 2019
 @endsection 

 @section('meta') 
 	U.P. STATE ENTRANCE EXAMINATION  Dr. A. P. J. Abdul Kalam Technical University, Uttar Pradesh
 @endsection 

 @section('content')

<div id="main_heading"><h2 class="text-center main-heading">
	UPSEE Online Form 2019<br>
<u>
Dr. A. P. J. Abdul Kalam Technical University, Uttar Pradesh
</u>

</h2>
<br>
</div><div id="exam_date">

<?php echo $date; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Exam form filling start date:-</th>
		<td >January 23, 2019 (11:00 AM)</td>
	</tr>

	<tr>
		<th >Last Date Apply Online:-</th>
		<td ><span class="red  "> March 15, 2019 (05:00 PM)</span></td>
	</tr>

	<tr>
		<th >Exam Date (B.tech/AG)</th>
		<td ><span class="red  "> April 29, 2019 (Sunday)</span></td>
	</tr>

	<tr>
		<th >Exam Date (Diploma/BSc)</th>
		<td ><span class="red  "> 5th May, 2019 (Saturday)</span></td>
	</tr>

	<tr>
		<th >Exam Date (MBA/MCA)</th>
		<td ><span class="red  "> 6th May, 2019 (Sunday)</span></td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div><div id="exam_fees">

<?php echo $fees; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<td ><b class="red">1300</b> &#8377 for male/General/OBC</td>
	</tr>

	<tr>
		<td ><b class="red">650</b> &#8377 FOR Female/SC/ST</td>
	</tr>

</tbody></table>



<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br>

</div><div id="exam_eligibility">

<?php echo $eligibility; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Course</th>
		<th >Qualification</th>
	</tr>

	<tr>
		<td ><span class=" "><b> B.Tech / B.Pharm / B.Des / MCA(Integrated)</b></span></td>
		<td >1. Passed intermediate examination of U.P. Board or 10+2 level examination or its equivalent from any recognized Board / University.
<br> 2.  Minimum 45% marks (40% marks for SC/ST Category candidates) in aggregate in required three subjects.</td>
	</tr>

	<tr>
		<td ><span class=" "><b> BHMCT / BFAD / BFA / MBA(Integrated),</b></span></td>
		<td >1. Passed intermediate examination of U.P. Board or 10+2 level examination or its equivalent from any recognized Board / University.
<br> 2.  Minimum 45% marks (40% marks for SC/ST Category candidates) in aggregate.</td>
	</tr>

	<tr>
		<td ><span class=" "><b>B. Arch</b></span></td>
		<td >1. Passed intermediate examination of U.P. Board or 10+2 level examination or its equivalent from any recognized Board / University.
<br> 2. Minimum 50% marks in aggregate</td>
	</tr>

	<tr>
		<td ><span class=" "><b>B.Tech. (Agriculture)</b></span></td>
		<td >1. Passed intermediate examination of U.P. Board or 10+2 level examination or its equivalent from any recognized Board / University.
<br> 2.  Minimum 45% marks (40% marks for SC/ST Category candidates) in aggregate.</td>
	</tr>

	<tr>
		<td ><span class=" "><b> B. Tech. (Biotechnology)</b></span></td>
		<td >1. Passed intermediate examination of U.P. Board or 10+2 level examination or its equivalent from any recognized Board / University.
<br> 2.  Minimum 45% marks (40% marks for SC/ST Category candidates) in aggregate.</td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div><div id="exam_pattern">

<?php echo $pattern; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<td >Objective multiple type questions.</td>
	</tr>

	<tr>
		<td >Paper 1, Paper 2, Paper 3 and Paper 4 shall be <b>OMR based</b> Test only.</td>
	</tr>

	<tr>
		<td >Paper 5, Paper 6, Paper 7, Paper 8, Paper 9, Paper 10 and Paper 11 will be <b>Computer Based</b> Test only.</td>
	</tr>

</tbody></table><ul class="list-group list-group-flush">
<li class="list-group-item"><span class="red  ">1.) Every objective multiple type question would carry four marks for each correct answer. More than one answers indicated against the question will be deemed as incorrect answer.</span></li>
</ul><ul class="list-group list-group-flush">
<li class="list-group-item"><span class="red  ">2.) There will be no negative marking. However, a record of incorrect answers given by a candidate will be kept separately.</span></li>
</ul>
<br>
<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br><br></div><div id="exam_selection">

<?php echo $selection; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<td >The cut-off percentage of marks in UPSEE-2019 for the merit of successful candidates is 25%
(20% for SC/ST) as per UP State Govt. order.</td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br><br></div><div id="exam_links">

<?php echo $links; ?>


<ul class="list-group">

<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx">Apply Online<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/Handler/FileHandler.ashx?i=File&ii=215&iii=Y" target="_blank">Instructions [English]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/Handler/FileHandler.ashx?i=File&ii=218&iii=Y" target="_blank">Instructions [Hindi]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://upsee.nic.in/publicinfo/public/home.aspx" target="_blank">Official Website<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="https://drive.google.com/file/d/1F-tPuKRvwwsLY2EH8VIS4KJ3N6m91DAp/view?usp=sharing" target="_blank">Syllabus<b> --> [Click Here]</b></a><br>

</ul>

</div>

 @endsection