<?php namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Foto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation;

class FotografiaController extends Controller
{

    var $backImagesDirectory = "/../../../..";

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function storePhoto(Request $request)
    {
        $file = Input::file("foto");
        $dataUpload = array(
            "descripcion" => Input::get("descripcion"),
            "foto" => $file
        );
        $rules = array(
            'descripcion' => 'required|min:2|max:100',
            'foto'     => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'
        );
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya está registrado en el blog',
            'confirmed' => 'Los passwords no coinciden',
            'mimes' => 'Solo de admiten formatos de imagen jpeg,jpg,png,bmp,gif,svg'
        );
        $validation = \Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {
            $nombre = $this->generateRandomString() . "." . $file->getClientOriginalExtension();
            $user = new Foto();
            $user->descripcion = Input::get('descripcion');
            $user->foto = $nombre;
            $user->categoria = Input::get('categoria');
            if ($user->save()) {
                $file->move("media/galeria", $nombre);
                return Redirect::to('home')->with(array('confirm' => 'Se Registró la Fotografía ' . $user->descripcion . ' con éxito.'));
            }
        }
    }

    public function destroyPhoto(Request $request)
    {
        $id = $request->input('descripcion');
        $foto = Foto::find($id);
        if (unlink(__DIR__ .$this->backImagesDirectory."/public/media/galeria/" . $foto->foto)) {
            $nombre = $foto->descripcion;
            $foto->delete();
            return Redirect::to('home')->with(array('confirm' => 'Se Eliminó la Fotografía ' . $nombre . ' con éxito.'));
        } else {
            abort(404);
        }
    }
}
