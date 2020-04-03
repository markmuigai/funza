<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SchoolUser extends Pivot
{
    use HasRoles;
    
    //  Define a guard name
    protected $guard_name = 'web';
}
