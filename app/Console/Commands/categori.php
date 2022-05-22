<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;

class categori extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:category {productId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'возвращать символьный код категории у товара с идентификатором равным {productId}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $category = new Category();
        $product = new Product();

        $productId = (int)$this->argument('productId');
        $p = $product->getProByProId($productId);
        $categoryId;
        foreach ($p as $pro)
        {
            $categoryId = $pro->category_id;
        }

        $ca = $category->getCaByCaId($categoryId);
        $code;
        foreach ($ca as $cate)
        {
            $code = $cate->code;
        }
        $this->info('Character code = '.$code);
    }
}
