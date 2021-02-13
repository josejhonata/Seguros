<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
      protected $fillable = [
        'local',
        'data',
        'valor',
        'user_id',
    ];

    public function users(){
    	return $this->belongTo(User::class);
    }
}
