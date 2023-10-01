<?php

namespace src\backoffice\Stock\Domain\Interfaces;

use src\backoffice\Stock\Domain\Stock;

interface StockRepositoryInterface
{
    public function searchAll(): ?array;

    public function search(string $id): ?array;

    public function save(Stock $stock): void;

    public function update(Stock $stock): void;
    
    public function delete(string $id): void;

    public function getStockByProductId(string $productId): ?array;

    public function sumStockQuantityByProductId(string $productId): int;

    public function countStockByProductId(string $productId): ?int;

    public function groupByProductWithDetails();
}
