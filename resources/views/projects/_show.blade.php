@extends('layouts.app')

@section('content')
    <div class="container">
        @include('projects._createForm')
        @include('projects._list')
    </div>
    @endsection
