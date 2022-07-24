<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KabController extends Controller
{

    public function lich($name){
        session_start();
        if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $token = DB::table('users')->select('remember_token')->where('id', '=', $id)->first()->remember_token;
            if($token == $_SESSION['token']){
                switch ($name) {
                    case 'achivs':
                        $query = DB::table('achivs')->get();
                        return view('lichKab.achiv', ['query' => $query]);
                        break;
                    case 'gliphs':
                        $query = DB::table('gliphs')->select('gliphs.id', 'latin', 'ciril', 'img')->join('user_gliphs', 'id_gliphs', '=', 'gliphs.id')->where('id_users', '=', "$id")->orderBy('gliphs.id')->get();
                        return view('lichKab.gliphs', ['query' => $query]);
                        break;
                    case 'logs':
                        $query = DB::table('users')->select('id', 'logn', 'mail', 'name')->where('id', '=', $id)->first();
                        $statA = DB::table('users')->join('user_achivs', 'id_users', '=', 'users.id')->where('id_users', '=', $id)->count();
                        $statG = DB::table('users')->join('user_gliphs', 'id_users', '=', 'users.id')->where('id_users', '=', $id)->count();
                        $statT = DB::table('users')->join('user_tests', 'id_users', '=', 'users.id')->where('id_users', '=', $id)->count();
                        $achivs = DB::table('achivs')->select('img', 'name')->join('user_achivs', 'id_achivs', '=', 'achivs.id')->where('id_users', '=', $id)->get();
                        $itog = [$statA, $statG, $statT];
                        $statA = DB::table('achivs')->count();
                        $statG = DB::table('gliphs')->count();
                        $statT = DB::table('tests')->count();
                        $count = [$statA, $statG, $statT];
                        return view('lichKab.log', ['query' => $query, 'itog' => $itog, 'count' => $count, 'achivs' => $achivs]);
                        break;
                    case 'tests':
                        $id_tests = DB::table('user_tests')->select('id_tests')->where('id_users', '=', "$id")->get();
                        $query = DB::table('tests')->get();
                        return view('lichKab.tests', ['query' => $query, 'idTests' => $id_tests]);
                        break;
                    default:
                        return redirect('/');
                        break;
                }
            }
        }
        return redirect('/');
    }
}