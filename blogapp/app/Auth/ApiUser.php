<?php
namespace App\Auth;

use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class ApiUser extends GenericUser implements UserContract
{
    public function getAuthIdentifier()
    {
        return $this->attributes['username'];
    }
}