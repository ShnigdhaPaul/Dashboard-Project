<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','quantity' , 'amount', 'user_id'];
    function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }
    use HasFactory;
}
