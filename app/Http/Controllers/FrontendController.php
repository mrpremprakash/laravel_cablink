<?php
/**
 * Created by PhpStorm.
 * User: prem
 * Date: 1/24/2016
 * Time: 3:31 PM
 */

namespace App\Http\Controllers;

use Request;
use Illuminate\Routing\Controller as BaseController;

class FrontendController extends BaseController
{
    public function index() {
        return view('frontend/index_content');
    }
    public function index2() {
        
        return view('frontend/index_content');
    }
}