<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/shop', function () {
    return view('shop');
});

Route::get('/sofa1', function () {
    return view('sofa1');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/main', function () {
    return view('about_main');
});

Route::get('/about/sub', function () {
  return var_dump($_GET);
});

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/forLogout', function () {

  Auth::logout();
  return redirect('/shop');
});



Route::get('/shop', function (Request $request) {
  $size = $request->get("size");
  $start = new \App\Service\SizeService();
  list($sofa,$sofaList) = $start->Size($size);
  return view('shop',[
  "sofa" => $sofa,
  "sofaList" => $sofaList
    ]);
});

Route::get('/detail', function(Request $request){
    $id = $request->get("id");
    $sofa = DB::table('sofa')->where('id', $id)->first();
    return view('detail', [
        "sofa" => $sofa
    ]);
});

// カートに入れる
Route::post('/cart', function(Request $request){
    $id = $request->get("id"); //idを取得
    $cart = new \App\Service\CartService();
    $cart->addItem($id);
    return redirect("/cart"); //カートのページへリダイレクト
});


// カートの中を一覧表示
Route::get('/cart', function(){
    $cart = new \App\Service\CartService();
    return view("cart", [ //データを渡してビューを表示
        "items" => $cart->getItems()
    ]);
});
// 商品を削除
Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除した商品のindexを取得
    $cart = new \App\Service\CartService();
    $cart->removeItem($index);
    return redirect("/cart");
});
// カートを空にする
Route::get('/delete/all', function(){
    $cart = new \App\Service\CartService();
    $cart->clear();
    return redirect("/cart"); //カートのページへリダイレクト
});

Route::get('/proce', function () {
      $cart = new \App\Service\CartService();
      return view("proce", [ //データを渡してビューを表示
          "items" => $cart->getItems()
      ]);
    })->middleware("auth");
Route::auth();

//会計完了
Route::get('/complite', function(){
  //dd(session()->all());
  session()->forget('items');
  return view("/complite");
})->middleware("auth");




/*
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
*/
