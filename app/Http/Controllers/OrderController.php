<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
    //    $data = Order::leftJoin('users');
    //    var_dump($data);
       $data = DB::table('orders')
    ->select('orders.user_id','orders.product_id','orders.status')
    ->leftJoin('users','users.id','=','orders.user_id')
    ->leftJoin('products','products.id','=','orders.product_id')
    ->get();
    var_dump($data);

    }
}
