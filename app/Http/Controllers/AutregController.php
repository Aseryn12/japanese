<?php

namespace App\Http\Controllers;

use App\Models\users;

use Illuminate\Http\Request;
    
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class AutregController extends Controller
{

    public function main(){
        session_start();
        if(!isset($_SESSION['f'])){
            $_SESSION['f'] = false;
        }
        if(isset($_SESSION['token'])){
            $user = DB::table('users')->where('remember_token', '=', $_SESSION['token'])->update([
                'remember_token' => null,
            ]);
            $_SESSION['token'] = null;
            session_destroy();
        }
        return view('forms');
    }

    public function message(){
        return[
            'required' => 'Все поля оюязательны для заполнения',
            'alpha' => 'Данное поле :attribute может содержать только буквы',
            'digits' => 'Поле `пароль` должно быть с длиной :digits!',
            'email' => 'Поле `mail` должно быть почтовым адресом!',
            'unique' => 'Данное поле :attribute имеет уникальное значение',
            'min' => 'Поле `пароль` должно содержать не менее :min символов!',
            'max' => 'Поле `пароль` должно содержать не более :max символов',
            'same' => 'Поле `повторите проль` должно соотвтетсвовать полю `пароль`!',
        ];
    }

    public function auth(Request $request){
        $l = $request->get('log');
        $p = $request->input('pass');
        $p = Hash::make($p);
        if(DB::table('users')->where('logn', '=', $l)->get()->isEmpty()){
            session_start();
            $_SESSION['f'] = true;
            return redirect('/');
        }else{
            $chl = DB::table('users')->where('logn', '=', $l)->get();
            $p = $request->get('pass');
            if($chl && Hash::check($p, $chl[0]->pass)){
                $id = DB::table('users')->select('id')->where('logn', '=', "$l")->first()->id;
                session_start();
                $_SESSION['f'] = false;
                $_SESSION['token'] = strval(rand(100000, 999999));
                $_SESSION['id'] = $id;
                $user = DB::table('users')->where('logn', '=', "$l")->update([
                    'remember_token' => $_SESSION['token'],
                ]);
                if($l == 'adminT' && Hash::check($p, $chl[0]->pass)){
                    $_SESSION['admin'] = 'adminT';
                    return redirect('/admin/adminT');
                }
                if($l == 'adminU' && Hash::check($p, $chl[0]->pass)){
                    $_SESSION['admin'] = 'adminU';
                    return redirect('/admin/adminU');
                }
                return redirect("/lichkab/tests");
            }else{
                echo "OSHIBKA in auth";
            }
        }

    }

    public function reg(Request $request){
        $valid = Validator::make($request->all(),[
            'logn' => 'required|unique:users',
            'mail' => 'required|unique:users|email',
            'pass' => 'required|min:8|max:16',
            'passRep' => 'required|same:pass',
        ], $this->message());

        if($valid->fails()){
            $_SESSION['f'] = true;
            return view('forms', ['message' => $valid->errors()->messages()]);
        }
        $user = DB::table('users')->insert([
            'logn' => $request->get('logn'),
            'pass' => Hash::make($request->get('pass')),
            'mail' => $request->get('mail'),
        ]);

        $l = $request->get('logn');
        $chl = DB::table('users')->where('logn', '=', $l)->get();
        $p = $request->get('pass');
        if($chl && Hash::check($p, $chl[0]->pass)){
            $id = DB::table('users')->select('id')->where('logn', '=', "$l")->first()->id;
            session_start();
            $_SESSION['token'] = strval(rand(100000, 999999));
            $_SESSION['id'] = $id;
            $user = DB::table('users')->where('logn', '=', "$l")->update([
                'remember_token' => $_SESSION['token'],
            ]);
            return redirect("/lichkab/tests");
        }else{
            echo "OSHIBKA in reg";
        }
    }
}
?>