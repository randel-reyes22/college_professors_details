@extends('base') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br><h2 class="display-5">Update New Student Information</h2></br>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif
        <form method="post" action="{{ route('students.update', $student->id) }}">
            @method('PATCH') 
            @csrf

            <div class="form-group">
                <label for="studentNo">Student No.</label>
                <input type="text" class="form-control" name="studentNo" readonly value={{ $student->studentNo }}
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" value={{ $student->lastname }}
            </div>

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" value={{ $student->firstname }}
            </div>

            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" class="form-control" name="middlename" value={{ $student->middlename }}
            </div>


            <div class="form-group">
                <label for="gender">Gender</label>
                <br><input type="radio" name="gender" <?=$student['gender']=="Male" ? "checked" : ""?> value="Male"> Male
                <input type="radio" name="gender" <?=$student['gender']=="Female" ? "checked" : ""?> value="Female"> Female
            </br></div>   
        
            <div class="form-group">
                <label for="homeAddress">Home Address</label>
                <input type="text" class="form-control" name="homeAddress" value={{ $student->homeAddress }}
            </div>

            <div class="form-group">
                <label for="contactNo">Contact No.</label>
                <input type="text" class="form-control" name="contactNo" value={{ $student->contactNo }}
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" class="form-control" name="course" value={{ $student->course }}
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" name="department" value={{ $student->department }}
            </div>
            
            <div class="form-group">
                <label for="year">Year</label>
                <br>
                <select name="year">
                <option <?php if($student['year']=="1"){echo "selected";}?>>1</option>
                <option <?php if($student['year']=="2"){echo "selected";}?>>2</option>
                <option <?php if($student['year']=="3"){echo "selected";}?>>3</option>
                <option <?php if($student['year']=="4"){echo "selected";}?>>4</option>
                <option <?php if($student['year']=="5"){echo "selected";}?>>5</option>
                <option <?php if($student['year']=="6"){echo "selected";}?>>6</option>
                </select>
                </br>
            </div> 

            <input type="submit" name="submit" value="Update Student Information Student" >
                
        </form>
    </div>
</div>
@endsection