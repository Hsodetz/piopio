<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Provincia;

class City extends Model
{
    //
    protected $fillable = [
        'provincia_id', 'name',
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

}
