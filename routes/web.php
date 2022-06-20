<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use App\Models\Sub_Work;
use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use function PHPUnit\Framework\isNull;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post("userAuth",[AuthController::class,"userLogin"]);

Route::post("order_add",[OrderController::class,"create"])
    ->middleware("App\Http\Middleware\IsLoggedIn")
    ->middleware("App\Http\Middleware\IsAdmin");

Route::post("order_update",[OrderController::class,"update"])
    ->middleware("App\Http\Middleware\IsLoggedIn")
    ->middleware("App\Http\Middleware\IsAdmin");

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get("/logout", function (){
    Auth::guard('web')->logout();
    session()->flush();
    session()->regenerate();
    return redirect()->guest(route('login'));
});

Route::get('/doctor', function () {
    Session::put("compName","Dent");
    $id = Session::get("UserId");
    $orders = Order::Where('user_id','=',$id)->get();
    Session::put("sumTL",$orders->Where('currency','=',"TL")->sum('loc_sum'));
    Session::put("sumUSD",$orders->Where('currency','=',"USD")->sum('loc_sum'));
    Session::put("sumEUR",$orders->Where('currency','=',"EUR")->sum('loc_sum'));
        foreach ($orders as $order) {
            $order->username = User::Where('id', $order->user_id)->first()->username;
            $order->work = Sub_Work::Where('sub_work_id', $order->type)->first()->sub_work_name;
        }
    return view('doctor',['orders' => $orders]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsDoctor");

Route::get('/admin', function () {
    Session::put("compName","Dent");

    $datestr = date('m/d/Y h:i:s a', time());;
    date_default_timezone_set (date_default_timezone_get());
    $dt = strtotime ($datestr);

    $start = date ('Y-m-d', strtotime ('first day of this month', $dt));
    $end = date ('Y-m-d', time());
    if(Session::get('orders') == null || Session::get('isUpdated') == 1 || Session::get('isPaid') == 1 || Session::get('isDeleted') == 1){
        $orders = Order::Query()->whereBetween('date',[$start,$end])->Where('isPaid','=',0)->get();
    }
    else{
        $orders = Session::get('orders');
    }

    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    Session::put("sumTL",$orders->Where('currency','=',"TL")->sum('loc_sum'));
    Session::put("sumUSD",$orders->Where('currency','=',"USD")->sum('loc_sum'));
    Session::put("sumEUR",$orders->Where('currency','=',"EUR")->sum('loc_sum'));
    foreach ($orders as $order){
        $order->username = User::Where('id',$order->user_id)->first()->username;
        $order->work = Sub_Work::Where('sub_work_id',$order->type)->first()->sub_work_name;
    }
    Session::put('orders',$orders);
    return view('admin', ['works' => $works, 'sub_works' => $sub_works, 'users'=>$users]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::post('admin/filter', function (Request $request) {
    $start = $request->startDate;
    $end = $request->endDate;
    $paid = $request->getPaid;
    $unPaid = $request->getUnPaid;

    $_start = date ('Y-m-d', strtotime ($start));
    $_end = date ('Y-m-d', strtotime ($end));

    if(! isset($paid) && isset($unPaid)){
        $orders = Order::Query()->whereBetween('date',[$_start,$_end])->Where('isPaid','=',0)->get();
        $request->session()->forget("paidCheckStatus");
        $request->session()->put("unPaidCheckStatus","checked");
    }
    else if(! isset($unPaid) && isset($paid)){
        $orders = Order::Query()->whereBetween('date',[$_start,$_end])->Where('isPaid','=',1)->get();
        $request->session()->forget("unPaidCheckStatus");
        $request->session()->put("paidCheckStatus","checked");
    }
    else{
        $orders = Order::Query()->whereBetween('date',[$_start,$_end])->get();
        //Session::put("Log","WTFF");
        $request->session()->put("paidCheckStatus","checked");
        $request->session()->put("unPaidCheckStatus","checked");
    }

    foreach ($orders as $order){
        $order->username = User::Where('id',$order->user_id)->first()->username;
        $order->work = Sub_Work::Where('sub_work_id',$order->type)->first()->sub_work_name;
    }

    $request->session()->put('start', $_start);
    $request->session()->put('end', $_end);

    $request->session()->forget('orders', $orders);
    $request->session()->put('orders',$orders);
    return redirect()->back();
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get("/profile",function (){
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\RouteByAuthLvl");


Route::get('/admin/clinic-list', function (){
    $users = User::select('id','username','isAdmin','email','phone')->get();
    return view('clinic-list',["users"=>$users]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/clinic-add', function (){
    return view('clinic-add');
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/order-list', function (){

    $datestr = date('m/d/Y h:i:s a', time());;
    date_default_timezone_set (date_default_timezone_get());
    $dt = strtotime ($datestr);

    $start = date ('Y-m-d', strtotime ('first day of this month', $dt));
    $end = date ('Y-m-d', time());

    $orders = Order::Query()->whereBetween('date',[$start,$end])->get();

    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    Session::put("sumTL",$orders->Where('currency','=',"TL")->sum('loc_sum'));
    Session::put("sumUSD",$orders->Where('currency','=',"USD")->sum('loc_sum'));
    Session::put("sumEUR",$orders->Where('currency','=',"EUR")->sum('loc_sum'));
    foreach ($orders as $order){
        $order->username = User::Where('id',$order->user_id)->first()->username;
        $order->work = Sub_Work::Where('sub_work_id',$order->type)->first()->sub_work_name;
    }
    Session::put('orders',$orders);
    return view('order-list', ['works' => $works, 'sub_works' => $sub_works, 'users'=>$users]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/report', function (){
    $datestr = date('m/d/Y h:i:s a', time());;
    date_default_timezone_set (date_default_timezone_get());
    $dt = strtotime ($datestr);

    $start = date ('Y-m-d', strtotime ('first day of this month', $dt));
    $end = date ('Y-m-d', time());

    if(Session::get('orders') == null){
        $orders = Order::Query()->whereBetween('date',[$start,$end])->get();
    }
    else{
        $orders = Session::get('orders');
    }



    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    Session::put("sumTL",$orders->Where('currency','=',"TL")->sum('loc_sum'));
    Session::put("sumUSD",$orders->Where('currency','=',"USD")->sum('loc_sum'));
    Session::put("sumEUR",$orders->Where('currency','=',"EUR")->sum('loc_sum'));
    foreach ($orders as $order){
        $order->username = User::Where('id',$order->user_id)->first()->username;
        $order->work = Sub_Work::Where('sub_work_id',$order->type)->first()->sub_work_name;
    }
    Session::put('orders',$orders);
    return view('report', ['works' => $works, 'sub_works' => $sub_works, 'users'=>$users]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/order-add', function (){
    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    return view('order-add', ['works' => $works, 'sub_works' => $sub_works, 'users'=>$users] );
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/order-add', function (){
    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    return view('order-add', ['works' => $works, 'sub_works' => $sub_works, 'users'=>$users] );
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/purchase-list', function (){
    $orders = Order::Query()->Where('isPaid','=',1)->get();
    $works = Work::all();
    $sub_works = Sub_Work::all();
    $users = User::select('id','username','isAdmin')->get();
    Session::put("sumTL",$orders->Where('currency','=',"TL")->sum('loc_sum'));
    Session::put("sumUSD",$orders->Where('currency','=',"USD")->sum('loc_sum'));
    Session::put("sumEUR",$orders->Where('currency','=',"EUR")->sum('loc_sum'));
    foreach ($orders as $order){
        $order->username = User::Where('id',$order->user_id)->first()->username;
        $order->work = Sub_Work::Where('sub_work_id',$order->type)->first()->sub_work_name;
    }
    return view('purchase-list', ['orders' => $orders, 'works' => $works, 'sub_works' => $sub_works, 'users'=>$users]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('/admin/purchase-add', function (){
    return view('purchase-add');
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('getAllSub', function () {
    $subworks = Sub_Work::all();
    return response()->json($subworks);
});

Route::get('getSub/{id}', function ($id) {
    $subworks = Sub_Work::where('work_id',$id)->get();
    return response()->json($subworks);
});

Route::get('getPrice/{id}', function ($id) {
    $price = Sub_Work::where('sub_work_id',$id)->get('unit_price');
    $currency = Sub_Work::where('sub_work_id',$id)->get('currency');
    return response()->json([$price,$currency]);
});

Route::get('delOrder/{id}', function ($id) {
    Order::Where("id",$id)->delete();
    Session::put("isDeleted","1");
    return redirect(URL::previous());
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('payOrder/{id}', function ($id) {
    Order::Where("id",$id)->update(['isPaid' => 1]);
    Session::put("isPaid","1");
    return redirect(URL::previous());
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('getOrder/{id}', function ($id){
    $order = Order::Where("id",$id)->get();
    return response()->json($order);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('getWorkInfo/{id}', function ($id){
    $subwork_id = Order::query()->where('id','=',$id)->get('type');
    $subwork = Sub_Work::query()->where('sub_work_id',"=",$subwork_id[0]->type)->first();
    $work = Work::query()->where('work_id',"=",$subwork->work_id)->first();
    return response()->json([$subwork,$work]);
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::get('resetSwal', function (){
    Session::put('isAdded','');
    Session::put('isUpdated','');
    Session::put('isDeleted','');
    Session::put('isPaid','');
    Session::put('isError','');
})->middleware("App\Http\Middleware\IsLoggedIn")->middleware("App\Http\Middleware\IsAdmin");

Route::post("downloadExcel",[OrderController::class,"downloadExcel"])
    ->middleware("App\Http\Middleware\IsLoggedIn")
    ->middleware("App\Http\Middleware\IsAdmin");
