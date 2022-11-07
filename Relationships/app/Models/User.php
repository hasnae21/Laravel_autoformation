<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];
    
    /**
     * Get the phone associated with the user using the methode (hasOne())
     */


    public function carteOne()
    {
        return $this->hasOne(Carte::class);
    }

    // public function carteMany()
    // {
    //     return $this->hasMany(Carte::class);
    // }


}