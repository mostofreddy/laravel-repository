<?php

declare(strict_types=1);

namespace Mostofreddy\Lrepo;

use Mostofreddy\Lrepo\Concerns\{
    EloquentRepository as EloquentRepositoryConcern,
    EloquentCrudRepository as EloquentCrudRepositoryConcern
};
use Mostofreddy\Lrepo\Contracts\{
    Repository as RepositoryInterface,
    CrudRepository as CrudRepositoryInterface
};

abstract class EloquentRepository implements RepositoryInterface, CrudRepositoryInterface
{
    use EloquentRepositoryConcern;
    use EloquentCrudRepositoryConcern;
}
