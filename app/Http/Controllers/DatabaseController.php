<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    public function startCheck($s){
        if($s){
            return true;
        }else{
            return false;
        }
    }

    public function startT(){
        session_start();
        if(isset($_SESSION['admin'])){
            if($_SESSION['admin'] == 'adminT'){
                $_SESSION['table'] = [];
                array_push($_SESSION['table'], ['tests','Тесты']);
                array_push($_SESSION['table'], ['tasks','Задания']);
                array_push($_SESSION['table'], ['gliphs',"Иероглифы"]);
                $title = 'тест-админ';
                return view('adminUsTest.choose', ['tableNames' => $_SESSION['table'], 'title' => $title]);
            }else{
                session_destroy();
            }
        }
        return redirect('/');
    }

    public function startU(){
        session_start();
        if(isset($_SESSION['admin'])){
            if($_SESSION['admin'] == 'adminU'){
                $_SESSION['table'] = [];
                array_push($_SESSION['table'], ['users',"пользователи"]);
                array_push($_SESSION['table'], ['achivs',"достижения"]);
                $title = 'юзер-админ';
                return view('adminUsTest.choose', ['tableNames' => $_SESSION['table'], 'title' => $title]);
            }else{
                session_destroy();
            }
        }
        return redirect('/');
    }

    public function showTable($table){
        switch ($table) {
            case 'users':
                $query = DB::table("$table")->select('id', 'logn', 'mail', 'created_at', 'updated_at')->get();
                break;
            default:
                $query = DB::table("$table")->select()->get();
                break;
        }
        session_start();
        $_SESSION['table'] = [$query, "$table"];
        $for = $_SESSION['admin'];
        return $this->sss($for);   
    }

    public function del($table, $id){
        DB::table("$table")->delete($id);
        return redirect("/admin/table/$table");   
    }

    // public function upd(Request $req, $table, $id){
    //     $forUpd = $req->request;
    //     $sql = "UPDATE $table SET ";
    //     foreach ($forUpd as $key => $value) {
    //         $sql .= "$key = '$value', ";
    //     }
    //     $sql .= ':';
    //     $sql = preg_replace('/, :/', ' ', $sql);
    //     $sql .= "WHERE id = $id;";
    //     DB::update($sql);
    //     return redirect("/admin/table/$table");   
    // }

    // public function ins(Request $req, $table){
    //     $forUpd = $req->request;
    //     $sql = "INSERT INTO $table (";
    //     foreach ($forUpd as $key => $value) {
    //         $sql .= "`$key`, ";
    //     }
    //     $sql .= ':';
    //     $sql = preg_replace('/, :/', ') ', $sql);
    //     $sql .= "VALUES (";
    //     foreach ($forUpd as $key => $value) {
    //         $sql .= "'$value', ";
    //     }
        
    //     $sql .= ':';
    //     $sql = preg_replace('/, :/', ');', $sql);
    //     DB::insert($sql);
    //     return redirect("/admin/table/$table");  
    // }
}