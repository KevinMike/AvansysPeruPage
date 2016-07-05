<?php namespace App\Http\Controllers;

use App\Post;
use App\Curso;
use App\Foto;
use App\Preinscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Categoria;
use Illuminate\Validation;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    //*****Muestra la pagina de inicio del Panel de Control********
    public function index()
    {
        $post = Post::orderBy('id', 'DESC')->get();
        $foto = Foto::orderBy('id', 'DESC')->get();
        $categoria = Categoria::all();
        $curso = Curso::all();
        $preinscripciones = Preinscripcion::all();
        return view('home\home', ['post' => $post, 'curso' => $curso, 'foto' => $foto, 'categoria' => $categoria, 'preinscripciones' => $preinscripciones]);
    }


    //*********CURSOS***************

    public function add_curso(Request $request)
    {
        $file = Input::file("imagen_curso");
        $logo = Input::file("logo_curso");
        $rules = array(
            'imagen' => 'image'
        );
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya está registrado en el blog',
            'confirmed' => 'Los passwords no coinciden',
            'image' => 'El archivo no es una imagen',
            'mimes' => 'Solo de admiten formatos de imagen jpeg,jpg,png,bmp,gif,svg'
        );
        $validation = \Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {
            $var = Input::get('fecha_inicio');
            //$date = str_replace('/', '-', $var); remplaza los / por -
            $date = date('Y-m-d', strtotime($var));
            $curso = new Curso;
            $curso->nombre = Input::get('nombre');
            $curso->descripcion = Input::get('descripcion');
            $curso->frecuencia = Input::get('frecuencia');
            $curso->horario = Input::get('horario');
            $curso->fecha_inicio = $date;
            $curso->costo = Input::get('costo');
            $curso->duracion = Input::get('duracion');
            $curso->logo = $this->generateRandomString() . "." . $logo->getClientOriginalExtension();
            $logo->move("media/cursos/logos", $curso->logo);
            //$curso->save();
            if ($file) {
                $nombre = $this->generateRandomString() . "." . $file->getClientOriginalExtension();
                $curso->imagen_curso = $nombre;
                if ($curso->save()) {
                    $file->move("media/cursos", $nombre);
                    return Redirect::to('home')->with(array('confirm' => 'Se Registró el Curso ' . $curso->nombre . ' con éxito.'));
                }
            } else {
                if ($curso->save()) {
                    return Redirect::to('home')->with(array('confirm' => 'Se Registró el Curso ' . $curso->nombre . ' con éxito.'));
                }
            }
        }
    }

    //Muestra el formulario de edición
    public function r_update_curso(Request $request)
    {
        $curso = Curso::find($request->input('curso'));
        return view('home\update_curso', array('curso' => $curso));
    }

    public function update_curso(Request $request)
    {
        $file = Input::file("imagen_curso");
        $logo = Input::file("logo_curso");
        $rules = array(
            'imagen' => 'image'
        );
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya está registrado en el blog',
            'confirmed' => 'Los passwords no coinciden',
            'image' => 'El archivo no es una imagen',
            'mimes' => 'Solo de admiten formatos de imagen jpeg,jpg,png,bmp,gif,svg'
        );
        $validation = \Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {
            $var = Input::get('fecha_inicio');
            //$date = str_replace('/', '-', $var); remplaza los / por -
            $date = date('Y-m-d', strtotime($var));
            $curso = Curso::find($request->input('id'));
            $curso->nombre = Input::get('nombre');
            $curso->descripcion = Input::get('descripcion');
            $curso->frecuencia = Input::get('frecuencia');
            $curso->horario = Input::get('horario');
            $curso->fecha_inicio = $date;
            $curso->costo = Input::get('costo');
            $curso->duracion = Input::get('duracion');
            if ($logo) {
                unlink(__DIR__ . "/../../../../public/media/cursos/logos/" . $curso->logo);
                $curso->logo = $this->generateRandomString() . "." . $logo->getClientOriginalExtension();
                $logo->move("media/cursos/logos", $curso->logo);
            }
            if ($file) {
                if ($curso->save()) {
                    $nombre = $this->generateRandomString() . "." . $file->getClientOriginalExtension();
                    $curso_anterior = $curso->imagen_curso;
                    $curso->imagen_curso = $nombre;
                    if ($curso->save()) {
                        $file->move("media/cursos", $nombre);
                        if ($curso_anterior) {
                            unlink(__DIR__ . "/../../../../public/media/cursos/" . $curso_anterior);
                        }
                        return Redirect::to('home')->with(array('confirm' => 'Se Actualizó el Curso ' . $curso->nombre . ' con éxito.'));
                    }
                }
            } else {
                if ($curso->save()) {
                    return Redirect::to('home')->with(array('confirm' => 'Se Actualizó el Curso ' . $curso->nombre . ' con éxito.'));
                }
            }
        }
    }

    public function delete_curso(Request $request)
    {
        $id = $request->input('curso');
        $curso = Curso::find($id);
        $nombre = $curso->nombre;
        $foto = $curso->imagen_curso;
        unlink(__DIR__ . "/../../../../public/media/cursos/logos/" . $curso->logo);
        if ($foto) {
            if ($curso->delete()) {
                unlink(__DIR__ . "/../../../../public/media/cursos/" . $foto);
                return Redirect::to('home')->with(array('confirm' => 'Se Elimino el Curso ' . $nombre . ' con èxito.'));
            }
        } else {
            if ($curso->delete()) {
                return Redirect::to('home')->with(array('confirm' => 'Se Elimino el Curso ' . $nombre . ' con èxito.'));
            }
        }

    }


    //********PUBLICACIONES***************
    public function add_post(Request $request)
    {
        $file = Input::file("imagen");
        $rules = array(
            'imagen' => 'image'
        );
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya está registrado en el blog',
            'confirmed' => 'Los passwords no coinciden',
            'image' => 'El archivo no es una imagen',
            'mimes' => 'Solo de admiten formatos de imagen jpeg,jpg,png,bmp,gif,svg'
        );
        $validation = \Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {
            $post = new Post();
            $post->titulo = Input::get('titulo');
            //$post->texto = nl2br($request->input('texto'));
            $post->texto = Input::get('texto');
            if ($file) {
                $nombre = $this->generateRandomString() . "." . $file->getClientOriginalExtension();
                $post->imagen = $nombre;
                if ($post->save()) {
                    $file->move("media/posts", $nombre);
                    return Redirect::to('home')->with(array('confirm' => 'Se Registró la Publicación ' . $post->titulo . ' con éxito.'));
                }
            } else {
                if ($post->save()) {
                    return Redirect::to('home')->with(array('confirm' => 'Se Registró la Publicación ' . $post->titulo . ' con éxito.'));
                }
            }
        }
    }

    public function delete_post(Request $request)
    {
        $id = $request->input('post');
        $post = Post::find($id);
        $nombre = $post->titulo;
        $foto = $post->imagen;
        if ($foto) {
            if ($post->delete()) {
                unlink(__DIR__ . "/../../../../public/media/posts/" . $foto);
                return Redirect::to('home')->with(array('confirm' => 'Se Eliminó la Publicación ' . $nombre . ' con èxito.'));
            }
        } else {
            if ($post->delete()) {
                return Redirect::to('home')->with(array('confirm' => 'Se Eliminó la Publicación ' . $nombre . ' con èxito.'));
            }
        }
    }

    //Muestra el formulario de edicion
    public function r_update_post(Request $request)
    {
        $post = Post::find($request->input('post'));
        return view('\home\update_post', ['post' => $post]);
    }

    public function update_post(Request $request)
    {
        $file = Input::file("imagen");
        $rules = array(
            'imagen' => 'image'
        );
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'email' => 'El campo :attribute debe ser un email válido.',
            'max' => 'El campo :attribute no puede tener más de :min carácteres.',
            'unique' => 'El email ingresado ya está registrado en el blog',
            'confirmed' => 'Los passwords no coinciden',
            'image' => 'El archivo no es una imagen',
            'mimes' => 'Solo de admiten formatos de imagen jpeg,jpg,png,bmp,gif,svg'
        );
        $validation = \Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails()) {
            return Redirect::to('home')->withErrors($validation)->withInput();
        } else {
            $post = Post::find($request->input('id'));
            $post->titulo = Input::get('titulo');
            //$post->texto = nl2br($request->input('texto'));
            $post->texto = Input::get('texto');
            if ($file) {
                $nombre = $this->generateRandomString() . "." . $file->getClientOriginalExtension();
                $imagen_anterior = $post->imagen;
                $post->imagen = $nombre;
                if ($post->save()) {
                    $file->move("media/posts", $nombre);
                    if ($imagen_anterior) {
                        unlink(__DIR__ . "/../../../../public/media/posts/" . $imagen_anterior);
                    }
                    return Redirect::to('home')->with(array('confirm' => 'Se Actualizó la Publicación ' . $post->titulo . ' con éxito.'));
                }
            } else {
                if ($post->save()) {
                    return Redirect::to('home')->with(array('confirm' => 'Se Actualizó la Publicación ' . $post->titulo . ' con éxito.'));
                }
            }
        }
    }

    public function delete_preinscripcion(Request $request)
    {
        $id = $request->get('id');
        $preinscripcion = Preinscripcion::find($id);
        if ($preinscripcion->delete()) {
            return response()->json(['msg' => 'La Fila fue eliminada exitosamente', 'state' => 'Exito']);
        } else {
            return response()->json(['msg' => 'Ocurrio un Error, intenta nuevamente', 'state' => 'Error']);
        }
    }
}
