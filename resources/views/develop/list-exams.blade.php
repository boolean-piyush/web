@extends('layout')

@section('title')
List all exams in a table
@endsection

@section('develop')
<h3>Total exams = {{count($exams)}}</h3>

<table class="table table-striped table-sm table-bordered">
<thead>
    <tr>
      <th scope="col">Update</th>
      <th scope="col">Exam Name</th>
      <th>Website Link</th>
      <th scope="col">Dept</th>
      <th scope="col">Exam Link</th>
      <th scope="col">Qualification</th>
      <th scope="col">Next Check</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

@foreach ($exams as $exam)
      <tr>
        <th><a target="_blank" href="/edit/{{$exam->id}}">Edit</a></th>
        <th>{{$exam->exam_name}}</th>
        <th><a target="_blank" href= "/exams/{{$exam->exam_name}}">Website Link</a></th>
        <th>{{$exam->dept}}</th>
        <td><a target="_blank" href="{{$exam->exam_link}}"><b>{{$exam->exam_link}}</b></a></td>
        <td>{{$exam->qualification}}</td>
        <th>{{$exam->next_check}}</th>
        <td>{{$exam->status}}</td>
      </tr>

@endforeach

</tbody>
</table>
@endsection