@extends('layout')

@section('title')
   Testing
@endsection

@section('develop')

<form action="/test" method="post">
   {{ csrf_field() }}

   <div class="form-group">
      <label>Example multiple select</label>
      <select multiple class="custom-select" v-model="depts">
        <option>Railway</option>
        <option>Bank</option>
        <option>Defence</option>
        <option>Navy</option>
        <option>MHA</option>
      </select>
    </div>

<h4>@{{depts}}</h4>
<input type="hidden"name="jsono" :value="JSON.stringify(depts)">
   <button type="submit">Submit Array</button>
</form>



@endsection

@section('scripts')
   <script src="/js/vue-develop.js"></script>
@endsection