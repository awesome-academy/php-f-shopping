<?php

namespace App\Repositories\Session;

use App\Models\Session;
use App\Repositories\Session\SessionInterface;
use App\Repositories\BaseRepository;

class SessionRepository extends BaseRepository implements SessionInterface
{
    public function getModel()
    {
        return Session::class;
    }
}
