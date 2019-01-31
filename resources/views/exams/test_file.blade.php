@extends('layout')

 @section('title') 
 	
 @endsection 

 @section('meta') 
 	
 @endsection 

 @section('content')



<div id="main_heading"><h2 class="text-center main-heading">
	<br>
<u>

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
		<td ></td>
	</tr>

	<tr>
		<th >Last Date Apply Online:-</th>
		<td ></td>
	</tr>

	<tr>
		<th >Last Date Fees Payment:-</th>
		<td ></td>
	</tr>

	<tr>
		<th >Admit Card Available:-</th>
		<td ></td>
	</tr>

	<tr>
		<th >Exam Date:-</th>
		<td ></td>
	</tr>

	<tr>
		<th >Result Date:-</th>
		<td ></td>
	</tr>

</tbody></table><child-status myhref="" stage=bao last_date="2019-01-27"></child-status><br></div>

<div id="exam_fees"></div>

<div id="exam_eligibility"></div>

<div id="exam_links">

<?php echo $links; ?>
<child-status myhref="" stage=bao last_date="2019-01-27"></child-status><br>

<ul class="list-group">

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Form Correction<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Pay Exam Fees<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Verify Fees Payment<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Candidate Login<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">How to Apply (Step by Step)<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Instructions [English]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Instructions [Hindi]<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Official Website<b> --> [Click Here]</b></a><br>

<a class="blue list-group_item text-center list-group-item-danger" href="" target="_blank">Syllabus<b> --> [Click Here]</b></a><br>

</ul>

</div>

 @endsection

