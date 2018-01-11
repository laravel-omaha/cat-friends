<?php

namespace App\Cat;

use App\Cat;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
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
     * Breeds have many Cats.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cats()
    {
        return $this->hasMany(Cat::class);
    }
}
