<?php
 
namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 
use Illuminate\Database\Eloquent\Model;



class Carte extends Model
{

    use HasFactory;

    //protected $fillable = ['cin','user_id'];

    /**
     * Defining The Inverse Of The Relationship
     * Get the user that owns the phone using the methode (belongsTo())
     */


    public function userOne()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    // public function userMany()
    // {
    //     return $this->belongsToMany(User::class);
    //     // ->withDefault();
    // }

}