<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 6/30/2015
 * Time: 11:45 PM
 */
namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\User;
use App\models\Role;
use App\models\Functions;
use Log;
use PDOException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use Symfony\Component\Finder\Finder;

class MenuController extends Controller
{

    public function get_menus()
    {
        /*$owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();*/
        $user = User::where('name', '=', 'kindi')->first();
        Log::info("yooo");

// role attach alias

        $user->attachRole(2);
        return view('welcome', ['menus' => Functions::all()]);
    }

    public function get_menu($parent, $child)
    {

        return $parent . '/' . $child;
        //return view('menu',['menu' =>Functions::find($id)]);
    }

    public function get_editable()
    {
        $functions = Functions::all();
        $role= Role::all();
        $inputRole="<select id='col3' class='small m-wrap' tabindex='1'>";
        foreach( $role as $roles){
            $inputRole=$inputRole.'<option value='.$roles->id.'>'.$roles->name.'</option>';
        }
        $inputRole=$inputRole."</select>";
        Log::info($inputRole);

        return view('example.table_editable', ['functions' => $functions,'inputRole'=>$inputRole]);
    }

    public function update_table(Request $request)
    {

        if ($request->action == 'update') {
            try {
                $fun = Functions::where('ID', $request->col0)
                    ->update([
                        'NAME' => $request->col1,
                        'PARENT' => $request->col2,
                        'LINK' => $request->col3,
                        'DESCRIPTION' => $request->col4
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
                $fun = new Functions;
                $fun->NAME = $request->col1;
                $fun->PARENT = $request->col2;
                $fun->LINK = $request->col3;
                $fun->DESCRIPTION=$request->col4;

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
                $fun = Functions::where('ID',$request->col0);

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

}