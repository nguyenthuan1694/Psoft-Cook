<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoCustomerStoreRequest;
use App\Models\Info_customer;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of products.
     *
     * @return View
     */
    public function index()
    {
        return view('backend.profile.index');
    }

    /**
     * Show the form for creating a new product.
     *
     * @return View
     */
    public function create()
    {
        // $categories = Category::all();
        // $allStatus = config('common.product.status');
        return view('backend.profile.register')
            // ->with('categories', $categories)
            // ->with('allStatus', $allStatus)
        ;
    }
}


