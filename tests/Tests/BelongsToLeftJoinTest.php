<?php

namespace Difel\Laravel\EloquentJoin\Tests\Tests;

use Difel\Laravel\EloquentJoin\Tests\Models\City;
use Difel\Laravel\EloquentJoin\Tests\Models\Seller;
use Difel\Laravel\EloquentJoin\Tests\TestCase;

class BelongsToLeftJoinTest extends TestCase
{
    public function testLeftJoinEmpty()
    {
        Seller::where('id', '>', 0)->forceDelete();
        City::where('id', '>', 0)->forceDelete();

        $items = Seller::orderByJoin('city.name')->get();
        $this->assertEquals(0, $items->count());

        $seller = Seller::create(['title' => 'test']);

        $items = Seller::orderByJoin('city.name')->get();
        $this->assertEquals(1, $items->count());
        $this->assertEquals(1, Seller::count());
    }
}
