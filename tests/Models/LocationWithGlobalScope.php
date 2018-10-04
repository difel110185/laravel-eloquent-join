<?php

namespace Difel\Laravel\EloquentJoin\Tests\Models;

use Difel\Laravel\EloquentJoin\Tests\Scope\TestExceptionScope;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocationWithGlobalScope extends BaseModel
{
    use SoftDeletes;

    protected $table = 'locations';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TestExceptionScope());
    }
}
