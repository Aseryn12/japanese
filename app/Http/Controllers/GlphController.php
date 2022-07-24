<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class GlphController extends Controller
{
    public function message(){
        return [
            'required' => 'Поле обязательно для заполнения',
            'string' => 'Поле должно содержать строку',
            'mimes' => 'Поле должно быть следующего формата: jpg,jpeg,png'
        ];
    }

    public function index(){
        $res = DB::select('SELECT * FROM gliphs');
        session_start();
        return view('tables.gliphs', ['table' => $res, 'tableNames' => $_SESSION['table'], 'title' => "Иероглифы"]);
    }

    public function update(Request $req, $id){
        $forUpd = $req->except('_token');

        $valid = Validator::make($req->all(),[
            'latin' => 'string|nullable',
            'ciril' => 'string|nullable',
            'type' => 'string|nullable',
            'img' => 'nullable'
        ], $this->message());

        if($valid->fails()){
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/gliphs");
        }

        $table = "gliphs";
        
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
        return redirect('admin/table/gliphs');
    }

    public function store(Request $req){
        $valid = Validator::make($req->all(),[
            'latin' => ['required','string'],
            'ciril' => ['required','string'],
            'img' => ['required'],
            'type' => ['required','string']
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/gliphs");
        }

        $table = "gliphs";

        $img = url(Storage::url($req->file('img')->store('/','public')));
        $sql = "INSERT INTO $table (`img`, `latin`, `ciril`, `type`) VALUE ('$img', '$req->latin', '$req->ciril', '$req->type');";
        
        DB::insert($sql);
        return redirect('admin/table/gliphs');
    }

    public function destroy($id){
        DB::table('gliphs')->where('id','=',$id)->delete();
        return redirect('admin/table/gliphs');
    }
}
