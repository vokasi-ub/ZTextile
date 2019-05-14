<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;

class AdminCatController extends Controller
{
	public function catIndex(){
		$listcat = CategoryModel::all();
    	return view('Admin.cat-list', compact('listcat'));
    	dd($listcat);
	}

	public function catCreate(){
		return view('Admin.cat-create');
	}

	public function catStore(request $request){
        CategoryModel::insert([
            'id_category' => $request->inputIDCategory,
            'category_kain' => $request->inputCategoryKain,
            ]);
        return redirect('cat-list');
    }

    public function edit($id_category){
        $data = CategoryModel::where('id_category',$id_category)->get();
        return view('Admin.cat-edit', ['data'=>$data]);
        
    }

    public function update(Request $request, $id_category)
    {
        CategoryModel::where('id_category',$id_category)->update([
            'category_kain' => $request->inputCategoryKain
            ]); 
    return redirect('cat-list');
    }

    public function destroy($id_category)
    {
        CategoryModel::where('id_category',$id_category)->delete();
        return redirect('cat-list');
    }

    public function catCari(Request $request){
        $cari = $request->get('q');
        $result = CategoryModel::where('category_kain', 'LIKE', '%'.$cari.'%')->paginate(3);
        return view('Admin.cat-search', compact('cari', 'result'));
    }
}
