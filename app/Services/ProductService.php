<?php

namespace App\Services;
use App\Models\Product;
use App\Models\OrderItem;
use App\Models\ProductReview;
use Illuminate\Support\Carbon;
use App\Models\ProducerPromotion;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
/**
 * Class ProductService.
 */
class ProductService
{
    




    public function getPaginatedProducts(int $perPage = 13): LengthAwarePaginator
    {
        // Fetch products with their related producer and category
        $products = Product::with(['producer', 'category'])
            ->paginate($perPage);

        return $products;
    }

    public function formatProductForTable(Product $product): array
    {
        return [
            'product_id' => $product->product_id,
            'name' => $product->name,
            'category' => $product->category->name ?? 'N/A',
            'price' =>number_format($product->price, 2) . ' Tsh',
            'stock_quantity' => $product->stock_quantity,
            'producer' => $product->producer->name ?? 'N/A', // Fallback if producer is not set
            'status' => $product->status ?? 'N/A', // Static status for now
            'image_url' => $product->image_url ?? 'default-product-image.png', // Fallback if image is not set
        ];
    }






    public function topSaleProduct()
    {
        $topProducts = OrderItem::select('order_items.product_id', 'order_items.quantity')
        ->with(['product' => function ($query) {
            $query->select('product_id', 'name', 'price', 'image_url');
        }])
        ->orderByDesc('order_items.quantity')
        ->limit(6)
        ->get();

    $topProducts->each(function ($product) {
        $product->discount = $this->ProductDiscount($product->product_id);
        $product->average_rating = $this->Rating($product->product_id);
    });
    
    $filteredProducts = [];
    
    foreach ($topProducts as $product) {
        $finalPrice = $product->product->price;
        if ($product->discount) {
            if ($product->discount['discount_type'] === 'fixed') {
                $finalPrice = $product->product->price - $product->discount['discount_value'];
            } elseif ($product->discount['discount_type'] === 'percentage') {
                $discountAmount = ($product->product->price * $product->discount['discount_value']) / 100;
                $finalPrice = $product->product->price - $discountAmount;
            }
        }
        else {

            $product->final_price = $product->product->price;
            $product->product->price = null;

        }
    

        $filteredProducts[] = [
            'product_id' => $product->product_id,
            'quatity_of_product_sold' =>$product->quantity,
            'discount_price' => $finalPrice,
            'name' => $product->product->name,
            'price' => $product->product->price,
            'image_url' => $product->product->image_url,
            'average_rating' => $product->average_rating,
        ];
    }
    
        return $filteredProducts;
    }

    public function ProductDiscount($productId){

    $promotion = ProducerPromotion::where('product_id', $productId)
    ->where('start_date', '<=', Carbon::now()) 
    ->where('end_date', '>=', Carbon::now()) 
    ->first();

    if ($promotion) {

    $discount = [
    'discount_type' => $promotion->discount_type,
    'discount_value' => $promotion->discount_value,
    ];
    return $discount;
    }

return null;
}






    public function Rating($productId)
    {
        // Fetch all reviews for the product
        $reviews = ProductReview::where('product_id', $productId)->get();

        // If there are no reviews, return null
        if ($reviews->isEmpty()) {
            return null;
        }

        // Calculate the average rating
        $totalRating = 0;
        foreach ($reviews as $review) {
            $totalRating += $review->rating;
        }

        $averageRating = $totalRating / $reviews->count();

        // Round the average rating to 2 decimal places
        return round($averageRating, 2);
    }

 }
