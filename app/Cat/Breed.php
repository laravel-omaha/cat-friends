<?php

namespace App\Cat;

use App\Cat;
use App\Cat\Toy;
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

    /**
     * Breeds have many Favorite Toys.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function toys()
    {
        return $this->belongsToMany(Toy::class);
    }
}
