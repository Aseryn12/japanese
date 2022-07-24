<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function toTheory($id){
        $res = DB::table('theories')->join('tests', 'id_theory', '=', 'theories.id')->where('tests.id', '=', "$id")->select('theoryTitle','theoryText','theories.id')->first();
        $imgs = DB::table('gliphs')->join('theory_gliphs', 'id_gliphs', '=', 'gliphs.id')->where('id_theories', '=', $res->id)->select('img', 'ciril')->get();
        session_start();
        $_SESSION['testId'] = $id;
        return view('tests.testTheory', ['id' => $id, 'res' => $res, 'imgs' => $imgs]);
    }

    public function toTask($id){
        $mass = DB::table('tasks')->join('task_tests', 'id_tasks', '=', 'tasks.id')->join('gliphs', 'id_gliphs', '=', 'gliphs.id')->where('id_tests', '=', $id)->select('tasks.id', 'img', 'text', 'a', 'b', 'c', 'd')->get();
        $gliphs = DB::table('tasks')->join('gliphs', 'id_gliphs', '=', 'gliphs.id')->join('task_tests', 'id_tasks', '=', 'tasks.id')->select('gliphs.id')->where('id_tests', '=', $id)->where('gliphs.id' ,'!=', 170)->get();
        session_start();
        $_SESSION['gliphs'] = $gliphs; 
        $id = 0;
        $massQuests = array();
        foreach ($mass as $key => $value) {
            array_push($massQuests, $value);
        }
        $_SESSION['res'] = false;
        $_SESSION['quests'] = $massQuests;
        $_SESSION['count'] = count($massQuests);
        $_SESSION['counter'] = 0;
        return redirect("/tests/task/$id");
    }
}
