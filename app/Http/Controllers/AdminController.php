<?php

namespace App\Http\Controllers;

// use App\Models\Customer;
use App\Models\News;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $date = Carbon::now()->firstOfMonth();

        // News statistic
        $news = News::all();
        $newsTotal = $news->count();
        $newsIncrease = $news->where('created_at', '>=', $date);
        $newsIncrease = $newsTotal > 0 ? round($newsIncrease->count() / $newsTotal, 2) * 100 : 0;

        // // Product statistic
        $products = Product::all();
        $productTotal = $products->count();
        $productIncrease = $products->where('created_at', '>=', $date);
        $productIncrease = $productTotal > 0 ? round($productIncrease->count() / $productTotal, 2) * 100 : 0;
        return view('backend.dashboard.index')
            ->with([
                'newsTotal' => $newsTotal,
                'newsIncrease' => $newsIncrease,
                'productTotal' => $productTotal,
                'productIncrease' => $productIncrease,
            ]);
    }
}
