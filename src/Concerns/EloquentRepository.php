<?php

declare(strict_types=1);

namespace Resty\Lrepo\Concerns;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait EloquentRepository
{
    /**
     * @return string
     */
    protected function modelClass(): string
    {
        return $this->modelClass;
    }

    /**
     * @param integer $id
     * @return Model
     */
    public function find(int $id): Model
    {
        return $this->modelClass()::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->modelClass()::all();
    }
}
