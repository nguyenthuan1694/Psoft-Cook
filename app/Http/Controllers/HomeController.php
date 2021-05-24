<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Models\Info_customer;
use App\Http\Requests\InfoCustomerStoreRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::with(['products'])->root()->get();
        $news = News::where('id','<>', 0)->orderBy('created_at','DESC')->get();
        return view('frontend.home')
                ->with('categories', $categories)
                ->with('news', $news);
    }

    /**
     * Show the category page
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCategory(Request $request, $slug)
    {
        $category = Category::with('parent')->where('slug', '=', $slug)->first();
        $products = $category->products()->paginate(config('common.pagination.frontend'));
        $news = News::paginate(config('common.pagination.backend'));
        return view('frontend.category')
            ->with('category', $category)
            ->with('products', $products)
            ->with('news', $news);
    }

    /**
     * Show the product page
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProduct(Request $request, $slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $products = Product::where('slug', '<>', $slug)->orderBy('created_at','DESC')->get();
        return view('frontend.product')
                ->with('product', $product)
                ->with('products', $products);
    }

    /**
     * Search products
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $keyword = $request->get('query');
        $products = Product::search($keyword)->paginate(config('common.pagination.frontend'));
        $news = News::paginate(config('common.pagination.backend'));

        return view('frontend.search')
                ->with('products', $products)
                ->with('news', $news)
                ->with('keyword', $keyword);
    }


    public function showNewsIndex()
    {
        $news = News::paginate(config('common.pagination.backend'));
        $products = Product::paginate(config('common.pagination.backend'));
        return view('frontend.news_of_event.index')
                ->with('products', $products)
                ->with('news', $news);
    }

     /**
     * Search news
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNews(Request $request, $slug) 
    {
        $news = News::where('slug', '=', $slug)->first();
        $newsData = News::where('slug', '<>', $slug)->orderBy('created_at','DESC')->get();
        $products = Product::paginate(config('common.pagination.backend'));
        return view('frontend.news_of_event.news')
                ->with('news', $news)
                ->with('newsData', $newsData)
                ->with('products', $products);
    }

    public function showIntroduce()
    {
        return view('frontend.introduce');
    }

    /**
     * Store a new info customer.
     *
     * @param InfoCustomerStoreRequest $request
     * @return RedirectResponse
     */
    public function store(InfoCustomerStoreRequest $request)
    {
        Info_customer::create($request->all());
        return redirect()->route('home')->with('success', 'Xin cám ơn form đã gửi thành công');
    }
}
