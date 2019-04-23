@extends('layout')

@section('title')
    Edit Exam
@endsection

@section('develop')
<div>
    <form action="/update/{{$exam->id}}" method="POST">

        {{method_field('PATCH')}}
        {{ csrf_field() }}
    
          <div class="row">
              <div class="col-6">
                  <div class="form-group">
                      <label>Exam Name</label>
                      <input type="text" name= "exam_name" class="form-control border border-success"  value="{{$exam->exam_name}}">
                  </div>
                    <div class="form-group">
                          <label>Exam Link</label>
                          <input type="text" name= "exam_link" class="form-control border border-success" value="{{$exam->exam_link}}">
                          <a href="{{$exam->exam_link}}" target="_blank">Click Here</a>
                    </div>
              
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name= "dept" autocomplete="off" class="form-control border border-success" value="{{$exam->dept}}">
                    </div>
              </div>
        
              <div class="col-6">
                  <div class="form-group">
                      <label>Next Check</label>
                      <date-picker format="yyyy-MM-dd" name= "next_check" input-class="form-control border border-success" value="{{$exam->next_check}}"></date-picker>
                  </div>
            <br>


                    <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><b>Status</b></label>
                          </div>
            
                          <select class="custom-select" id="inputGroupSelect01" name="status">
                            <option selected value="{{$exam->status}}">Previous Status -> {{$exam->status}}</option>
                            <option value="Online-Form">Online-Form</option>
                            <option value="Admit-Card">Admit-Card</option>
                            <option value="Form-Correction">Form-Correction</option>
                            <option value="Result">Result</option>
                          </select>
                    </div>

            <br>


                    <div class="form-group">
                        <label>Completed On</label>
                        <date-picker format="yyyy-MM-dd" name= "completed_on" input-class="form-control border border-success" value="{{$exam->completed_on}}"></date-picker>
                    </div>


              </div>
          </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
    
      </form>
    
</div>
@endsection

@section('scripts')
<script src="/js/vue-develop.js"></script>
@endsection