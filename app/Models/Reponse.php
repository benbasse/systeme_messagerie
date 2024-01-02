<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_questions',
        'contenue'
    ];

    public function reponse()
    {
        return $this->hasOne(Reponse::class);
    }

}
