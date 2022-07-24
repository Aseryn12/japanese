<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class TestDBController extends Controller
{
    public function message(){
        return [
            'required' => 'Поле обязательно для заполнения',
            'string' => 'Поле должно содержать строку',
            'mimes' => 'Файл должен быть в формате jpg,png',
            'numeric' => 'Поле должно быть числом',
            'min' => 'Вопросов должно быть 1 или больше'
        ];
    }

    public function index(){
        $res = DB::select('SELECT tests.id, qwCount, theoryText, theoryTitle, imgTest FROM tests INNER JOIN theories ON id_theory = theories.id');
        session_start();
        return view('tables.tests', ['table' => $res, 'tableNames' => $_SESSION['table'], 'title' => "Тесты"]);
    }

    public function update(Request $req, $id){
        $valid = Validator::make($req->all(),[
            'theoryTitle' => 'string|nullable',
            'theoryText' => 'string|nullable',
            'qwCount' => 'numeric|nullable|min:1',
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/tests");
        }

        $forUpd = $req->except('_token');

        if(isset($forUpd['theoryTitle'])){
            $idT = DB::select("SELECT id_theory FROM tests WHERE `id` = $id");
            $idT = $idT[0]->id_theory;
            $t = $forUpd['theoryTitle'];
            DB::update("UPDATE theories SET `theoryTitle` = '$t' WHERE id = $idT");
        }

        if(isset($forUpd['theoryText'])){
            $idT = DB::select("SELECT id_theory FROM tests WHERE `id` = $id");
            $idT = $idT[0]->id_theory;
            $t = $forUpd['theoryText'];
            DB::update("UPDATE theories SET `theoryText` = '$t' WHERE id = $idT");
        }

        $table = "tests";
        if(isset($forUpd['imgTest'])){
            $img = url(Storage::url($req->file('imgTest')->store('/','public')));
            $forUpd['imgTest'] = $img;
        }

        $sql = "UPDATE $table SET ";
        foreach ($forUpd as $key => $value) {
            if($value != null && $key != 'theoryTitle' && $key != 'theoryText'){
                $sql .= "`$key` = '$value', ";
            }
        }
        $sql .= ':';
        $sql = preg_replace('/, :/', ' ', $sql);
        $sql .= "WHERE `id` = $id;";
        if(!strpos($sql, ':W')){
            DB::update($sql);
        }
        return redirect('admin/table/tests');
    }

    public function store(Request $req){
        $valid = Validator::make($req->all(),[
            'theoryTitle' => 'required|string',
            'theoryText' => 'required|string',
            'qwCount' => 'required|numeric|min:1',
            'imgTest' => 'required'
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/tests");
        }

        $table = "theories";
        $sql = "INSERT INTO $table (`theoryTitle`, `theoryText`) VALUES ('$req->theoryTitle', '$req->theoryText');";
        DB::insert($sql);
        $idp = DB::select("SELECT MAX(id) FROM $table;");
        foreach($idp[0] as $v){
            $id = $v;
        }
        $table = 'tests';
        $img = url(Storage::url($req->file('imgTest')->store('/','public')));
        $sql = "INSERT INTO $table (`qwCount`, `imgTest`, `id_theory`) VALUES ($req->qwCount, '$img', $id);";
        DB::insert($sql);
        return redirect('admin/table/tests');  
    }

    public function destroy($id){
        $idT = DB::table('tests')->find($id);
        DB::table('tests')->where('id','=',$id)->delete();
        DB::table('theories')->where('id','=',$idT->id_theory)->delete();
        return redirect('admin/table/tests');
    }
}
