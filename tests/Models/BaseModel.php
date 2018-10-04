<?php

namespace Difel\Laravel\EloquentJoin\Tests\Models;

use Difel\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use EloquentJoin;
}
