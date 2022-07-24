<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class TasksDBController extends Controller
{
    public function message(){
        return [
            'required' => 'Поле обязательно для заполнения',
            'string' => 'Поле должно содержать строку',
            'number' => 'Поле должно содержать цифру'
        ];
    }

    public function index(){
        $res = DB::select('SELECT tasks.id, `text`, a, b, c, d, img, id_tests FROM tasks INNER JOIN task_tests ON tasks.id = id_tasks INNER JOIN gliphs ON id_gliphs = gliphs.id ORDER BY id_tests');
        $gliphs = DB::select('SELECT id, ciril, latin FROM gliphs');
        $tests = DB::select("SELECT id FROM tests ORDER BY id DESC");
        session_start();
        return view('tables.tasks', ['gliphs'=> $gliphs, 'tests'=>$tests, 'table' => $res, 'tableNames' => $_SESSION['table'], 'title' => "Задания"]);
    }

    public function update(Request $req, $id){
        $valid = Validator::make($req->all(),[
            'text' => 'string|nullable',
            'a' => 'string|nullable',
            'b' => 'string|nullable',
            'c' => 'string|nullable',
            'd' => 'string|nullable',
            'id_gliphs' => 'numeric|nullable',
            'id_tests' => 'numeric|nullable'
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/tasks");
        }

        $table = "tasks";
        $forUpd = $req->except("_token", "id_tests");
        $sql = "UPDATE $table SET ";
        foreach ($forUpd as $key => $value) {
            if($value != null){
                $sql .= "$key = '$value', ";
            }
        }
        $sql .= ':';
        $sql = preg_replace('/, :/', ' ', $sql);
        $sql .= "WHERE id = $id;";
        if(!strpos($sql, ':W')){
            DB::update("UPDATE task_tests SET id_tests = $req->id_tests WHERE id_tasks = $id"); 
            DB::update($sql);
        }
        return redirect('admin/table/tasks');
    }

    public function store(Request $req){
        $valid = Validator::make($req->all(),[
            'text' =>  ['required','string'],
            'a' =>  ['required','string'],
            'b' =>  ['required','string'],
            'c' =>  ['required','string'],
            'd' =>  ['required','string'],
            'id_gliphs' =>  ['required','numeric'],
            'id_tests' =>  ['required','numeric'],
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/tasks");
        }

        $table = "tasks";
        $forUpd = $req->except("_token", "id_tests");
        $sql = "INSERT INTO $table (";
        foreach ($forUpd as $key => $value) {
            $sql .= "`$key`, ";
        }
        $sql .= ':';
        $sql = preg_replace('/, :/', ') ', $sql);
        $sql .= "VALUES (";
        foreach ($forUpd as $key => $value) {
            $sql .= "'$value', ";
        }
        
        $sql .= ':';
        $sql = preg_replace('/, :/', ');', $sql);
        DB::insert($sql);
        $id = DB::select("SELECT id FROM tasks WHERE id = (SELECT MAX(id) FROM tasks)");
        $id = $id[0]->id;
        DB::insert("INSERT INTO task_tests (`id_tasks`, `id_tests`) VALUE ($id,$req->id_tests)");
        return redirect('admin/table/tasks');
    }

    public function destroy($id){
        DB::table('task_tests')->where('id_tasks','=',$id)->delete();
        DB::table('tasks')->where('id','=',$id)->delete();
        return redirect('admin/table/tasks');
    }
}
