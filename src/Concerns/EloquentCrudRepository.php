<?php

declare(strict_types=1);

namespace Mostofreddy\Lrepo\Concerns;

use Illuminate\Database\Eloquent\Model;
use Mostofreddy\Lrepo\Concerns\EloquentRepository;

trait EloquentCrudRepository
{
    use EloquentRepository;

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->modelClass()::create($attributes);
    }

    /**
     * @param integer|Model $id
     * @param array $attributes
     * @return Model
     */
    public function update(int|Model $id, array $attributes): Model
    {
        $model = ($id instanceof Model) ? $id : $this->find($id);
        $model->update($attributes);
        return $model;
    }

    /**
     * @param integer|Model $id
     * @return boolean
     */
    public function delete(int|Model $id): bool
    {
        $model = ($id instanceof Model) ? $id : $this->find($id);
        return $model->delete();
    }
}
