<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function openAboutus(){
        return view('aboutus');
    }
    // function openTop(){
    //     return view('top');
    // }
    // function openBottom(){
    //     return view('bottom');
    // }
    // function openShoes(){
    //     return view('shoes');
    // }
    // function openFullset(){
    //     return view('fullset');
    // }
    // function openBuy1Get1Free(){
    //     return view('By1Get1Free');
    // }
    // function openSummerCollection(){
    //     return view('summerCollection');
    // }




//top set
    public function opentopset(Request $request){
        $search = $request['userInput'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('By1Get1Free',compact('products','search'));
    }
    //Buy 1 get 1 free offers
    public function openBuy1Get1Free(Request $request){
        $search = $request['userInput'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('By1Get1Free',compact('products','search'));
    }
//     public function uploaded(Request $request){
//         $request->validate(
//         [
//             'productName'=>'required',
//             'productCompany'=>'required',
//             'productPrice'=>'required',
//             'productImage'=>'required'
//         ]
//     );
//     $fileName = time()."offer.".$request->file('productImage')->getClientOriginalExtension();
//     $request->file('productImage')->move('upload',$fileName);
//     $product = new Product();
//     $product->productName = $request['productName'];
//     $product->productCompany = $request['productCompany'];
//     $product->productPrice = $request['productPrice'];
//     $product->productImage = $fileName;
//     $product->save();
//     return redirect('admin');
// }
public function toDeleteProduct($id){
    $pro = Product::find($id)->delete();
    return redirect()->back();
}
public function openAddProduct(){
    $url = "addProduct";
    $name = "Add New Product";
    $dress = new Product();
    return view('addDataInDressType',compact('url','name','dress'));
}
public function toEditProduct($id){
    $dress = Product::find($id);
    $name = "Edit Product";
    $url = url('/updateProduct')."/".$id;
    return view('addDataInDressType',compact('dress','url','name'));
}
// public function updateItemInBuy1Get1Free($id, Request $request){
//     $request->validate(
//         [
//             'productImage' => 'required',
//             'productName' => 'required',
//             'productCompany' => 'required',
//             'productPrice' => 'required',
//         ]
//         );
//     $dress = Product::find($id);
//     $fileName = time()."offer1.".$request->file('productImage')->getClientOriginalExtension();
//     $request->file('productImage')->move('upload',$fileName);
//     $dress->productName = $request['productName'];
//     $dress->productCompany = $request['productCompany'];
//     $dress->productPrice = $request['productPrice'];
//     $dress->productImage = $fileName;
//     $dress->save();
//     return redirect('admin');
// }

//Summer collection offers
public function openSummerCollection(){
    $link = "uploadsSummerCollection";
    $name = "Add New Product";
    $dress = new Product();
    return view('addDataInProduct',compact('link','name','dress'));
}
public function Summer(Request $request){
        $search = $request['user'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('summerCollection',compact('products','search'));
    }
    public function deleteSummerCollection($id){
        $pro = Product::find($id)->delete();
        return redirect('admin');
    }
    public function uploadSummerCollection(Request $request){
        $request->validate(
            [
                'productName'=>'required',
                'productCompany'=>'required',
                'productPrice'=>'required',
                'productImage'=>'required'
            ]
        );
        $fileName = time()."summer.".$request->file('productImage')->getClientOriginalExtension();
        $request->file('productImage')->move('upload',$fileName);
        $product = new Product();
        $product->productName = $request['productName'];
        $product->productCompany = $request['productCompany'];
        $product->productPrice = $request['productPrice'];
        $product->productImage = $fileName;
        $product->save();
        return redirect('admin');
    }
    public function editDressInSummerCollection($id){
        $dress = Product::find($id);
        $name = "Edit items in Summer Collection";
        $link = url('/updateItemInSummerCollection')."/".$id;
        return view('addData',compact('dress','link','name'));
    }
    public function updateItemInSummerCollection($id, Request $request){
        $request->validate(
            [
                'productImage' => 'required',
                'productName' => 'required',
                'productCompany' => 'required',
                'productPrice' => 'required',
            ]
            );
        $dress = Product::find($id);
        $fileName = time()."offer2.".$request->file('productImage')->getClientOriginalExtension();
        $request->file('productImage')->move('upload',$fileName);
        $dress->productName = $request['productName'];
        $dress->productCompany = $request['productCompany'];
        $dress->productPrice = $request['productPrice'];
        $dress->productImage = $fileName;
        $dress->save();
        return redirect('admin');
    }

    //Product contain fullset,top,bottom,shoes
    public function openTop(Request $request){
       
            $search = $request['userInput'] ?? "";
            if($search != ""){
                $products = Product::where('productCompany','LIKE',"%$search%")->get();
            }
            else{
                $products = Product::all();
            }
            return view('top',compact('products','search'));
        }
    public function openbottom(Request $request){
        $search = $request['userInput'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('bottom',compact('products','search'));
    }
    public function openshoes(Request $request){
        $search = $request['userInput'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('shoes',compact('products','search'));
    }
    public function openfullset(Request $request){
        $search = $request['userInput'] ?? "";
        if($search != ""){
            $products = Product::where('productCompany','LIKE',"%$search%")->get();
        }
        else{
            $products = Product::all();
        }
        return view('shoes',compact('products','search'));
    }
    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect()->back();
    }
    // public function Openregister(){
    //     $link = url('register');
    //     return view('auth.register',compact('link'));
    // }
    public function toEditCustomer($id){
        $cus = User::find($id);
        $url = url('/updateCustomer')."/".$id;
        return view('auth/register',compact('cus','url'));
    }
    public function editDress($id){
        $dress = Product::find($id);
        $url = url('/updateProduct')."/".$id;
        $name = "Edit Your Product";
        return view('addDataInProduct',compact('dress','url','name'));
    }
    public function updateItemInProduct($id, Request $request){
        $request->validate(
            [
                'productImage' => 'required',
                'productName' => 'required',
                'productType'=>'required',
                'productCompany' => 'required',
                'productPrice' => 'required',
            ]
            );
        $dress = Product::find($id);
        $fileName = time()."Product.".$request->file('productImage')->getClientOriginalExtension();
        $request->file('productImage')->move('upload',$fileName);
        $dress->productName = $request['productName'];
        $dress->productCompany = $request['productCompany'];
        $dress->productType = $request['productType'];
        $dress->productPrice = $request['productPrice'];
        $dress->productImage = $fileName;
        $dress->save();
        return redirect('admin');
    }
    public function openHome(){
        if(Auth::id()){
            $features = Product::all();
            $userName = Auth::User()->name;
            $email = Auth::User()->email;
            return view('home',compact('userName','email','features'));
        }
        else{
            $features = Product::all();
            return view('home',compact('features'));
        }
    }
    public function openProduct(){
        $dress =new Product();
        $url = url("/addItemInProduct");
        $name = "Add New Product";
        return view('addDataInProduct',compact('dress','url','name'));
    }
    public function addItemInProduct(Request $request){
        $request->validate(
            [
                'productImage' => 'required',
                'productName' => 'required',
                'productType'=>'required',
                'productCompany' => 'required',
                'productPrice' => 'required',
            ]
            );
        $fileName = time()."Product.".$request->file('productImage')->getClientOriginalExtension();
        $request->file('productImage')->move('upload',$fileName);
        $dress = new Product();
        $dress->productName = $request['productName'];
        $dress->productCompany = $request['productCompany'];
        $dress->productType = $request['productType'];
        $dress->productPrice = $request['productPrice'];
        $dress->productImage = $fileName;
        $dress->save();
        return redirect('admin');
    }
    public function addToCart($id = null){
        $product = Product::find($id);
        $tem = Cart::find($id);
        if(Auth::id()){
                if(is_null($tem)){
                $cart = new Cart();
                $cart->id = $product->id;
                $cart->productName = $product->productName;
                $cart->productImage = $product->productImage;
                $cart->productPrice = $product->productPrice;
                $cart->save();
                return redirect()->back()->with('message','Sucessfully item added to cart');
                }
                else{
                return redirect()->back()->with('message','This item is already there');
                }
        }
        else{
            return redirect('login');
        }
    }
    public function deleteCart($id){
        Cart::find($id)->delete();
        return redirect()->back();
    }
    public function openCart(){
        $products = Cart::all();
        if(Auth::id())
            {
                $userName = Auth::User()->name;
                $email = Auth::User()->email;
                return view('cart',compact('products','userName','email'));
            // return view('cart',compact('products'));
            }
        else
            {
                // abort(401);
            return redirect('login');
            }
}
public function opentermsandcondition(){
    return view('termsandcondition');
}
public function openprivaryandpolicy(){
    return view('privacyandpolicy');
}
// // create users account
// public function opencreateacc(){
//     return view('createAccount');
// }
// public function submitcreateacc(Request $request){
//     $request->validate(
//         [
//            'fullname' => 'required',
//             'email' => 'required|email',
//             'password' => 'required|min:8'
//         ]
//         );
//         $makeacc = new User();
//         $user->FullName = $request['fullname'];
//         $user->location = $request['location'];
//         $user->ContactNumber = $request['contact'];
//         $user->email = $request['email'];
//         $user->password = $request['password'];
//         $makeacc->email = $user->email;
//         $makeacc->password = $user->password;
//         $user->save();
//         $makeacc->save();
//         echo "sucessfully created account";
// }




// login users
    // public function loginSubmit(Request $request){
    //     $request->validate(
    //         [
    //         'email' => 'required|email',
    //         'password' => 'required|min:8'
    //         ]
    //     );
    //     // $user = createUser::all();
    //     $userInput = $request['email'];
    //     // $id=0;
    //     if($userInput == 'admin123@gmail.com'){
    //         session()->put('admin_role','true');
    //         return redirect('admin');
    //     }
    //     // while($id<10){
    //     //     $id=1;
    //     //     $check = createUser::find($id);
    //     //     if($check->email === $userInput){
    //     //     $request->session()->put('name',$user->FullName);
    //     //     return redirect('home');
    //     //     die;
    //     //     }
    //     //     $id++;
    //     // }
    //     // echo "you dont have account here please create it first";
    // }

    //admin section
    public function openAdmin(){
        $customers = User::all();
        $products = Product::all();
        $totalProduct = Product::count();
        return view('admin',compact('products','customers','totalProduct'));
    }

    // session part 
    public function sigin(Request $request){
        $request->session()->put('name','sabin');
        $request->session()->put('thar','karki');
        echo "sucessfully login";
    }
    public function showsession(){
        $session = session()->all();
        echo "<pre>";
        print_r($session);
    }
    public function delsession(){
        session()->forget('name','thar');
        echo "sucessfully logout";
    }
    public function viewitem($id){
        $product = Product::find($id);
        return view('viewcartitem',compact('product'));
    }

    
    public function viewdi(){
        $all = Cart::with('getuser')->get();
        return view('viewdi',compact('all'));
    }
}
