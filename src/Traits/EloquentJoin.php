<?php

namespace Difel\Laravel\EloquentJoin\Traits;

use Difel\Laravel\EloquentJoin\EloquentJoinBuilder;

trait EloquentJoin
{
    use ExtendRelationsTrait;

    public function newEloquentBuilder($query)
    {
        return new EloquentJoinBuilder($query);
    }
}
