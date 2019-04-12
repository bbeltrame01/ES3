<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;

class ReceiptController extends Controller
{
    public function buy()
    {
        return view('admin.receipt.buy');
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
        $target_file = $path . basename($file_name) . "_" . md5(time()) . "." . $ext;

        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            $data = new \App\File();
            $data->name = $target_file;
            $data->user_id = \Auth::user()->id;
            $data->save();

            echo json_encode(array("success" => true, "message" => "The file '". basename( $_FILES["fileUpload"]["name"]). "' has been uploaded."));
            die();
        } else {
            echo json_encode(array("success" => false, "message" => "Sorry, there was an error uploading your file."));
            die();
        }
    }
}
