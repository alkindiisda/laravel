<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 7/31/2015
 * Time: 10:38 AM
 */

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\models\RoleUser;
use App\User;
use DB;
use App\models\Role;
use App\models\Permission;
use Log;
use PDOException;
use Illuminate\Http\Request;
use Session;
use Route;
class UserManagementController extends Controller
{

    public function getAddMenu($parent)
    {

       // echo PHP_EOL, "The recognized text is:", $text, PHP_EOL;
        //Log::info(Route::current()->all());
        // Log::info(Route::getCurrentRoute()->getPath());
        //Log::info($parent);
        Session::set('cur',$parent);
        $parents = DB::table('permissions')->where('parent',0)->get();
        $permission=Permission::all();
        $inputRole="<select id='col5' class='small m-wrap' tabindex='1'>";
        $inputRole=$inputRole."<option value='0'>Root</option>";
        foreach( $parents as $parent){
            $inputRole=$inputRole.'<option value='.$parent->id.'>'.$parent->display_name.'</option>';
        }
        $inputRole=$inputRole."</select>";
        Log::info($inputRole);

        return view('user.add_menu', ['permission' => $permission,'inputRole'=>$inputRole]);
    }

    public function addMenuAction(Request $request)
    {
        if ($request->action == 'update') {
            try {
                $fun = Permission::where('id', $request->col0)
                    ->update([
                        'name' => $request->col1,
                        'display_name' => $request->col2,
                        'description' => $request->col3,
                        'link' => $request->col4,
                        'parent' => $request->col5,
                        'icon' => $request->col6
                    ]);

                Log::info($fun);
                if ($fun) {

                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }

        if ($request->action == 'insert') {

            try {
                $fun = new Permission;
                $fun->name = $request->col1;
                $fun->display_name = $request->col2;
                $fun->description = $request->col3;
                $fun->link = $request->col4;
                $fun->parent= $request->col5;
                $fun->icon = $request->col6;

                if ($fun->save()) {

                    $request->merge(array('col0' => $fun->id));
                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }

        if ($request->action == 'delete') {

            try {
                $fun = Permission::where('ID',$request->col0);

                if ($fun->delete()) {

                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }


        //return response(array('sukses bisa bro!!'), 200)
        return response('Proses Gagal!!', 400)
            ->header('Content-Type', 'application/json');

    }

    public function getAssignMenu($parent)
    {
        Session::set('cur',$parent);
        // $parents = DB::table('permissions')->where('parent',0)->get();
        $role=Role::all();
        //   $permission=Permission::all();
        $inputRole="<select id='role' class='large m-wrap' tabindex='1'>";
        foreach( $role as $roles) {
            $inputRole = $inputRole . "<option value='" . $roles->id . "'>".$roles->display_name."</option>";
        }
        $inputRole=$inputRole."</select>";


        return view('user.assign_menu', ['inputRole'=>$inputRole]);
    }

    //get existing menu for choosen role
    public function menuForRole(Request $request)
    {   $rootItems="";

        try {
            $root=DB::table('permissions')->get();
            $root=collect($root);
            $role = Role::find($request->role);

            $menu = collect($role->perms);
            Log::info($menu);
            //inisialisasi menu yang telah ada
            Log::info($menu->contains('name','general'));
            //===========
            foreach($root->where('parent',0) as $item){
                $checked="";
                $hidden="hidden='hidden'";
                if($menu->contains('name',$item->name)){
                    Log::info("masuk sini");
                    $checked="checked";
                    $hidden="";
                }
                $rootItems = $rootItems."<div class='control-group'>";
                $rootItems = $rootItems." <label class='checkbox'>
                                    <input type='checkbox' prefix='assign' value='".$item->id."' id='parent' ".$checked."/><b>
                                    ".strtoupper($item->display_name)."</b></label>";
                $rootItems = $rootItems."<div class='controls' id='".$item->id."' ".$hidden.">";
                //Log::info($root->where("parent",$item->id));
                foreach($root->where("parent",$item->id) as $child){
                    $childChecked="";
                    if($checked=="checked"){
                        if($menu->contains('name',$child->name)){
                            $childChecked="checked";
                        }

                    }
                    $rootItems = $rootItems."<label class='checkbox'>";
                    $rootItems = $rootItems."<input prefix='assign' type='checkbox'
                                        id='child".$item->id."' value='".$child->id."'  ".$childChecked."/>
                                        ".$child->display_name;
                    $rootItems = $rootItems."</label>";

                }
                $rootItems = $rootItems."</div></div>";
            }
            //sending respond as html text contains all list menu choosen.


                return response(array('sukses bisa bro!!', $rootItems), 200)->header('Content-Type', 'application/json');

        } catch (PDOException $exception) {
            Log::info($exception->getMessage());
            return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

        }
    }

    public function updateAssignMenu(Request $request){
       // Log::info($request->role);

        $role= Role::find($request->role);
        //Log::info($role);
        try {
            $role->perms()->sync($request->menu);
            return response(array('sukses bisa bro!!'), 200)->header('Content-Type', 'application/json');
        }catch (PDOException $exception) {
            Log::info($exception->getMessage());
            return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

        }

    }

    public function getAddRoles($parent)
    {
        //Log::info(Route::current()->all());
        // Log::info(Route::getCurrentRoute()->getPath());
        //Log::info($parent);
        Session::set('cur',$parent);
        $roles = Role::all();
        return view('user.add_roles', ['roles' => $roles]);
    }

    public function addRolesAction(Request $request)
    {
        if ($request->action == 'update') {
            try {
                $fun = Role::find($request->col0)
                    ->update([
                        'name' => $request->col1,
                        'display_name' => $request->col2,
                        'description' => $request->col3
                    ]);

                Log::info($fun);
                if ($fun) {

                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }

        if ($request->action == 'insert') {

            try {
                $fun = new Role;
                $fun->name = $request->col1;
                $fun->display_name = $request->col2;
                $fun->description = $request->col3;
                if ($fun->save()) {

                    $request->merge(array('col0' => $fun->id));
                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }

        if ($request->action == 'delete') {

            try {
                $fun = Role::where('ID',$request->col0);

                if ($fun->delete()) {

                    return response(array('sukses bisa bro!!',$request->all()), 200)->header('Content-Type', 'application/json');
                } else {
                    return response('There is no data changes!!', 400)->header('Content-Type', 'application/json');
                }
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }


        //return response(array('sukses bisa bro!!'), 200)
        return response('Proses Gagal!!', 400)
            ->header('Content-Type', 'application/json');

    }

    public function getAssignRoles($parent)
    {
        Session::set('cur',$parent);
        // $parents = DB::table('permissions')->where('parent',0)->get();
        $role=Role::all();


        return view('user.assign_roles', ['roles'=>$role]);
    }

    public function getUser(Request $request){
         Log::info($request->all());
        //$dataUser=Array();
       if($request->action == "user")      {$dataUser=User::where('name','like','%'.$request->user.'%')->get();}
        else if($request->action == "email"){ $dataUser=User::where('email','like','%'.$request->email.'%')->get();}
        else if($request->action == "id"){ $dataUser=User::where('id',$request->id)->get();}

if(count($dataUser) != 0) {
    $user = collect($dataUser->toArray()[0]);
    Log::info($user->get("id"));
    $userrole = RoleUser::find($user->get("id"));
    Log::info($userrole->role_id);
    $role = Role::find($userrole->role_id);
    Log::info($role->display_name);
    try {
        return response(array('sukses bisa bro!!', $dataUser, $role->display_name), 200)->header('Content-Type', 'application/json');
    } catch (PDOException $exception) {
        Log::info($exception->getMessage());
        return response(array('Proses Gagal!!',$exception->getMessage()), 400)->header('Content-Type', 'application/json');

    }
}else{
    return response('User Tidak ditemukan!!', 400)->header('Content-Type', 'application/json');
}

    }

    public function updateUserRole(Request $request){
        Log::info(count($request->role));
        Log::info($request->user=="");
        if($request->user!="" && $request->role!="") {
            try {
                $Role = RoleUser::find($request->user);
                $Role->role_id = $request->role;
                $Role->save();
                return response(array('sukses bisa bro!!'), 200)->header('Content-Type', 'application/json');
            } catch (PDOException $exception) {
                Log::info($exception->getMessage());
                return response('Proses Gagal!!', 400)->header('Content-Type', 'application/json');

            }
        }else{
            return response('User or Role is not defined!!', 400)->header('Content-Type', 'application/json');
        }

    }

}