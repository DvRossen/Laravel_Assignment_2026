<?php

namespace App\Models; 

use illuminate\Support\Arr;

class Card {
    public static function all():array
    {
    return [
            [
            'id' => '1',
            'title' => 'Test 1',
            'description' => 'bla bla bla double bla 
            bla bla bla double bla 
            bla bla bla double bla
            bla bla bla double bla bla bla bla double bla
            bla bla bla double bla end',
            'image' => 'https://cdn.pixabay.com/photo/2022/08/08/19/36/landscape-7373484_1280.jpg'
            ],[
            'id' => '2',
            'title' => 'Test 2',
            'description' => 'Lorem Ipsum or whatever',
            'image' => 'https://cdn.pixabay.com/photo/2014/10/14/20/24/soccer-488700_1280.jpg'
            ],[
            'id' => '3',
            'title' => 'Test 3',
            'description' => ':)',
            'image' => 'https://cdn.pixabay.com/photo/2017/12/10/14/47/pizza-3010062_1280.jpg'
            ]
        ];
    }
    public static function find(int $id):array
    {
            $card = Arr::first(static::all(), fn($card) => $card['id'] == $id);
            if(!$card){
                abort(404);
            }
                
            return $card;
            

    }
}