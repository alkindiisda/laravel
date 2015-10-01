<?php

namespace Illuminate\Foundation\Auth;

use App\models\RoleUser;
use App\models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::login($this->create($request->all()));


        $roleid= new RoleUser;
        $roleid->role_id=3;
        $roleid->user_id=Auth::user()->id;
        $roleid->save();

        // Log::alert($roleid[0]);
        $permit=Role::with('perms')->where('id', $roleid->role_id)
            ->get();
        //  Log::info($permit[0]->perms);

        // Log::alert(json_encode($child));
        $menus =[];
        foreach($permit[0]->perms as $detail){
            if($detail->parent == '0'){
                $menu=array();
                foreach($permit[0]->perms as $child){

                    if($child->parent == $detail->id){
                        array_push($menu, $child);
                    }
                }
                $detail =array_add($detail,'child',$menu);
                array_push($menus, $detail);
            }
        }
        //Log::info($menus);
        Session::set('menu', $menus);
        return redirect($this->redirectPath());
    }
}
