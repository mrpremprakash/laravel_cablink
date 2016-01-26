<?php
/**
 * Created by PhpStorm.
 * User: prem
 * Date: 1/24/2016
 * Time: 2:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request;
use App\Http\Models\Product;
use DB;

class ProductController extends BaseController
{
    public function index() {
        return view('admin/product/list');
    }

    public function add() {
        return view('admin/product/add');
    }

    public function store() {

        $modelObj = new Product();
        $modelObj->category_id = Request::input('category_id');
        $modelObj->name = Request::input('name');
        $modelObj->status = Request::input('status');
        $modelObj->price = Request::input('price');
        $modelObj->description = Request::input('description');
        $modelObj->img = 'products/product-1.jpg';
        $modelObj->save();
        return $this->lists($modelObj->product_id);

    }

    public function dashboard() {
        return view('admin/dashboard');
    }

    public function lists($product_id = 0) {
        $limit = Request::input('limit', 20);
        $term = Request::input('term');
        $query = Product::select('product_id', 'name', 'status', 'img', 'price', 'description');
        if(!empty($term)) {
            $query->where('name', 'like', DB::raw("'%".$term."%'"));
        }
        if(!empty($product_id)) {
            $query->where('product_id', '=', $product_id);
        }
        $products = $query->paginate();
        return response()->json($products);
    }
}