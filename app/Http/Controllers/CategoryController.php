<?php
/**
 * Created by PhpStorm.
 * User: prem
 * Date: 1/24/2016
 * Time: 3:23 PM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class CategoryController extends BaseController
{
    public function index() {
        return view('admin/category/list');
    }

    public function add() {
            return view('admin/category/add');


    }
}