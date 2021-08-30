<?php

declare(strict_types=1);

namespace Resty\Lrepo;

use Resty\Lrepo\Concerns\{
    EloquentRepository as EloquentRepositoryConcern,
    EloquentCrudRepository as EloquentCrudRepositoryConcern
};
use Resty\Lrepo\Contracts\{
    Repository as RepositoryInterface,
    CrudRepository as CrudRepositoryInterface
};

abstract class EloquentRepository implements RepositoryInterface, CrudRepositoryInterface
{
    use EloquentRepositoryConcern;
    use EloquentCrudRepositoryConcern;
}
