@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card-deck">
                @each('projects._card', $projects, 'project')
            </div>
        @include('projects._createModel')
    </div>
@endsection
