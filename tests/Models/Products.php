<?php

declare(strict_types=1);

namespace Resty\Lrepo\Test\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Resty\Lrepo\Test\Database\Factories\ProductFactory;

class Products extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price',
    ];

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
