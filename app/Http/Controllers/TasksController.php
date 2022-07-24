<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function taskShow($id){
        session_start();
        $counter = $_SESSION['counter'];
        $count = $_SESSION['count'];
        foreach ($_SESSION['quests'] as $key => $value) {
            if($key == $id){
                $quest = [$value->id, $value->text, $value->img];
                $answ = [$value->a, $value->b, $value->c, $value->d];
            }
        }
        shuffle($answ);
        return view('tests.taskAct', ['quest' => $quest, 'answ' => $answ, 'id' => $id, 'count' => $count, 'counter' => $counter]);
    }

    public function prov($id, $a){
        session_start();
        foreach($_SESSION['quests'] as $key => $q){
            if($id == $key){
                if($a == $q->a){
                    $_SESSION['res'] = false;
                    $_SESSION['counter'] = $_SESSION['counter'] + 1;
                }else{
                    $_SESSION['res'] = true;
                    $temp = $_SESSION['quests'][$id];
                    array_push($_SESSION['quests'], $temp);
                }
            }
        }
        $id++;
        if(isset($_SESSION['quests'][$id])){
            return redirect("/tests/task/$id");   
        }else{
            return redirect("/tests/tasks/itog");   
        }
    }

    public function itog(){
        session_start();
        $counter = $_SESSION['counter'];
        $count = $_SESSION['count'];
        $idTes = $_SESSION['testId'];
        $idUse = $_SESSION['id'];
        if(DB::table('user_tests')->select('id')->where('id_users', '=', $idUse)->where('id_tests', '=', $idTes)->get()->isEmpty()){
            DB::table('user_tests')->insert([
                'id_users' => $idUse,
                'id_tests' => $idTes,
            ]);
            $sql = "INSERT INTO user_gliphs (id_gliphs, id_users) VALUES ";
            foreach ($_SESSION['gliphs'] as $key => $value) {
                $sql .= "($value->id, $idUse), ";
            }
            $sql .= ':';
            $sql = preg_replace('/, :/', ';', $sql);
            DB::insert($sql);
        }
        return view('tests.itog', ['counter' => $counter, 'count' => $count]);
    }
}
