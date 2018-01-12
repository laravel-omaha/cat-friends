@extends('layouts.app')

@section('content')

<p>
    <a class="button is-primary" href="{{ route('cats.create') }}">
        <span>Add a Cat</span>
        <icon icon="plus"></icon>
    </a>
</p>

@foreach ($cats as $cat)
    <div class="box">
        <div class="columns">
            <div class="column is-one-third">
                <figure class="image is-4by2" style="width: 300px">
                    <img src="{{ asset('img/cats/' . $cat->image) }}" alt="{{ $cat->name }}">
                </figure>
            </div>

            <div class="column">
                <div class="content">
                    <p class="title">{{ $cat->name }}</p>
                    <p class="subtitle">{{ $cat->age }} yrs old</p>

                    <p><strong>Breed:</strong> {{ $cat->breed->name }}</p>
                    <p><strong>Bio:</strong></p>

                    {{ $cat->bio }}
                </div>

                <div class="level box">
                    <div class="level-item">
                        <a href="{{ route('cats.edit', $cat) }}">
                            <span>Edit</span>
                            <icon icon="pencil"></icon>
                        </a>
                    </div>
                    <div class="level-item">
                        <delete-button route="{{ route('cats.destroy', $cat) }}">
                            <span>Delete</span>
                            <icon icon="delete"></icon>
                        </delete-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
