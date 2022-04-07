<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\Product;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;


class MyController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
             
        return back();
    }



    public function View()
    {
        $product = Product::all();
       return view('productlist',compact('product'));
    }

    public function importproduct() 
    {
        
        // $data = Excel::import(new ProductImport,request()->file('file'));
        $data = Excel::toArray(new ProductImport,request()->file('file')); 

        return collect(head($data))->each(function ($row, $key) {
            DB::table('product')
                ->where('id', $row['id'])
                ->update(array_except($row, ['id']));
        });
       return back();      
    }
}
