<?php

declare(strict_types=1);

namespace Mostofreddy\Lrepo\Test\Cases;

use Mostofreddy\Lrepo\Test\Models\Products;
use Mostofreddy\Lrepo\Test\TestCase;
use Mostofreddy\Lrepo\Test\Repositories\ProductsRepository;

final class RepositoryTest extends TestCase
{
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

    /**
     * @return void
     */
    public function testAll(): void
    {
        Products::factory()->count(3)->create();

        $repo = new ProductsRepository();
        $all = $repo->all();

        $this->assertCount(3, $all);
    }

    /**
     * @return void
     */
    public function testFind(): void
    {
        $product = Products::factory()->create();

        $repo = new ProductsRepository();
        $newProduct = $repo->find($product->id);

        $this->assertEquals(
            $product->toArray(),
            $newProduct->toArray()
        );
    }


}
