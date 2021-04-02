<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Store;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userIndex()
    {
        $items = Item::where('user_id', Auth::id())->with('user')->get();

        return view('users.home', ['items'=> $items]);
    }

    public function storeOwnerIndex()
    {        
        $stores = Store::where('store_owner_id', Auth::id())->with('storeOwner')->get();
        
        return view('store_owners.home', ['stores'=> $stores]);
    }
}
