<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Epharmauth;
use App\Models\Pharmacie;
use App\Models\pharmacies;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Console\Command;

class epharmacontroller extends Controller
{
      public function home(){
    return view("auth.epharmacie");
}

    public function inscription(){
        return view("auth.inscription");
    }
    public function registration(){
        return view("auth.registration");
    }
    public function registeruser(Request $request){
       // echo 'value posted';
       $request->validate([
           'nom'=>'required',
           'prenom'=>'required',
           'email'=>'required|email|unique:epharmauths',
           'telephone'=>'required',
           'role'=>'required',
           'motdepasse'=>'required',
           'confirmation'=>'required',
       ]);
//pour stocker dans BD
       $epharmauth=new Epharmauth();
       $epharmauth->nom=$request->nom;
       $epharmauth->prenom=$request->prenom;
       $epharmauth->email=$request->email;
       $epharmauth->telephone=$request->telephone;
       $epharmauth->role=$request->role;
       $epharmauth->motdepasse= Hash::make($request->motdepasse);//pour rendre le mot de passe invisible dans BD
       $res=$epharmauth->save();
       if($res){
           return back()->with('success','inscription avec succes');
       } else{
           return back()->with('fail','inscription irronee!!!!!');
       }

    }
    public function registeruser1(Request $request){
        // echo 'value posted';
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email|unique:epharmauths',
            'telephone'=>'required',
            'role'=>'required',
            'motdepasse'=>'required',
            'confirmation'=>'required',
        ]);
 //pour stocker dans BD
        $epharmauth=new Epharmauth();
        $epharmauth->nom=$request->nom;
        $epharmauth->prenom=$request->prenom;
        $epharmauth->email=$request->email;
        $epharmauth->telephone=$request->telephone;
        $epharmauth->role=$request->role;
        $epharmauth->motdepasse= Hash::make($request->motdepasse);//pour rendre le mot de passe invisible dans BD
        $res=$epharmauth->save();
        if($res){
            return back()->with('success','inscription avec succes');
        } else{
            return back()->with('fail','inscription irronee!!!!!');
        }

     }
    public function loginuser(Request $request){
        $request->validate([
             'email'=>'required|email',
             'motdepasse'=>'required'
        ]);
       // $role = $this->getTable('epharmauths')->pluck('role');
      // $role=Epharmauth::epharmauths()->role;
        $epharmauth=Epharmauth::where('email','=',$request->email)->first();
        if($epharmauth && $epharmauth->role == 'ADM'){
            if(Hash::check($request->motdepasse , $epharmauth->motdepasse)){
                $request->session()->put('loginId',$epharmauth->id);
                return redirect('/dashboard-admin');
            }else{
                return back()->with('fail','mot de passe incorrect');
            }

        }else if ($epharmauth && $epharmauth->role == 'USR'){
            if(Hash::check($request->motdepasse , $epharmauth->motdepasse)){
                $request->session()->put('loginId',$epharmauth->id);
                return redirect('/dashboard-user');
            }else{
                return back()->with('fail','mot de passe incorrect');
            }}
            else if ($epharmauth && $epharmauth->role == 'PHARMA'){
                if(Hash::check($request->motdepasse , $epharmauth->motdepasse)){
                    $request->session()->put('loginId',$epharmauth->id);
                    return redirect('/dashboard-pharma');
                }else{
                    return back()->with('fail','mot de passe incorrect');
                }
            }
        else {return back()->with('fail','this email is not registered');}


    }


    public function dashboard(Request $request){
       // echo 'welcome';
       $data=array();
       if($request->session()->has('loginId')){
        $data=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();

       }

       return view("auth.dashboard", compact('data'));
    }

    public function logout(Request $request){

        if($request->session()->has('loginId')){
            $request->session()->pull('loginId');
            //  return  redirect('inscription');
            return view("auth.inscription");

        }

    }
    public function userinfo(Request $request){
        $d=array();
        if($request->session()->has('loginId')){
        $d=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();
        }
        return view("auth.user" , compact('d'));
    }

    public function infopharma(Request $request){

        $d=array();
        if($request->session()->has('loginId')){
        $d=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();
        }
        return view("pharma.info" , compact('d'));
    }

    public function infospersonnel(Request $request){
        $d=array();
        if($request->session()->has('loginId')){
        $d=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();
        }
        return view("User.infospersonnel" , compact('d'));
    }
    public function findpharma(Request $request){
        $data=array();
        if($request->session()->has('loginId')){
         $data=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();

        }

        return view("auth.findpharmacie", compact('data'));
    }

public function showadmin(){
    return view ("admin.dashboardadmin");
}
public function showuser(){
    return view ("user.dashboarduser");
}
public function showpharma(){
    return view ("pharma.dashboardpharma");
}
public function showpharmalist(){
    $epharmauths = Epharmauth::all();
    return view ("admin.pharmalist",compact('epharmauths'));
}
public function delete_epharma($id){
    $epharmauth = Epharmauth::find($id);
    $epharmauth->delete();
    return back()->with('success','you have successflly deletrd the user');
}
public function showpharmacie(){
    $pharmacies=Pharmacie::all();
    return view ("admin.pharmacies",compact('pharmacies'));
}

public function addpharmacie(Request $request){
    $request->validate([
        'nom'=>'required',
        'adresse'=>'required',
        'code'=>'required',
    ]);
//pour stocker dans BD
    $pharmacie=new Pharmacie();
    $pharmacie->nom=$request->nom;
    $pharmacie->adresse=$request->adresse;
    $pharmacie->code=$request->code;
    $res=$pharmacie->save();
    if($res){
        return back()->with('success','inscription avec succes');
    } else{
        return back()->with('fail','inscription irronee!!!!!');
    }
}
public function commande(Request $request){
    $pharmacies=Pharmacie::all();
    $user=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();
    return view("User.commande",compact('pharmacies','user'));
}
public function addcommande(Request $request){
    $request->validate([
        'reference'=>'required',
        'adresse'=>'required',
        'ord'=>'required',
    ]);
    // $file = $request->file('ord');
    // $name = Str::random(10);
    // $url = Storage::putFileAs('images', $file, $name . '.' . $file->extension());

     $imageName = time().'.'.$request->ord->extension();
     $request->ord->move(public_path('imgs'), $imageName);
    Commande::create([
        'reference'=>$request->reference,
        'adresse'=>$request->adresse,
        'ordonance'=>$imageName,
        'epharmauth_id'=>$request->epharmauth_id,
        'pharmacie_id'=>$request->pharmacie_id,
    ]);
    return back()->with('success','ajoute avec sucess');
}
public function rejoindrepharmacie(Request $request){

    $user=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();
    return view("pharma.rejoindrepharmacie",compact('user'));
}
public function rejoindre(Request $request){

    $pharmacies= Pharmacie::all();
     $user=Epharmauth::find($request->id);
    foreach ($pharmacies as $pharma) {
        if( $pharma->nom==$request->nom && $pharma->code==$request->code){
            $id=$pharma->id;
            break;
        }
    }
    $user->pharmacie_id=$id;
    $user->save();
    if($pharmacies){
        return back()->with('success','rejoider avec sucess');
    }else{
        return back()
                    ->withErrors(['pharmacie introuvable']);
                }
    }

    public function pharmacmd(Request $request){
        $user=Epharmauth::where('id','=',$request->session()->get('loginId'))->first();

        $pharmacie=Pharmacie::find($user->pharmacie_id);
        $commandes=DB::table('commandes')->where('pharmacie_id', '=',$pharmacie->id )->get();
        return view("pharma.pharmaciecmd",compact('commandes'));

    }
    public function validation(Request $request){
        $commande=Commande::find($request->id);
        $commande->is_valid=true;
        $commande->save();
        return back()->with('success','validation avec sucess');
    }


    public function delete_pharmacie($id){
        $pharmacie = Pharmacie::find($id);
        $pharmacie->delete();
        return back()->with('success','you have successflly deletrd the user');
    }

}

