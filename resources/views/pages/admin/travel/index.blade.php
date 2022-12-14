@extends('adminlte::page')

@section('title', 'Roles Management')

@section('content_header')
    <h3>
        Travel Management
    </h3>
@stop

@section('content')


<div class="card card-outline card-danger collapsed-card w-100 h-3">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            {{-- <h2>Role Management</h2> --}}

        </div>

        <div class="pull-right m-2">

        {{-- @can('role-create') --}}

            <a class="btn btn-success" href="{{ route('travel-create') }}"> Create New Travel</a>

        {{-- @endcan --}}

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered ">

  <tr>

     <th>ID</th>
     <th>Title</th>
     <th>Location</th>
     <th>Type</th>
     <th>Departure Date</th>
     <th width="280px">Action</th>

  </tr>

    @foreach ($travels as $key => $travel)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $travel->title }}</td>
        <td>{{ $travel->location }}</td>
        <td>{{ $travel->departure_date }}</td>
        <td>{{ $travel->type }}</td>

        <td>

            <a class="btn btn-info" href="{{ route('travel-show', $travel->id) }}"> <i class="fas fa-eye"></i></a>
            <a class="btn btn-warning" href="{{ route('travel-edit', $travel->id) }}"> <i class="fas fa-edit"></i></a>
            <a class="btn btn-danger" href="{{ route('travel-destroy', $travel->id) }}"> <i class="fas fa-trash"></i></a>

        </td>

    </tr>

    @endforeach

</table>


{{-- {!! $roles->render() !!} --}}

</div>
{{-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> --}}

@stop

