@extends('master')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <h2>Detail Page</h2>
                <hr>
            </div>

           <div class="col-md-4 offset-md-4 text-center">
                 <p>Full Name: {{$std->name}}</p>
                 <p>City: {{$std->city}}</p>
                 <p>Marks: {{$std->marks}}</p>

 
           </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
            <a href="{{ route('view') }}" class="btn btn-sm btn-warning" >View Table</a>
            </div>
        </div>
    </div>
@endsection 