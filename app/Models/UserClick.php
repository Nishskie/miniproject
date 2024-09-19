<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClick extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'link_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function link()
    {
        return $this->belongsTo(Links::class);
    }
}
