<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;

class ReceiptController extends Controller
{
    public function buy()
    {
        $files = File::orderBy('created_at', 'DESC')->paginate(30);
        return view('admin.receipt.buy', ["files" => $files]);
    }
    public function income()
    {
        return view('admin.receipt.income');
    }


    public function upload_buy()
    {
        $path = public_path() . "\\uploads\\";
        $file_name = $_FILES["fileUpload"]["name"];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name = explode(".", $file_name);
        $file_name = $file_name[0];
        $file_name_to_save = basename($file_name) . "_" . md5(time()) . "." . $ext;
        $target_file = $path . $file_name_to_save;

        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            $data = new \App\File();
            $data->name = $file_name_to_save;
            $data->user_id = \Auth::user()->id;
            $data->save();

            echo json_encode(array("success" => true, "message" => "O  arquivo '". basename( $_FILES["fileUpload"]["name"]). "' foi carregado com sucesso."));
            die();
        } else {
            echo json_encode(array("success" => false, "message" => "Ops, ocorreu algum problema ao carregar o arquivo."));
            die();
        }
    }
}
