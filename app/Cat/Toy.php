<?php

namespace App\Cat;

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
}
