<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemModel;
use App\OrderModel;

class UserController extends Controller
{
    public function index(){
    	$listitem = ItemModel::all();
    	return view('User.order', compact('listitem'));
    	dd($listitem);
    }

    public function order(){
    	return view('User.order-form');
    }

    public function orderStore(Request $request){
    	OrderModel::insert([
            'id_user' => $request->inputIDUser,
            'nama' => $request->inputNamaUser,
            'no_hp' => $request->inputNoHP,
            'alamat' => $request->inputAlamat
            ]);
        return redirect('order-done');
    }

    public function orderDone(){
        return view('User.order-done');
    }
}
