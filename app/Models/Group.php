<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function creator(){
        return $this->belongsTo(User::class);

    }
    public function messages(){
        return $this->hasMany(Message::class);
    }

    protected $fillable = [
        'user_id',
        'name',
   ];

}