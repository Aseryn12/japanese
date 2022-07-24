<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use Codedge\Fpdf\Fpdf\Fpdf;

class UserController extends Controller
{
    public function message(){
        return [
            'string' => 'Поле должно содержать строку',
            'email' => 'Поле должно содержать e-mail',
            'unique' => 'Это значение уже занято'
        ];
    }

    public function index(){
        $users = DB::select("SELECT `id`, `logn`, `mail` FROM `users`");
        $achivs[0] = DB::table('user_achivs')->get()->countBy('id_users');
        $gliphs[0] = DB::table('user_gliphs')->get()->countBy('id_users');
        $tests[0] = DB::table('user_tests')->get()->countBy('id_users');
        $achivs[1] = DB::table('achivs')->count();
        $gliphs[1] = DB::table('gliphs')->count();
        $tests[1] = DB::table('tests')->count();
        session_start();
        return view('tables.users', ['table' => $users, 'tableNames' => $_SESSION['table'], 'achivs'=>$achivs, 'gliphs' => $gliphs, 'tests'=>$tests, 'title'=>'Пользователи']);
    }  

    public function update(Request $req, $id){
        $valid = Validator::make($req->all(),[
            'logn' => 'string|nullable|unique:users,logn',
            'mail' => 'string|email|nullable|unique:users,mail',
        ], $this->message());

        if($valid->fails()){
            session_start();
            $_SESSION['m'] = $valid->errors()->messages();
            return redirect("admin/table/users");
        }

        $table = "users";
        $forUpd = $req->except('_token');
        $sql = "UPDATE $table SET ";
        foreach ($forUpd as $key => $value) {
            if($value != null){
                $sql .= "$key = '$value', ";
            }
        }
        $sql .= ':';
        $sql = preg_replace('/, :/', ' ', $sql);
        $sql .= "WHERE id = $id;";
        DB::update($sql);
        return redirect("/admin/table/$table");   
    }

    public function destroy($id){
        DB::table('user_achivs')->where('id_users', '=', $id)->delete();
        DB::table('user_gliphs')->where('id_users', '=', $id)->delete();
        DB::table('user_tests')->where('id_users', '=', $id)->delete();
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('admin/table/users');
    }


    public function forPDF(Request $req,Fpdf $fpdf, $id){
        $fpdf = new Fpdf;

        date_default_timezone_set('UTC');

        $date = date("d.m.Y");
        $r = DB::select("SELECT `name` FROM `users` WHERE id = $id");
        if($r[0]->name){
            return redirect("/lichkab/logs");
        }

        DB::update("UPDATE `users` SET `name` = '$req->name', `surname` = '$req->surname', `patronim` = '$req->patronim' WHERE `id` = $id");

        $fullname = "";
        $fullname .= "$req->name ";
        $fullname .= "$req->surname";
        if($req->patronim){
            $fullname .= " $req->patronim";
        }

        $fullname = iconv('utf-8', 'windows-1251', $fullname);
        
        $ser = iconv('utf-8', 'windows-1251', "СЕРТИФИКАТ");
        $zag = iconv('utf-8', 'windows-1251', "Настоящим подтверждается, что");
        $prosh = iconv('utf-8', 'windows-1251', "Прошёл курс «Нихонго» по японскому языку");

        $place = iconv('utf-8', 'windows-1251', "Выдан NhonGo corp.");
        $forNum = iconv('utf-8', 'windows-1251', "Код сертификата ");
        $prdate = iconv('utf-8', 'windows-1251', 'Дата видачи: ');
        $number = rand(1000, 9999);

        $fpdf->AddFont('Arial','','arialmt.php',true);
        $fpdf->AddFont('Times','','timesnrcyrmt.php',true);
        $fpdf->SetFont('Times','',42);
        $fpdf->SetTextColor(255,255,255);
        $fpdf->SetDrawColor(239,51,64);
        $fpdf->SetFillColor(255,255,255);
        $fpdf->AddPage();

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/cPDF.png";
        $fpdf->Image($logoFile, 0, 0);

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/bgPDF.png";
        $fpdf->Image($logoFile, 0, 0);

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/rect.png";
        $fpdf->Image($logoFile, -150, -10);

        $fpdf->Ln(8);
        $fpdf->Cell(0, 15, $ser, 0, 1, 'C');
        $fpdf->Ln(40);
        $fpdf->SetFont('Arial','',18);
        $fpdf->Cell(0, 15, $zag, 0, 1, 'C');
        $fpdf->SetFont('Times','',22);
        $fpdf->Cell(0, 15, $fullname, 0, 1, 'C');
        $fpdf->SetFont('Arial','',18);
        $fpdf->Cell(0, 15, $prosh, 0, 1, 'C');
        $fpdf->Ln(100);
        $fpdf->Cell(0, 15, $place, 0, 1, 'L');
        $fpdf->Cell(0, 15,  "$prdate $date", 0, 1, 'L');
        $fpdf->Cell(0, 15, $forNum . $number, 0, 1, 'L');

        $fpdf->Output('certificate.pdf', 'D');
    }

    public function forPDFExist(Fpdf $fpdf, $id){
        $fpdf = new Fpdf;

        date_default_timezone_set('UTC');

        $date = date("d.m.Y");

        $req = DB::select("SELECT `name`, `surname`, `patronim` FROM `users` WHERE id = $id");
        $req = $req[0];

        $fullname = "";
        $fullname .= "$req->name ";
        $fullname .= "$req->surname";
        if($req->patronim){
            $fullname .= " $req->patronim";
        }

        $fullname = iconv('utf-8', 'windows-1251', $fullname);
        
        $ser = iconv('utf-8', 'windows-1251', "СЕРТИФИКАТ");
        $zag = iconv('utf-8', 'windows-1251', "Настоящим подтверждается, что");
        $prosh = iconv('utf-8', 'windows-1251', "Прошёл курс «Нихонго» по японскому языку");

        $place = iconv('utf-8', 'windows-1251', "Выдан NhonGo corp.");
        $forNum = iconv('utf-8', 'windows-1251', "Код сертификата ");
        $prdate = iconv('utf-8', 'windows-1251', 'Дата видачи: ');
        $number = rand(1000, 9999);

        $fpdf->AddFont('Arial','','arialmt.php',true);
        $fpdf->AddFont('Times','','timesnrcyrmt.php',true);
        $fpdf->SetFont('Times','',42);
        $fpdf->SetTextColor(255,255,255);
        $fpdf->SetDrawColor(239,51,64);
        $fpdf->SetFillColor(255,255,255);
        $fpdf->AddPage();

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/cPDF.png";
        $fpdf->Image($logoFile, 0, 0);

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/bgPDF.png";
        $fpdf->Image($logoFile, 0, 0);

        $logoFile = $_SERVER['DOCUMENT_ROOT']. "/img/rect.png";
        $fpdf->Image($logoFile, -150, -10);

        $fpdf->Ln(8);
        $fpdf->Cell(0, 15, $ser, 0, 1, 'C');
        $fpdf->Ln(40);
        $fpdf->SetFont('Arial','',18);
        $fpdf->Cell(0, 15, $zag, 0, 1, 'C');
        $fpdf->SetFont('Times','',22);
        $fpdf->Cell(0, 15, $fullname, 0, 1, 'C');
        $fpdf->SetFont('Arial','',18);
        $fpdf->Cell(0, 15, $prosh, 0, 1, 'C');
        $fpdf->Ln(100);
        $fpdf->Cell(0, 15, $place, 0, 1, 'L');
        $fpdf->Cell(0, 15,  "$prdate $date", 0, 1, 'L');
        $fpdf->Cell(0, 15, $forNum . $number, 0, 1, 'L');

        $fpdf->Output('certificate.pdf', 'D');
        return redirect("/http://japanese/lichkab/logs");
    }
}
