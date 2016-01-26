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

    public function dashboard() {
        return view('admin/dashboard');
    }

    public function lists() {
        $limit = Request::input('limit', 20);
        $term = Request::input('term');
        $query = Product::select('product_id', 'name', 'status', 'img', 'price', 'description');
        if(!empty($term)) {
            $query->where('name', 'like', DB::raw("'%".$term."%'"));
        }
        $products = $query->paginate();
        return response()->json($products);
    }
}