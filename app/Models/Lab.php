<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'used', 'network', 'user_id'];
    

    // Relasi satu ke banyak dengan PC
    public function pcs()
    {
        return $this->hasMany(Pc::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
