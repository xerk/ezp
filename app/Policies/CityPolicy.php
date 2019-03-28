<?php

namespace App\Policies;

use App\City;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Eminiarts\NovaPermissions\Policies\Policy;

class CityPolicy extends Policy
{
    use HandlesAuthorization;

    /**
     * The Permission key the Policy corresponds to.
     *
     * @var string
     */
    public static $key = 'cities';
}
