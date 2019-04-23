@extends('layout')

@section('title')
   Sarkari XML Checker
@endsection

@section('develop')
<div class="container">
   <button class="button btn-success" v-on:click="scan" v-if="user_not_genuine">Start Scanning Rival Sites</button>
   <div v-show="ready_to_submit">
         <h4><b>Scanning Rival Sites....</b></h4>
         <img src="images/searching.gif" alt="Scanning" width="500px">
   </div>
   <div v-html="rawhtml"></div>
</div>
@endsection


@section('scripts')
   <script src="/js/vue-develop.js"></script>
@endsection