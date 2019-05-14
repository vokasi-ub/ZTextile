<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemModel;

class AdminController extends Controller
{
	public function index(){
		return view('Admin.dashAdmin');
	}
	
    public function itemIndex(){
    	$listitem = ItemModel::all();
    	return view('Admin.item-list', compact('listitem'));
    	dd($listitem);
    }

    public function itemCreate(){
    	return view('Admin.item-create');
    }

    public function itemStore(request $request){
        ItemModel::insert([
            'id_item' => $request->inputIDItem,
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'warna' => $request->inputWarna,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan,
            'keterangan' => $request->inputKeterangan
            ]);
        return redirect('item-list');
    }

    public function edit($id_item){
        $data = ItemModel::where('id_item',$id_item)->get();
        return view('Admin.item-edit', ['data'=>$data]);
        
    }

    public function update(Request $request, $id_item)
    {
        ItemModel::where('id_item',$id_item)->update([
            'id_category' => $request->inputIDCategory,
            'nama_item' => $request->inputNamaItem,
            'warna' => $request->inputWarna,
            'stok' => $request->inputStok,
            'harga' => $request->inputHarga,
            'satuan' => $request->inputSatuan,
            'keterangan' => $request->inputKeterangan
            ]); 
    return redirect('item-list');        
    }

    public function destroy($id_item)
    {
        ItemModel::where('id_item',$id_item)->delete();
        return redirect('item-list');
    }

    public function itemCari(Request $request){
        $cari = $request->get('q');
        $result = ItemModel::where('nama_item', 'LIKE', '%'.$cari.'%')->paginate(3);
        return view('Admin.item-search', compact('cari', 'result'));
    }

    
}
