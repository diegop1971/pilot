<?php

declare(strict_types=1);

namespace src\backoffice\Stock\Infrastructure\Persistence\Eloquent;

use src\backoffice\Stock\Domain\Stock;
use Illuminate\Support\Facades\DB;
use src\backoffice\Stock\Domain\StockNotExist;
use src\backoffice\Stock\Domain\Interfaces\StockRepositoryInterface;
use src\backoffice\Stock\Infrastructure\Persistence\Eloquent\EloquentStockModel;

class EloquentStockRepository implements StockRepositoryInterface
{
    
    public function __construct() {
    }

    public function searchAll(): ?array
    {                
        $stocks = EloquentStockModel::with('product', 'stockMovementType')->get();

        if ($stocks->isEmpty()) {

            return  $stocks = [];
        }

        return $stocks->toArray();
    }

    public function search($id): ?array
    {
        $model = EloquentStockModel::with(['product', 'stockMovementType'])->find($id);

        if (null === $model) {
            return null;
        }

        $model->quantity = abs($model->quantity);
    
        return $model->toArray();
    }

    public function save(Stock $stock): void
    {  
        $model = new EloquentStockModel();

        $model->id = $stock->stockId()->value();
        $model->product_id = $stock->stockProductId()->value();
        $model->movement_type_id = $stock->stockMovementTypeId()->value();
        $model->quantity = $stock->stockQuantity()->value();
        $model->date = $stock->stockDate()->value();
        $model->notes = $stock->stockNotes()->value();
        $model->enabled = $stock->stockEnabled()->value();
        
        $model->save();
    }
    
    public function update(Stock $stock): void
    {
        $model = EloquentStockModel::find($stock->stockId()->value());

        $model->id = $stock->stockId()->value();
        $model->product_id = $stock->stockProductId()->value();
        $model->movement_type_id = $stock->stockMovementTypeId()->value();
        $model->quantity = $stock->stockQuantity()->value();
        $model->date = $stock->stockDate()->value();
        $model->notes = $stock->stockNotes()->value();
        $model->enabled = $stock->stockEnabled()->value();

        $model->update();
    }
    
    public function delete($id): void
    {
        $model = EloquentStockModel::find($id);
        
        if (null === $model) {
            throw new StockNotExist($id);
        }

        $model->delete();
    }

    public function getStockByProductId(string $productId): ?array
    {
        $models = EloquentStockModel::where('product_id', $productId)->get();

        if (null === $models) {
            throw new StockNotExist($productId);
        }
        
        return $models->toArray();
    }

    public function sumStockQuantityByProductId(string $productId): int
    {
        $sum = EloquentStockModel::where('product_id', $productId)->sum('quantity');

        if (null === $sum) {
            throw new StockNotExist($productId);
        }

        return intval($sum);
    }

    public function countStockByProductId(string $productId): ?int
    {
        $count = EloquentStockModel::where('product_id', $productId)->count();

        if (null === $count) {
            throw new StockNotExist($productId);
        }
        
        return $count;
    }

    public function groupByProductWithDetails()
    {
        $stocks = DB::table('stock_movements')
            ->select(
                'products.name as product_name',
                'categories.name as category_name',
                DB::raw('SUM(stock_movements.quantity) as total_quantity')
            )
            ->join('products', 'stock_movements.product_id', '=', 'products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->groupBy('stock_movements.product_id', 'products.name', 'categories.name')
            ->get();
    }
}
