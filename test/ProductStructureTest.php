<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\ProductStructure;

class ProductStructureTest extends TestCase
{
    private ProductStructure $productStructure;

    protected function setUp(): void
    {
        $this->productStructure = new ProductStructure();
    }
    public function testMake()
    {
        $this->assertSame([
            'preto' =>  [
                'PP' => 1,
                'M' => 1,
                'G' => 1,
                'GG' => 2
            ],
            'branco' => [
                'PP'=> 1,
                'G' => 1
            ],
            'vermelho' => [
                'M' => 1
            ],
            'azul' => [
                'XG' => 3,
                'P' => 1
            ]
        ], $this->productStructure->make());

    }
}