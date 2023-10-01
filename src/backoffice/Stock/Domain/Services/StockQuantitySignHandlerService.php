<?php

namespace src\backoffice\Stock\Domain\Services;

use src\backoffice\Stock\Domain\ValueObjects\StockQuantity;
use src\backoffice\Stock\Domain\Interfaces\StockQuantitySignHandlerServiceInterface;

class StockQuantitySignHandlerService implements StockQuantitySignHandlerServiceInterface
{
    public function setStockQuantitySign(bool $stockMovementType, StockQuantity $quantity): StockQuantity
    {
        $stockQuantity = $stockMovementType ? $quantity : new StockQuantity($quantity->value() * -1);

        return $stockQuantity;
    }
}
