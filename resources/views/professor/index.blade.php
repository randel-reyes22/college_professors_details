@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <br><h3 class="display-5">College Professor Information</h3></br>
    <div>
    <a href="{{ route('professor.create')}}" class="btn btn-primary">Add New Professor</a>
    </div>   

  <table class="table table-striped">
    <thead>
        <tr>       
          <td>Professor ID</td>
          <td>Name</td>
          <td>Gender</td>
          <td>Home Address</td>
          <td>Contact No.</td>
          <td>Department</td>
          <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        @foreach($professor as $professor)
        <tr>
            <td>{{$professor->professor_id}}</td>
            <td>{{$professor->firstname}} {{$professor->middlename}} {{$professor->lastname}}</td>
            <td>{{$professor->gender}}</td>
            <td>{{$professor->homeAddress}}</td>
            <td>{{$professor->contactNo}}</td>
            <td>{{$professor->department}}</td>
           
            <td>
            <a href="{{ route('professor.edit',$professor->id)}}" class="btn btn-primary">Edit</a>    
                <form action="{{ route('professor.destroy', $professor->id)}}" method="post" class="d-inline-block">
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