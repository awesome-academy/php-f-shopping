<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserInterface;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepositories implements UserInterafce
{
    public function getModel()
    {
        return User::class;
    }
}