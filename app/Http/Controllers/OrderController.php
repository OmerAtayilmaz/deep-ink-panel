<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Image;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class OrderController extends Controller
{

    public function index() : View
    {
        return view("backoffice.order.index");
    }


    public function completed(){
        $orders = DB::select("SELECT * FROM orders as o where o.status='COMPLETED' order by  updated_at desc");

        return view("backoffice.order.completed",[
            'orders' => $orders
        ]);
    }

    public function status(Request $req, $id){
        $order = Order::find($id);
        $order->status = 'COMPLETED';
        $order->save();
        return redirect()->route("backoffice.order.index");
    }

    public function gallery(Request $req, $id): View
    {
        $order = Order::with('images')->find($id);
        return view("backoffice.order.gallery", ['id' => $id, 'order' => $order]);
    }

    public function image_store(Request $req, $id){

        $img = new Image();
        $img->order_id = $id;
        $img->text = $req->input('description');
        $path = "public/images/order_${id}";
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $img->image = $req->file('image')->store($path);
        $img->save();
        return redirect()->back();
    }
    public function image_destroy(Request $req, $id){
       $img = Image::find($id);
       $img->delete();
        return redirect()->back();
    }

    public function payments(Request $request, $id): View
    {
        $order = Order::with("prices")->find($id);
        $totalPayment = 0;

        foreach ($order->prices as $price):
            $totalPayment += $price->price;
        endforeach;
        //totalPayment= 5   totalPrice=20
        // 25*  100
        //sonuc: 25%
        $progressPercent = round((100 * $totalPayment) / $order->total_price , 3);

        return view("backoffice.order.payments", ['id' => $id, 'order' => $order, 'totalPayment' => $totalPayment, 'progressPercent' => $progressPercent]);
    }
    public function payments_store(Request $req, $id){
        $price = new Price();
        $price->order_id = $id;
        $price->price = $req->price;
        $price->description = $req->description;
        $price->save();
        return redirect()->back()->with("success", "Payment created gracefully!");
    }

    public function payments_destroy($id){
        $price = Price::find($id);
        $price->delete();
        return redirect()->back()->with("success", "Payment deleted gracefully!");

    }

    public function create(): View
    {
        return view("backoffice.order.create");
    }

    public function show(int $id): View
    {
        $order = Order::find($id);

        return view("backoffice.order.show",[
            'order'=>$order
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $order = Order::find($id);
        return view("backoffice.order.edit",[
            'order' => $order
        ]);
    }

    public function update(Request $req, $id){
        $order = Order::find($id);
        $order->name = $req->name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->total_price = $req->totalPrice;
        $order->notes = $req->details;
        $order->status = "ACTIVE";
        $order->save();
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     */
    public function store(OrderRequest $req)
    {
        $order = new Order();
        $order->name = $req->name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->total_price = $req->totalPrice;
        $order->notes = $req->details;
        $order->status = "ACTIVE";
        $order->save();

        return redirect(route("backoffice.order.index"))->with("success","Created Gracefully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $order = Order::find($id);
        $order->delete();

        return redirect()->back()->with("success","Deleted gracefully!");
    }


}
