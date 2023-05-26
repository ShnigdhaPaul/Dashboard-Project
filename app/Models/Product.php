<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['name','quantity' , 'amount', 'user_id'];
    function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }
    
}
