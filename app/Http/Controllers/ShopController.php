<?php

//use Stripe\Charge;
use Stripe\Stripe;
namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
//use App\Http\Controllers\Stripe;

//require_once('/path/to/stripe-php/init.php');

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('shoppage');
       $products = product::orderBy('id','asc')->get();
       return view('shoppage',compact ('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = product::find($id);
        return view('product')->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
     
        $request->session()->put('cart',$cart);
        return back();
        //return redirect()->route('product.addToCart');
       // dd($request->session()->get('cart'));
        
     }


     public function getCart(){
        if (!Session::has('cart')){
             return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }



      public function getCheckout(){
        if (!Session::has('cart')){
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
      }


      public function postCheckout(Request $request)
      {
          if (!Session::has('cart')){
             return redirect()->route('shoppingcart');
         }
         $oldCart = Session::get('cart');
         $cart = new Cart($oldCart);
         
         Stripe::setApiKey('sk_test_51Io4hXACLwpJgLfCVSFzJMfIoYRSfnzavlSQIMDzzaTnwziz6vtwrCyGutVROodumwZabXSPvFDC9Q6GKyf8Mz3w002rLASPxn');
         try {
             Stripe::create(array(
              "amount" => $cart->totalPrice * 100,
              "currency" => "usd",
              "source" => $request->input('stripeToken'),
              "description" => "Charge for fashion store"
              ));
           } catch (\Exception $e){
               return redirect()->route('checkout')->with('error',$e->getMessage());
            }
            Session::forget('cart');
            return redirect()->route('shoppage')->with('success', 'Payment successful');
          } 
         
      
    


}
