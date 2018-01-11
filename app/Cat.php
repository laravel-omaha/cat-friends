<?php

namespace App;

use App\Cat\Breed;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    /**
     * The fillable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'bio',
        'breed_id',
    ];

    /**
     * Cats have a Breed.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
}
