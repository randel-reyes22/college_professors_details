@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <br><h3 class="display-5">College Students Basic Information</h3></br>
    <div>
    <a href="{{ route('students.create')}}" class="btn btn-primary">Add New Student</a>
    </div>   

  <table class="table table-striped">
    <thead>
        <tr>       
          <td>Student No.</td>
          <td>Name</td>
          <td>Gender</td>
          <td>Home Address</td>
          <td>Contact No.</td>
          <td>Course</td>
          <td>Department</td>
          <td>Year</td>
          <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->studentNo}}</td>
            <td>{{$student->firstname}} {{$student->middlename}} {{$student->lastname}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->homeAddress}}</td>
            <td>{{$student->contactNo}}</td>
            <td>{{$student->course}}</td>
            <td>{{$student->department}}</td>
            <td>{{$student->year}}</td>
           
            <td>
            <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>    
                <form action="{{ route('students.destroy', $student->id)}}" method="post" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-primary" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection