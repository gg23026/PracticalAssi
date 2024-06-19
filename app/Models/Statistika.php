<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistika extends Model
{
    use HasFactory;

    protected $primaryKey = 'StatistikasID';

    public function speletajs()
    {
        return $this->belongsTo(Speletajs::class, 'SpeletajsID', 'SpeletajsID');
    }

    public function komanda()
    {
        return $this->belongsTo(Komanda::class, 'KomandasID', 'KomandasID');
    }
    protected $table = 'statistika';
}

