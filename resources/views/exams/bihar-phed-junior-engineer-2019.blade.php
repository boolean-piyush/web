@extends('layout')

 @section('title') 
 	Bihar PHED Junior Engineer JOB | Online Form 2019
 @endsection 

 @section('meta') 
 	Bihar PHED Junior Engineer-2019 JOB | Online Form | 214 Vacancies
 @endsection 

 @section('content')



<div id="main_heading"><h2 class="text-center main-heading">
	Bihar PHED Junior Engineer Online Form 2019<br>
<u>
Public Health Engineering Department (PHED) 2019
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
		<td >15/01/2019</td>
	</tr>

	<tr>
		<th >Last Date Apply Online:-</th>
		<td ><span class="red  "><b>31/01/2019 (upto 5:00 PM) </b></span></td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Register.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div>

<div id="exam_fees">

<?php echo $fees; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th ><span class="green  ">Free for all :-)</span></th>
	</tr>

</tbody></table>



<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Register.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br>

</div>

<div id="exam_eligibility">

<?php echo $eligibility; ?>
<p> <b>1.) Age Limit</b> </p>
<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Gen</th>
		<th >OBC</th>
		<th >SC/ST</th>
	</tr>

	<tr>
		<td >18 to 37 years</td>
		<td >18 to 40 years</td>
		<td >18 to 42 years</td>
	</tr>

</tbody></table><p> <b>2.) Qualification</b> </p>
<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th >Post</th>
		<th >Eligibility</th>
	</tr>

	<tr>
		<td >Junior Engineer (JE) in Civil Engineering</td>
		<td >Diploma in Civil Engineering from any recognized Board in India.</td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Register.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div>

<div id="exam_vacancies">

<?php echo $vacancies; ?>

<table class="table table-sm table-bordered table-striped">
<tbody>
	<tr>
		<th  class="text-center" colspan=2>Junior Engineer Vacancies </th>
	</tr>

	<tr>
		<th >Gen</th>
		<td >118</td>
	</tr>

	<tr>
		<th >OBC</th>
		<td >47</td>
	</tr>

	<tr>
		<th >EBC</th>
		<td >41</td>
	</tr>

	<tr>
		<th >OBC Female</th>
		<td >08</td>
	</tr>

	<tr>
		<th >SC/ST</th>
		<td >0</td>
	</tr>

	<tr>
		<th ><span class="green  ">Total</span></th>
		<td ><span class="red  "><b>214</b></span></td>
	</tr>

</tbody></table>

<ul class="list-group">
	<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Register.aspx">Apply Online<b> --> [Click Here]</b> </a>
</ul><br></div>

<div id="exam_links">

<?php echo $links; ?>


<ul class="list-group">

<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Register.aspx" target="_blank">Apply Online<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Login.aspx" target="_blank">Form Correction<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="http://fts.bih.nic.in/PHEDRECJE/Public/Advt_JuniorEngineer_2019.pdf" target="_blank">Instructions [Hindi]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="http://phed.bih.nic.in/" target="_blank">Official Website<b> --> [Click Here]</b></a><br>

</ul>

</div>

 @endsection