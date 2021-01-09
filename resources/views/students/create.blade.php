@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <br><h2 class="display-5">Add New Student</h2></br>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="studentNo">Student No.</label>
              <input type="text" class="form-control" name="studentNo"/>
          </div>

          <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>

          <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" name="firstname"/>
          </div>

          <div class="form-group">
              <label for="middlename">Middle Name</label>
              <input type="text" class="form-control" name="middlename"/>
          </div>

          <div class="form-group">
              <label for="gender">Gender</label>      
              <br><input type="radio"  name="gender" value="Male" > Male 
              <input type="radio"  name="gender" value="Female" > Female
          <br></div>

          <div class="form-group">
              <label for="homeAddress">Home Address</label>
              <input type="text" class="form-control" name="homeAddress"/>
          </div>     

          <div class="form-group">
              <label for="contactNo">Contact No.</label>
              <input type="text" class="form-control" name="contactNo"/>
          </div>    

          <div class="form-group">
              <label for="course">Course</label>
              <input type="text" class="form-control" name="course"/>
          </div>

          <div class="form-group">
              <label for="department">Department</label>
              <input type="text" class="form-control" name="department"/>
          </div>

          <div class="form-group">
              <label for="year">Year</label>
              <br>
              <select name="year" id="year">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>
              </br>
          </div> 

          <input type="submit" name="submit" value="Add New Student">         
             
      </form>
    </div>
  </div>
</div>
@endsection