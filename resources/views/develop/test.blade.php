@extends('layout')

@section('title')
   test
@endsection

@section('develop')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: lightseagreen; color: white">
            <h5 class="modal-title" id="exampleModalLongTitle">Register for Latest Jobs</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form action="/test" method="post">

                     <label>Mobile (+91) <br><input autocomplete="off" type="text" placeholder="9044xxxxx9" v-model="user_mobile">
                        <span :class="{red:!validate_user_mobile, green:validate_user_mobile}">
                              <b>@{{validate_user_mobile ? "Correct Mobile :-)" : "Incorrect Mobile :-("}}</b></span></label>
                              <br>

                  <label>Email <br><input autocomplete="off" type="text" placeholder="example@mail.com" v-model="user_email">
                     <span :class="{red:!validate_user_email, green:validate_user_email}">
                        <b>@{{validate_user_email ? "Correct Email :-)" : "Incorrect Email :-("}}</b></span></label>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" :disabled="user_not_genuine" data-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>

   <form action="/test" method="post" target="_blank">
      {{csrf_field()}}
      <input type="submit" value="ss">
   </form>

@php
    echo $_SERVER['SERVER_PORT'];
@endphp

@endsection

@section('scripts')
<script src="/js/vue-develop.js"></script>
@endsection