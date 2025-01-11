<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\statistics\UserStatisticsService;
use App\Services\statistics\OrderStatisticsService;
use App\Services\statistics\ProductStatisticsService;

class DashboardController extends Controller {
    protected $orderStatisticsService;
    protected $productStatisticsService;
    protected $userStatisticsService;

    public function __construct(OrderStatisticsService $orderStatisticsService,ProductStatisticsService $productStatisticsService,UserStatisticsService $userStatisticsService) {
        $this->orderStatisticsService = $orderStatisticsService;
        $this->productStatisticsService = $productStatisticsService;
        $this->userStatisticsService = $userStatisticsService;

    }
    

    public function index() {
        $statistics = [
            'totalRevenue' => $this->orderStatisticsService->getTotalRevenue(),
            'averageOrderValue' => $this->orderStatisticsService->getAverageOrderValue(),
            'totalOrders' => $this->orderStatisticsService->getTotalOrders(),
            'completedOrders' => $this->orderStatisticsService->getOrdersByStatus('completed'),
            'revenueLast30Days' => $this->orderStatisticsService->getRevenueForPeriod(30),
            'ordersLast30Days' => $this->orderStatisticsService->getOrdersForPeriod(30),
            'topUsers' => $this->orderStatisticsService->getTopUsersBySpending(5),

            'totalProducts' => $this->productStatisticsService->getTotalProducts(),
            'averageProductPrice' => $this->productStatisticsService->getAverageProductPrice(),
            'lowStockProducts' => $this->productStatisticsService->getLowStockProducts(),
            'totalStockValue' => $this->productStatisticsService->getTotalStockValue(),
            'topProductsByStock' => $this->productStatisticsService->getTopProductsByStock(5),
            'topProductsByPrice' => $this->productStatisticsService->getTopProductsByPrice(5),

            'totalUsers' => $this->userStatisticsService->getTotalUsers(),
            'activeUsers' => $this->userStatisticsService->getActiveUsers(),
            'inactiveUsers' => $this->userStatisticsService->getInactiveUsers(),
            'recentUsers' => $this->userStatisticsService->getRecentUsers(),
            'averageUsersPerMonth' => $this->userStatisticsService->getAverageUsersPerMonth(),
            'topActiveUsers' => $this->userStatisticsService->getTopActiveUsers(5),
        ];
        return view('admin.dashboard', compact('statistics'));
    }
   

}

   
