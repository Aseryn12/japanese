<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class AchivController extends Controller
{

    public function message(){
        return [
            'required' => 'Поле обязательно для заполнения',
            'string' => 'Поле должно содержать строку',
            'mimes' => 'Поле должно быть следующего формата: jpg,jpeg,png,svg'
        ];
    }

    public function index(){
        $res = DB::select('SELECT * FROM achivs');
        session_start();
        return view('tables.achivs', ['table' => $res, 'tableNames' => $_SESSION['table'], 'title' => "Достижения"]);
    }

    public function update(Request $req, $id){
        $valid = Validator::make($req->all(),[
            'name' => 'string|nullable',
            'cond' => 'string|nullable',
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/achivs");
        }

        $table = 'achivs';
        $forUpd = $req->except('_token');

        if(isset($forUpd['img'])){
            $img = url(Storage::url($req->file('img')->store('/','public')));
            $forUpd['img'] = $img;
        }

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
            DB::update($sql);
        }
        return redirect('admin/table/achivs'); 
    }

    public function store(Request $req){
        $valid = Validator::make($req->all(),[
            'name' => ['required','string'],
            'cond' => ['required','string'],
            'img' => ['required']
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/achivs");
        }

        $table = 'achivs';

        $img = url(Storage::url($req->file('img')->store('/','public')));
        $sql = "INSERT INTO $table (`name`,`cond`,`img`) VALUES ('$req->name','$req->cond','$img')";

        DB::insert($sql);
        return redirect('admin/table/achivs');
    }

    public function destroy($id){
        DB::table('achivs')->where('id','=',$id)->delete();
        return redirect('admin/table/achivs');
    }
}
