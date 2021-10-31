@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <br><h2 class="display-5">Add New Professor</h2></br>
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

      <form method="post" action="{{ route('professor.store') }}">
          @csrf
          <div class="form-group">    
              <label for="professor_id">Professor ID.</label>
              <input type="text" class="form-control" name="professor_id"/>
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
              <label for="department">Department</label>
              <input type="text" class="form-control" name="department"/>
          </div>

          <input type="submit" name="submit" value="Add New Professor">         
             
      </form>
    </div>
  </div>
</div>
@endsection