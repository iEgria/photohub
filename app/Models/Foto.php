<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $fillable = ['users_id', 'foto', 'judul'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
