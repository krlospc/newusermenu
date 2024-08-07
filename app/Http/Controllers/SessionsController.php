<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login(Request $request){
        return view('session.login');
    }

    public function loginPost(Request $request){
        
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        //dd(Hash::make('test'));
        $credentials = $request->only('username', 'password');
        
        if(Auth::attempt($credentials)){
            session()->regenerate();
            // $users = DB::table('users')->get();
            /*$query = "
                select r.id as rolId, r.rol, p.id as permissionId, p.permission, m.id as menuId, m.menu
                    from users u 
                        inner join users_roles ur on (u.id =  ur.user_id )
                        inner join roles r on (ur.rol_id = r.id)
                            inner join roles_permissions rp on (r.id = rp.rol_id)
                              inner join permissions p on (rp.permission_id = p.id)
                                inner join menus m on (p.menu_id = m.id)                              
                                where u.username = '".$request->username."';

            ";*/

            $query = "
              select r.id as rolId, r.rol, p.id as permissionId, p.permiso, p.ruta -- , m.id as menuId, m.menu
                from users u
                    inner join usrs_usuarios_roles ur on (u.id = ur.user_id)
                      inner join usrs_roles r on (ur.usrs_roles_id = r.id)
                        inner join usrs_roles_permisos rp on (r.id = rp.usrs_roles_id)
                          inner join usrs_permisos p on (rp.usrs_permisos_id = p.id)
                            -- inner join usrs_menus m on (p.usrs_menus_id = m.id)
                              where u.username = '".$request->username."';
            ";            


            $objMenu = DB::select(DB::raw($query)->getValue(DB::getQueryGrammar()));
            
            $arrMenu = array();

            foreach ($objMenu as $key => $value) {
                $arrMenu[$value->rol][] = ['permiso'=> $value->permiso, 'ruta'=>$value->ruta];
                
            }
            //dd($arrMenu);
            \Session::put('arrMenu', $arrMenu);
            
            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }else{
            // return redirect()->intended('/');
            return redirect()->back()->withErrors(['username'=>'Usuario o password, alguno es invalido .']);
        }
        
        return view('welcome');
    }

    public function destroy(){

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
