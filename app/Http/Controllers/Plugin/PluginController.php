<?php
/**
 * Created by PhpStorm.
 * User: AL Kindi Isda
 * Date: 8/6/2015
 * Time: 9:39 AM
 */

namespace App\Http\Controllers\Plugin;

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
use File;
use App\Library\TesseractOCR;
class PluginController extends Controller
{

    public function uploadFile(Request $request)
    {
       // Log::info($request->all());

        $binary_data = $request->image;
        $new_data=explode(";",$binary_data);
        $type=$new_data[0];
        $data=explode(",",$new_data[1]);
        header("Content-type:".$type);
       // Log::info(base64_decode($data[1]));

        // save to server (beware of permissions)
        $path=base_path() . '/public/images/'.rand().'.jpg';
        $result = file_put_contents( $path, base64_decode($data[1]) );
        $text="";
      /* $imageName = $request->file('image')->getClientOriginalName();
        $path=base_path() . '/public/images/'.$imageName;
        $request->file('image')->move(base_path() . '/public/images/', $imageName);

        */
        $tesseract = new TesseractOCR($path);
      //  Log::info($path);

        $tesseract->setTempDir('C:\TESTINGOCR');
        //$tesseract->setLanguage('ind');
        $text = $tesseract->recognize();
        Log::info($text);
        //File::delete($path);
        //return view('example.plugin_text_recognition',['text' => $text]);
        return response(array('sukses bisa bro!!',$text), 200)->header('Content-Type', 'application/json');

        //return response('Recognition File!!', 400)->header('Content-Type', 'application/json');
    }
}