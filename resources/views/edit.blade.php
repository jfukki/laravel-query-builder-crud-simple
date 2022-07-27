@extends('master')


@section('content')


<div class="container my-3 mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h4>Updating Record Of <br> <small > {{$student->name}}</small> </h4>
            <hr>
        <form action="{{ route('update', $student->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" id="name"  value="{{$student->name}}"  name="name" placeholder="Full Name"> 
            </div>

            
            <div class="mb-3">
                <label for="city" class="form-label">Enter Your City</label>
                <input type="text" class="form-control" id="city"  value="{{$student->city}}" name="city" placeholder="Enter City"> 
            </div>

            
            <div class="mb-3">
                <label for="marks" class="form-label">Enter Your Marks</label>
                <input type="number" class="form-control" id="marks" value="{{$student->marks}}"  name="marks" placeholder="Enter Marks"> 
            </div>

            
             
            <button type="submit" class="btn btn-success">Update Record</button>
        </form>

        </div>
    </div>
  </div>


@endsection