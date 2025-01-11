<?php

namespace App\Http\Controllers\Admin;


use App\Services\ProductService;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function topSellingProducts()
    {
       
        $topSellingProducts = $this->productService->topSaleProduct();


        
        // dd($topSellingProducts);
        return view('dashboard', ['topSellingProducts' => $topSellingProducts]);
        //  return response()->json($topSellingProducts);
    }
}
