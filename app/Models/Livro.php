<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'note', 'author', 'publisher',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
