<?php

namespace App\Models; 


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Tag;

class Card extends Model {
    use HasFactory;
   protected $table = 'cards';

   protected $fillable = ['title', 'type', 'description', 'imageUrl', 'date'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
   }