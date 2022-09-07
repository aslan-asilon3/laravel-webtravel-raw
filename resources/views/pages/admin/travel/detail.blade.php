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


<h1>Detail</h1>


{{-- {!! $roles->render() !!} --}}

</div>
{{-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> --}}

@stop

