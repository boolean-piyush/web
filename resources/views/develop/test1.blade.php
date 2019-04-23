@extends('layout')

@section('title')
    test1
@endsection

@section('develop')

<div>
<p id="df" v-on:resize="ght">@{{wid_value}}</p>
    <h1 class="border border-success" ref="wid">@{{widtho}}</h1>
</div>

{{-- <script>document.getElementById("df").innerHTML = document.getElementById("wid").clientWidth</script> --}}


{{-- <style> 
    p {
      border-style: solid;
      display:inline;
      position:relative;
      animation-name: example;
      animation-duration: 4s;
      animation-iteration-count: infinite;
      animation-direction:alternate
      
    }
    
    div {
      border-style: solid;
    }
    
    @keyframes example {
      0%   {left:0%}
      100%  {left:100%}
    }
    </style>
    </head>
    <body>
    
    <div><p>Hello this is the text</p></div>
    
    </body> --}}

@endsection

@section('scripts')
<script src="/js/vue-develop.js"></script>
@endsection