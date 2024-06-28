<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speles extends Model
{
    use HasFactory;

    protected $table = 'speles';

    public function maca()
    {
        return $this->belongsTo(Macs::class, 'MacaID', 'MacaID');
    }


    public function speletajs()
    {
        return $this->belongsTo(Speletajs::class, 'SpeletajsID');
    }
}
