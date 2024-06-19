<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnirs extends Model
{
    use HasFactory;

    protected $primaryKey = 'TurniraID';

    public function maci()
    {
        return $this->hasMany(Macs::class, 'TurniraID', 'TurniraID');
    }
    protected $table = 'turniri';
}
