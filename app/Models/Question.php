<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_module',
        'contenue'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function reponse()
    {
        return $this->hasOne(Reponse::class);
    }

}
