@extends('layouts.app')

@section('content')


<h2>Edit Cat - {{ $cat->name }}</h2>

{{ Form::model($cat, ['route' => ['cats.update', $cat->id], 'method' => 'PUT']) }}

    @include('cats.form')

    <p class="control">
        {{ Form::submit('Save', ['class' => 'button is-primary']) }}
    </p>

{{ Form::close() }}

@endsection
