<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderModel;

class BuyerController extends Controller
{
    public function buyerIndex(){
    	$listbuyer = OrderModel::all();
    	return view('Buyer.buyer-list', compact('listbuyer'));
    	dd($listbuyer);
    }

    public function buyerCari(){
    	$cari = $request->get('q');
        $result = OrderModel::where('nama', 'LIKE', '%'.$cari.'%')->paginate(3);
        return view('Buyer.buyer-list', compact('cari', 'result'));
    }
}
