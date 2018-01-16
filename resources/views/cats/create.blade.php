@extends('layouts.app')

@section('content')


<h2>Add a Cat</h2>

{{ Form::open(['route' => ['cats.store'], 'method' => 'POST']) }}

    @include('cats.form')

    <p class="control">
        {{ Form::submit('Create', ['class' => 'button is-primary']) }}
    </p>

{{ Form::close() }}

@endsection
