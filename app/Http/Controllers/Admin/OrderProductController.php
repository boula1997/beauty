<?php

namespace App\Http\Controllers\Admin;

use App\Models\Orderproduct;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\OrderProductRequest;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Exception;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $orderproduct;
    function __construct(Orderproduct $orderproduct)
    {
        $this->middleware('permission:orderproduct-list|orderproduct-create|orderproduct-edit|orderproduct-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:orderproduct-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:orderproduct-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:orderproduct-delete', ['only' => ['destroy']]);
        $this->orderproduct = $orderproduct;
    }

    public function index()
    {
        try {
            $orderproducts = $this->orderproduct->latest()->get();
            return view('admin.crud.orderproducts.index', compact('orderproducts'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $order = Order::find($id);
        $products=Product::get();
        // dd($orderproduct);
        return view('admin.crud.orderproducts.create',compact('products','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderProductRequest $request)
    {
        try {
            
            $data = $request->except('image','profile_avatar_remove');
            // update Product Stock
            $product = Product::find($request->product_id);
            $stock =$product->stock - $request->count;
            $product->update([
                'stock' => $stock
            ]);
             // update Order and OrderProduct Stock
             $order = Order::find($request->order_id);
             $total =$order->total + ($request->count*$product->price);
             $order->update([
                 'total' => $total
             ]);
            $orderproduct = $this->orderproduct->create($data);
            $orderproduct->update([
                'total' => ($request->count*$product->price)
            ]);
            return redirect()->route('orders.index')
                ->with('success', trans('general.created_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $orderproduct = Orderproduct::find($id);
        $products=Product::get();
        $order=Order::get();
        return view('admin.crud.orderproducts.show',compact('products','order','orderproduct'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderproduct $orderproduct)
    {
        $products=Product::get();
        return view('admin.crud.orderproducts.edit', compact('orderproduct','products'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portfolio  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderproduct $orderproduct)
    {
       
        try {
            $data = $request->except('image','profile_avatar_remove');

            $orderproduct1 = Orderproduct::where('order_id',$request->order_id )
                                         ->where('product_id',$request->product_id)->first();

            $new_count= $orderproduct1->count - $request->count;
            $count =$orderproduct1->count - $new_count;
           

            $order_total =$orderproduct1->order->total - $orderproduct1->total;
            $total =$count*$orderproduct1->product->price;
            $order_total+= $total;
            
            $new_count_stock =$orderproduct1->count - $request->count;
            $new_stock= $orderproduct1->product->stock + $new_count_stock;

            $orderproduct1->update([
                'count' => $count,
                'total' => $total
            ]);
            $orderproduct1->order->update([
                'total' => $order_total
            ]);
            $orderproduct1->product->update([
                'stock' => $new_stock
            ]);
            $orderproduct->update($data);
            return redirect()->route('orders.index', compact('orderproduct'))
                ->with('success', trans('general.update_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderproduct  $orderproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderproduct $orderproduct)
    {
      
        try {
            // update Product Stock
            $product = Product::find($orderproduct->product_id);
            $stock =$product->stock+$orderproduct->count;
            $product->update([
                'stock' => $stock
            ]);
            // update order totlal
            $order = Order::find($orderproduct->order_id);
            $order_total =$order->total - $orderproduct->total;
            $order->update([
                'total' => $order_total
            ]);
            $orderproduct->delete();
            return redirect()->route('orders.index')
                ->with('success', trans('general.deleted_successfully'));
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['error' => __('general.something_wrong')]);
        }
    }
}
