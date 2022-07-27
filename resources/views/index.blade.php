@extends('master')


@section('content')


<div class="container my-3 mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">

        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control" id="name"   name="name" placeholder="Full Name"> 
            </div>

            
            <div class="mb-3">
                <label for="city" class="form-label">Enter Your City</label>
                <input type="text" class="form-control" id="city"   name="city" placeholder="Enter City"> 
            </div>

            
            <div class="mb-3">
                <label for="marks" class="form-label">Enter Your Marks</label>
                <input type="number" class="form-control" id="marks"   name="marks" placeholder="Enter Marks"> 
            </div>

            
             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
  </div>


@endsection