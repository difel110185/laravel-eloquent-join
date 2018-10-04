<?php

namespace Difel\Laravel\EloquentJoin\Exceptions;

class InvalidRelation extends \Exception
{
    public $message = 'Package allows only following relations : BelongsToJoin and HasOneJoin.';
}
