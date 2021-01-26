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
class SignUpController extends Controller
{
    //Founction de verification de l'email du user, il va regarder si le email est celui dans la base de donées
    //Donc si Email trouvé alors l'utilisateur devra faire un autre email

    public function emailCheck(Request $r)
    {
       $user = User::where('email',$r->email)
        
        ->first();

        if($user==null)
        {
             $emailstate = 0;
        }
        else
        {
            $emailstate = 1;
        }
        
         echo json_encode($emailstate);
    exit;
    }

    // 

    public function userPosted(Request $r)
    {  

        
            

            //Les champs requis 


            $validatedData = $r->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'solde' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',//On pourrait apres modifier le nombre de caractere requis pour le mot de passe pour l'instant je le laisse à 6 si cela te convient
            ]);

            

            //dd($validatedData);
            $u=new User();
            $u->lastname=$r->name;
            $u->email=$r->email;
            $u->password=$r->password;
            
            
            //dd($u);

            $u->save();//On sauvegarde les identifiants de user

            $user=User::find($u->id);

            $r->session()->put('user',$user);
                //On redirige le User sur la route de 'linscription
            return redirect()->route('user.home');//La route qu'on fera pour l'acceuil sera appelée user.home
    }

}
