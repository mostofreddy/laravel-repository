<?php

namespace Mostofreddy\Lrepo\Test\Repositories;

use Mostofreddy\Lrepo\Test\Models\Products;
use Mostofreddy\Lrepo\EloquentRepository;

class ProductsRepository extends EloquentRepository
{
    protected string $modelClass = Products::class;
}
