<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Card;

class Like extends Model
{
    use HasFactory;

    protected $table = 'user_likes';

        protected $fillable = [
        'user_id',
        'card_id'
    ];

       public function cards(){
        return $this->belongsTo(Card::class);
    }
        public function users(){
        return $this->belongsTo(User::class);
    }
    }
