<?php
/**
 * Created by PhpStorm.
 * User: prem
 * Date: 1/24/2016
 * Time: 3:23 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Http\Models\Category;
use DB;
use Request;

class CategoryController extends BaseController
{
    public function index() {
        return view('admin/category/list');
    }



    public function add() {
        return view('admin/category/add');
    }
    public function lists() {
        $limit = Request::input('limit', 20);
        $term = Request::input('term');
        $query = Category::select('category_id', 'name', 'parent_id', 'status', 'level');
        if(!empty($term)) {
            $query->where('name', 'like', DB::raw("'%".$term."%'"));
        }
        $items = $query->paginate();
        return response()->json($items);
    }
}