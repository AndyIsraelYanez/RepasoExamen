<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    public function loan(){
        return $this->hasMany(Loan::class);
    }

    public function author(){
        return $this->hasMany(Author::class);
    }
}

