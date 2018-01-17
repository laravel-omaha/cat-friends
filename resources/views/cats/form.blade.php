<p class="control">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'input']) }}
</p>

<p class="control">
    {{ Form::label('age', 'Age') }}
    {{ Form::number('age', null, ['class' => 'input']) }}
</p>

<p class="control">
    {{ Form::label('breed_id', 'Breed') }}
    <div class="select">
        {{ Form::select('breed_id', App\Cat\Breed::all()->pluck('name', 'id'), null) }}
    </div>
</p>

<p class="control">
    {{ Form::label('image', 'Image File') }}
    {{ Form::text('image', null, ['class' => 'input']) }}
</p>

<p class="control">
    {{ Form::label('bio', 'Bio') }}
    {{ Form::textarea('bio', null, ['class' => 'textarea']) }}
</p>
