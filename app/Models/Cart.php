<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "carts";
    
    public function getuser(){
        return $this->belongsTo(User::class);
    }
}
