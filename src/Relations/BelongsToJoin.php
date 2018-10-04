<?php

namespace Difel\Laravel\EloquentJoin\Relations;

use Difel\Laravel\EloquentJoin\Traits\JoinRelationTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BelongsToJoin extends BelongsTo
{
    use JoinRelationTrait;
}
