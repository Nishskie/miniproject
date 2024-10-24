<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $table = 'consumers';

    protected $fillable = ['email'];

    public function links(){
        return $this->hasMany(Links::class);
    }

}
