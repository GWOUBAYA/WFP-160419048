<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class CheckMember
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
public function checkmember(User $user){
    return($user->sebagai == 'member' ? Response::allow() : Response::deny('Anda harus daftar sebagai member dulu.'));
}
}
