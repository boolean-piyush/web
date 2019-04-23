@extends('layout')

@section('title')
   Suspended Exams
@endsection

@section('welcome')
   <button type="button" v-on:click="check_suspensions">Check</button>
   <h4>Total Rows @{{suspends.length}}</h4>
   <ul class="list-group">
   <li class="list-group-item" v-for="exam in suspends"><a :href="exam[1]">@{{exam[0]}}</a></li>
   </ul>


@endsection