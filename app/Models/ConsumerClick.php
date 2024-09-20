<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumerClick extends Model
{
    use HasFactory;

    protected $fillable = ['consumer_id', 'link_id'];

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function link()
    {
        return $this->belongsTo(Links::class);
    }
}
