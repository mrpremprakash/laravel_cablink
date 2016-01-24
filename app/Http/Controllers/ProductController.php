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
}