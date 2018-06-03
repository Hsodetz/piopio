<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\City;

class Provincia extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
