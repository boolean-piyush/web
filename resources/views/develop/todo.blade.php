@extends('layout')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
@endsection

@section('title')
   ToDo List
@endsection

@section('develop')
   <table class="table table-sm table-bordered table-striped">
      <thead>
         <tr>
            <th>Work</th>
            <th>Priority</th>
         </tr>
      </thead>
      <tbody>
         <tr v-for="todo in todos">
            <td>@{{todo[0]}}</td>
            <td>@{{todo[1]}}</td>
         </tr>
      </tbody>
   </table>

   <input type="text" v-model="new_work[0]"><input type="text" v-model="new_work[1]"><button v-on:click="on_add_work">Add Work</button>

@endsection


@section('scripts')
   <script>

      const app = new Vue({
         el: '#develop',
         data: {
            todos:[],
            new_work:[],
         },
         created() {
            $.get( '/get-todos',
            function(data) {
                  console.log(data);
                  for (const key in data) {
                     this.todos.push(data[key]);
                  }
            }.bind(this));
         },
         methods: {
            on_add_work(){
               
               $.get( '/get-todos',
               function(data) {
                     console.log(data);
                     for (const key in data) {
                        this.todos.push(data[key]);
                     }
               }.bind(this));

               this.todos.splice(0, 1, this.new_work);
            }
         }
      });
      </script>
@endsection