<?php

declare(strict_types=1);

namespace Resty\Lrepo\Test\Cases;

use Resty\Lrepo\Test\Models\Products;
use Resty\Lrepo\Test\TestCase;
use Resty\Lrepo\Test\Repositories\ProductsRepository;

final class RepositoryCrudTest extends TestCase
{
    /**
     * @return void
     */
    public function testCreateModelUsingRepository(): void
    {
        $repo = new ProductsRepository();
        $r = $repo->create([
            "name" => "Dummy",
            "description" => "",
            "price" => rand(1, 10)
        ]);

        $this->assertDatabaseHas('products', [
            'id' => $r->id,
        ]);
    }

    /**
     * @return void
     */
    public function testUpdateModelUsingRepositoryAndId(): void
    {
        $product = Products::factory()->create();

        $newPrice = rand(0, 10);
        $repo = new ProductsRepository();
        $model = $repo->update($product->id, ["price" => $newPrice]);

        $this->assertEquals($newPrice, $model->price);
    }

    /**
     * @return void
     */
    public function testUpdateModelUsingRepositoryAndModel(): void
    {
        $product = Products::factory()->create();

        $newPrice = rand(0, 10);
        $repo = new ProductsRepository();
        $repo->update($product, ["price" => $newPrice]);

        $this->assertEquals($newPrice, $product->price);
    }

    /**
     * @return void
     */
    public function testDeleteModelUsingRepositoryAndId(): void
    {
        $product = Products::factory()->create();

        $this->assertDatabaseCount("products", 1);

        $repo = new ProductsRepository();
        $repo->delete($product->id);

        $this->assertDatabaseCount("products", 0);
    }

    /**
     * @return void
     */
    public function testDeleteModelUsingRepositoryAndModel(): void
    {
        $product = Products::factory()->create();

        $this->assertDatabaseCount("products", 1);

        $repo = new ProductsRepository();
        $repo->delete($product);

        $this->assertDatabaseCount("products", 0);
    }
}
