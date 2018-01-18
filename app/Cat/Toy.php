<?php

namespace App\Cat;

use App\Cat\Breed;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    /**
     * The fillable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Toys are the favorites of many Breeds.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function breeds()
    {
        return $this->belongsToMany(Breed::class);
    }
}
