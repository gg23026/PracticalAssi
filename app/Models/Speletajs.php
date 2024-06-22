<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speletajs extends Model
{
    use HasFactory;

    protected $table = 'speletaji';
    protected $primaryKey = 'SpeletajsID';

    protected $fillable = [
        'Vards',
        'Uzvards',
        'Lietotajvards',
        'KomandasID',
        'Rangs',
        'apraksts'
    ];

    public function komanda()
    {
        return $this->belongsTo(Komanda::class, 'KomandasID', 'KomandasID');
    }
}


