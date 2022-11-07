<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * Get the phone associated with the user using the methode (hasOne())
     */

    public function cin()
    {
        return $this->hasOne(Cin::class)->withDefault([
            'cin'=>'no_data '
        ]);
    }
}