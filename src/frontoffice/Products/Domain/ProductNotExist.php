<?php

declare(strict_types = 1);

namespace src\frontoffice\Products\Domain;

use src\Shared\Domain\DomainError;

final class ProductNotExist extends DomainError
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;

        parent::__construct();
    }

    public function errorCode(): string
    {
        return 'product_not_exist';
    }

    protected function errorMessage(): string
    {
        return sprintf('El producto con el código %s no existe', $this->id);
    }
}
