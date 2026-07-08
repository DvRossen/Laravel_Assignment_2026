<?php

namespace App\Models; 


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Like;

class Card extends Model {
    use HasFactory;
   protected $table = 'cards';

   protected $fillable = [ 'user_id','title', 'type', 'description', 'imageUrl', 'date','is_active', 'location'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
   }