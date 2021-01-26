<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Admin;
/* Au cas où nous crééons des models pour les livraisons API et Soldes produits
use App\Models\sale;
use App\Models\Address;
*/
class LoginController extends Controller
{
    //Atterir sur la page de formulaire de connexion Amin
    public function adminIndex()
    {
    	return view('adminPanel.adminLogin');
    }

    //Se deconnecter de l'administration
    public function adminLogout()
    {
        session()->flush();   
    	return redirect()->route('admin.login');//on est alors rediriger sur admin login
    }

    // Se Login à l'administration

    public function adminPosted(Request $request)
    {  
        $admin = Admin::where('username',$request->Username)->first();
        
        if($admin==null)
        {   //diriger sur la page d'acceuill avec message de username invalid
            
            $request->session()->flash('message', 'Invalid Username');
            
            return redirect(route('admin.login'));
        }
        
        else //Sinon si password valid on fait la redirection sur le dashboard sinon on envoie sur adminLogin pour le login des administrateurs
        {
            if($request->Password==$admin->password) 
            {
                session()->put('admin',$admin);
                //$request->session()->put('username', $request->Username);
                return redirect()->route('admin.dashboard');
            }
            
            else if($request->Password!=$admin->password)
            {
                $request->session()->flash('message', 'Invalid Password');
                return view('adminPanel.adminLogin');
            }
        }
        
    }

    //
    public function userIndex()
    {
        if(session()->has('user')){
            return redirect()->route("user.cart");
        }

        $res = Product::all();
        $cat = Category::all();

        return view('store.login')
        ->with('products', $res)
        ->with("cat", $cat);

    }

    //

    public function userPosted(Request $request)
    {
        $user = User::where('email',$request->email)
        ->where('password',$request->pass)
        ->first();

        if($user==null)
        {
            $request->session()->flash('message', 'Invalid User');
    		
            return redirect()->route('user.login');
        }
        else
        {
            $request->session()->put('user', $user);
            return redirect()->route('user.home');
        }
    }

    //
    public function userLogout(Request $r)
    {
        $r->session()->flush();
        return redirect()->route('user.home');
    }

}
