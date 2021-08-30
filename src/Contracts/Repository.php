<?php

declare(strict_types=1);

namespace Resty\Lrepo\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface Repository
{
    /**
     * @param integer $id
     * @return Model
     */
    public function find(int $id): Model;

    /**
     * @return Collection
     */
    public function all(): Collection;
}
