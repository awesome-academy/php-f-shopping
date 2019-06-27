<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepositories implements ContactInterafce
{
    public function getModel()
    {
        return Contact::class;
    }
}
