<?php

namespace BeautyShop;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class MarketProduct extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'productName'
            ]
        ];
    }
}
