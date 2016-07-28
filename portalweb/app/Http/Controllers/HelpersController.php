<?php namespace App\Http\Controllers;

class Helper
{
    public static function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static  function validateImagen($file, $rules)
    {
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
        }
        else
        {
            return true;
        }
    }
}
