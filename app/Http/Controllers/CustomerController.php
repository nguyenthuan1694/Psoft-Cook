<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoCustomerStoreRequest;
use App\Models\Info_customer;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of products.
     *
     * @return View
     */
    public function index()
    {
        $customers = Info_customer::paginate(config('common.pagination.backend'));
        return view('backend.customer.index')->with('customers', $customers);
    }

    /**
     * Display the customer.
     *
     * @param Info_customer $customer
     */
    public function show(Info_customer $customer)
    {
        //
    }
    
    /**
     * Move the news to trash.
     *
     * @param News $customer
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Info_customer $customer)
    {
        $customers = Info_customer::where('id',$customer['id'])->first()->delete();

        return redirect()->back()->with('success', 'You have successfully move the customer to trashed');
    }

    /**
     * Display a listing of the trashed customer.
     *
     * @return View
     */
    public function trashed()
    {
        $customers = Info_customer::onlyTrashed()->paginate(config('common.pagination.backend'));
        return view('backend.customer.trashed')->with('customers', $customers);
       
    }

    /**
     * Restored a trashed customer.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function restore(Request $request, $id)
    {
        $customers = Info_customer::onlyTrashed()->where('id', $id)->first();
        $customers->restore();
        return redirect()->back()->with('success', 'You have successfully restored the request');
    }


    /**
     * Force delete a trashed customer.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function forceDelete($id)
    {
        $customers = Info_customer::onlyTrashed()->where('id', $id)->first();
        $customers->forceDelete();
        return redirect()->back()->with('success', 'You have successfully deleted the customers');
    }

}


