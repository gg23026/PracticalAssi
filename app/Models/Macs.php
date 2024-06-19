<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macs extends Model
{
    use HasFactory;

    protected $primaryKey = 'MacaID';

    public function turnirs()
    {
        return $this->belongsTo(Turnirs::class, 'TurniraID', 'TurniraID');
    }

    public function komanda1()
    {
        return $this->belongsTo(Komanda::class, 'Komanda1ID', 'KomandasID');
    }

    public function komanda2()
    {
        return $this->belongsTo(Komanda::class, 'Komanda2ID', 'KomandasID');
    }

    public function speles()
    {
        return $this->hasMany(Speles::class, 'MacaID', 'MacaID');
    }
    protected $table = 'maci';
}

