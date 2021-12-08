@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('students.create') }}">
                    Add student
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> Student list</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>E-mail cím</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $stud)
                        <tr>
                            <td>{{$stud->id}}</td>
                            <td>{{$stud->name}}</td>
                            <td>{{$stud->email}}</td>
                            <td><a href="{{ route('students.edit', $stud->id) }}" class="btn btn-xs btn-info">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('students.destroy',$stud->id) }}" method="post"
                                      onsubmit="return confirm('Are you sure?');" style="display: inline-block;
                                    >
                                @csrf
                                @method("DELETE")
                                    <button class=" btn btn-xs btn-danger
                                " type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
