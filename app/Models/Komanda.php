<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komanda extends Model
{
    use HasFactory;

    protected $table = 'komandas';
    protected $primaryKey = 'KomandasID';
    protected $fillable = ['Nosaukums', 'IzveidesDatums', 'Valsts', 'Rangs', 'apraksts',];

    public function speletaji()
    {
        return $this->hasMany(Speletajs::class, 'KomandasID', 'KomandasID');
    }

    public function maci1()
    {
        return $this->hasMany(Macs::class, 'Komanda1ID', 'KomandasID');
    }

    public function maci2()
    {
        return $this->hasMany(Macs::class, 'Komanda2ID', 'KomandasID');
    }

    public function statistika()
    {
        return $this->hasMany(Statistika::class, 'KomandasID', 'KomandasID');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
