<?php

namespace App\Policies;

use App\Models\Card;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class CardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
   
    public function view(User $user, Card $card){
        return $card->is_active || $card->user->is($user);
    }
    public function edit(User $user, Card $card){
        return $card->user->is($user);  
    }
    public function delete(User $user, Card $card){
        return $card->user->is($user) || $user->is_admin;  
    }
  
}
