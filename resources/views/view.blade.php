@extends('master')

@section('content')

    <div class="container mt-5">
        <div class="row">

            <div class="col-md-6 offset-md-8">
                <a href="{{ route('create') }}" class="btn btn-primary btn-sm">Enter Data</a>
            </div>
        </div>
    </div>
    <div class="container my-3 mt-5">
        <div class="row">
            <div class="col">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">City</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
 
                   @foreach($students as $student)

                         <tr>
                            <th scope="row">{{$student->name}}</th>
                            <td>{{$student->city}}</td>
                            <td>{{$student->marks}}</td>
                            <td>
                                <a  href=" {{ route('delete', $student->id)}}  " class="btn btn-sm btn-danger">Delete</a>
                                <a href="{{ route('edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('detail', $student->id) }}" class="btn btn-sm btn-success">Detail</a>
                            
                            </td>
                        </tr>
                     

                   @endforeach
                    
                   {{$students->links() }}
                </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection