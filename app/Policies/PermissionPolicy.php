<?php
namespace App\Policies;

use App\Permission;
use Eminiarts\NovaPermissions\Policies\Policy;

class ContactPolicy extends Policy
{
    /**
     * The Permission key the Policy corresponds to.
     *
     * @var string
     */
    public static $key = 'permissions';
}
