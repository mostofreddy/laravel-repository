<?php

namespace Resty\Lrepo\Test\Repositories;

use Resty\Lrepo\Test\Models\Products;
use Resty\Lrepo\EloquentRepository;

class ProductsRepository extends EloquentRepository
{
    protected string $modelClass = Products::class;
}
