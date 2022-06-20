<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Models\Order;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function getAll(){
        return Order::all();
    }

    public function create(Request $request){
        //$request->session()->put("infOrder","Sipariş Kaydediliyor..");

        $request -> validate([
            "inpToothNo" => "required",
            "quantity" => "required | min:0",
            "price" => "required | min:0",
            "date" => "required",
            "work" => "required",
            "sub_work" => "required",
            "id" => "required | exists:users",
            "color" => "required",
            "currency" => "required"
        ]);
        if(isset($request->errors)){
            $request->session()->put("isAdded","0");
        }

        if($request->currency == 1){
            $crry = "EUR";
        }
        else if($request->currency == 0) {
            $crry = "TL";
        }
        else{
            $crry = "USD";
        }

        $order = new order;
        $order -> tooth_no = $request->inpToothNo;
        $order -> quantity = $request->quantity;
        $order -> type = $request->sub_work;
        $order -> color = $request->color;
        $order -> loc_sum = $request->price;
        $order -> user_id = $request->id;
        $order -> date = $request->date;
        $order -> currency = $crry;
        $order -> description = $request->descripion;
        $order -> save();
        $request->session()->put("isAdded","1");
        return redirect(URL::previous());
    }

    public function update(Request $request){

        $request -> validate([
            "inpToothNo" => "required",
            "quantity" => "required | min:0",
            "price" => "required | min:0",
            "date" => "required",
            "work" => "required",
            "sub_work" => "required",
            "id" => "required | exists:users",
            "color" => "required",
            "currency" => "required"
        ]);
        if(isset($request->errors)){
            $request->session()->put("isUpdated","0");
        }

        if($request->currency == 1){
            $crry = "EUR";
        }
        else if($request->currency == 0) {
            $crry = "TL";
        }
        else{
            $crry = "USD";
        }
        try{
            Order::query()->where('id','=',$request->orderId)->update([
                'tooth_no' => $request->inpToothNo,
                'quantity' => $request->quantity,
                'type' => $request->sub_work,
                'color' => $request->color,
                'loc_sum' => $request->price,
                'user_id' => $request->id,
                'date' => $request->date,
                'currency' => $crry,
                'description' => $request->descripion
            ]);
            $request->session()->put("isUpdated","1");
        }
        catch(\Exception $e){
            $request->session()->put("isUpdated","0");
        }


        return redirect(URL::previous());
    }

    public function downloadExcel(Request $request){
        $orders = collect($request->session()->get('orders'));
        $orders = $orders->select('username')->get();
        $username = $request->session()->get('username');
        $start = $request->session()->get('start');
        $end = $request->session()->get('end');
        return Excel::download(new OrdersExport($orders),"{$username}.xlsx");
    }
}
