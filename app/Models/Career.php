<?php

namespace App\Models;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;
    protected $table = 'careers';
    public function registration()
    {
        
        return $this->hasMany(Registration::class);
    }
}