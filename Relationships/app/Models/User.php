<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    //use HasFactory;

    /**
     * Get the phone associated with the user using the methode (hasOne())
     */

    public function carte()
    {
        return $this->hasOne(Carte::class)->withDefault([
            'cin'=>'no_data '
        ]);
    }
}