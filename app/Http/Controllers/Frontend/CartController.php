<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cupon;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CartController extends Controller
{
    public function cartStore(Request $request){
        $product_id=$request->input('product_id');
        $product_quantity=$request->input('product_quantity');
        $product= Product::getProductByCart($product_id);
        
        $price= $product[0]['offer_price'];
        $cart_array=[];
        foreach(Cart::instance('shopping')->content() as $item){
            $cart_array[]=$item->id;
        }
        $result= Cart::instance('shopping')->add($product_id,
        $product[0]['title'],$product_quantity,$price)->associate(
            '\App\Models\Product'
        );
        if($result){
            $response['status']=true;
            $response['product_id']=$product_id;
            $response['total']=Cart::subtotal();
            $response['cart_count']=Cart::instance('shopping')->count();
        }
        if($request->ajax()){
            $header =view('front.partials.header')->render();
            $response['header']=$header;
        }

        return $response;
    }

    public function deleteCart(Request $request){
        $id= $request->input('cart_id');
        $result= Cart::instance('shopping')->remove($id);
        if($request->ajax()){
            $header =view('front.partials.header')->render();
           
            $response['header']=$header;
            
        }
        $response['status']=true;
        $response['total']=Cart::subtotal();
        $response['cart_count']=Cart::instance('shopping')->count();

        return $response;
    }
    public function updateCart(Request $request){
       $this->validate($request,[
            'product_qty'=>'required|numeric'
       ]);
       $rowId=$request->input('rowId');
       $request_quantity=$request->input('product_qty');
       $productQuantity=$request->input('productQuantity');
       if($request_quantity>$productQuantity){
           $message="We cuurently do not have enough items in stock!";
           $response['status']=false;
       }elseif($request_quantity<1){
        $message="You can not add less than 1 item!";
        $response['status']=false;
       }else{
           Cart::instance('shopping')->update($rowId,$request_quantity);
           $message="Quantity was updated succesfully!";
           $response['status']=true;
           $response['total']=Cart::subtotal();
           $response['cart_count']=Cart::instance('shopping')->count();
       }
       if($request->ajax()){
            $header =view('front.partials.header')->render();
            $response['header']=$header;
            $response['message']=$message;
        }
         return $response;
    }

    public function cuponAdd(Request $request){
       
        $code = $request->input('code');
        $cupon=Cupon::where('code',$code)->first();
        if(!$cupon){
                return back()->with('error','Invalid token code! please enter valid token');
        }
        if($cupon){
            $total= Cart::instance('shopping')->subtotal();
            session()->put('cupon',[
                'id'=>$cupon->id,
                'code'=>$cupon->code,
                'value'=>$cupon->discount($total),
            ]);
            return back()->with('success','Succesfully cupon applied');
        }
    }
}