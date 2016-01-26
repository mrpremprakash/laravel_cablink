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

    public function store() {

        $modelObj = new Category();
        $modelObj->parent_id = Request::input('parent_id');
        $modelObj->name = Request::input('name');
        $modelObj->status = 'active';
        $modelObj->level = $this->getLevel(Request::input('parent_id'));

        $modelObj->save();
        return $this->lists($modelObj->product_id);

    }

    public function getLevel($parent_id) {
        if(empty($parent_id)) {
            return 0;
        }
        $category_detail = Category::select('level')
            ->where('category_id', $parent_id)
            ->first()
        ;
        return $category_detail->level + 1;
    }

    public function lists($category_id = 0) {
        $limit = Request::input('limit', 20);
        $term = Request::input('term');
        $query = Category::select('category_id', 'name', 'parent_id', 'status', 'level');
        if(!empty($term)) {
            $query->where('name', 'like', DB::raw("'%".$term."%'"));
        }
        if(!empty($category_id)) {
            $query->where('category_id', '=', $category_id);
        }
        $items = $query->paginate();
        return response()->json($items);
    }
}