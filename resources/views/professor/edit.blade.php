@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br><h2 class="display-5">Update New Professor Information</h2></br>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <form method="post" action="{{ route('professor.update', $professor->id) }}">
            @method('PATCH') 
            @csrf

            <div class="form-group">
                <label for="professor_id">Professor ID.</label>
                <input type="text" class="form-control" name="professor_id" readonly value={{ $professor->professor_id }}
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" value={{ $professor->lastname }}
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" value={{ $professor->firstname }}
            </div>

            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" class="form-control" name="middlename" value={{ $professor->middlename }}
            </div>


            <div class="form-group">
                <label for="gender">Gender</label>
                <br><input type="radio" name="gender" <?=$professor['gender']=="Male" ? "checked" : ""?> value="Male"> Male
                <input type="radio" name="gender" <?=$professor['gender']=="Female" ? "checked" : ""?> value="Female"> Female
            </br></div>   
        
            <div class="form-group">
                <label for="homeAddress">Home Address</label>
                <input type="text" class="form-control" name="homeAddress" value={{ $professor->homeAddress }}
            </div>

            <div class="form-group">
                <label for="contactNo">Contact No.</label>
                <input type="text" class="form-control" name="contactNo" value={{ $professor->contactNo }}
            </div>

      

            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" name="department" value={{ $professor->department }}
            </div>
        

            <input type="submit" name="submit" value="Update Professor Information Professor" >
                
        </form>
    </div>
</div>
@endsection