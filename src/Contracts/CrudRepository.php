<?php

declare(strict_types=1);

namespace Resty\Lrepo\Contracts;

use Illuminate\Database\Eloquent\Model;

interface CrudRepository
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param integer|Model $id
     * @param array $attributes
     * @return Model
     */
    public function update(int|Model $id, array $attributes): Model;

    /**
     * @param integer|Model $id
     * @return boolean
     */
    public function delete(int|Model $id): bool;
}
