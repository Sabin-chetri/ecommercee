<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "carts";
    
    public function getUsers(){
        return $this->belongsTo(User::class,'users_carts','cartID','userID');
    }
}
