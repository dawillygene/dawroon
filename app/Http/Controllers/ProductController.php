<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        // Get paginated products
        $products = $this->productService->getPaginatedProducts();

        // Format products for the table
        $formattedProducts = $products->map(function ($product) {
            return $this->productService->formatProductForTable($product);
        });

        return view('admin.product.list', [
            'products' => $formattedProducts,
            'pagination' => $products,
        ]);
    }
}