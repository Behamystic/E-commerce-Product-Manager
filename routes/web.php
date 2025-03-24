<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $users=DB::table('products')->get();
    
    $olderUsers=DB::table('products')->where('price','>',30000)->get();
    $latestUser=DB::table('products')->orderBy('created_at','desc')->limit(5)->get();
    DB::table('products')->insert([
        'name' => 'Apple',
        'price' => '1200',
        
    ]);
    DB::table('products')->where('id', 1)->update([
        'name' => 'Samsung',
        'price' => '1000',
    ]);
    DB::table('products')->where('id', 10)->delete();
return redirect('/products');
});
Route::resource('products', ProductController::class);
