<?php namespace App\Http\Controllers;

use App\Categoria;
use Facebook\FacebookSession;
use Illuminate\Http\Request;
use App\Curso;
use App\Preinscripcion;
use App\Post;
use App\Foto;
use Illuminate\Support\Facades\Redirect;


class PageController extends Controller
{

	public function index()
	{
		$publicaciones = Post::orderBy('id', 'DESC')->paginate(4);
		return view('index', ["post" => $publicaciones]);
	}

	public function posts($id)
	{
		$post = Post::find($id);
		if(!$post)
		{
			abort(404);
		}
		$publicaciones = Post::orderBy('updated_at', 'DESC')->get();
		if ($publicaciones) {
			$longitud = count($publicaciones);
			$next=null;
			$previus=null;
			for($i=0;$i<$longitud;$i++)
			{
				if($i < $longitud-1)
				{
					if($publicaciones[$i+1]->id == $post->id)
					{
						$previus = $publicaciones[$i];
					}
				}
				if($i != 0)
				{
					if( $publicaciones[$i-1]->id==$post->id)
					{
						$next = $publicaciones[$i];
					}
				}
			}
			return view('posts', ["item" => $post,"next"=>$next,"previus"=>$previus]);
		} else {
			abort(404);
		}
	}
	public function curso_info($id)
	{
		$curso = Curso::find($id);
		if(!$curso)
		{
			abort(404);
		}
		$interes = ['Bajo', 'Medio', 'Alto'];
		return view('curso_info',array('curso'=>$curso,'interes'=>$interes));
	}

	public function contacto()
	{
		return view('contacto');
	}

	public function mapa()
	{
		return view('mapa');
	}

	public function cursos()
	{
		$curso = Curso::orderBy('fecha_inicio', 'ASC')->get();
		$interes = ['Bajo', 'Medio', 'Alto'];
		$cursos = Curso::all();
		return view('cursos', array('curso' => $curso,'interes'=>$interes,'cursos'=>$cursos));
	}

	public function fotos()
	{
		$fotos = Foto::all();
		$categorias = Categoria::all();
		return view('fotos', array("fotos" => $fotos, "categorias" => $categorias));
	}

	public function info()
	{
		return view('info');
	}

	public function preinscripcion()
	{
		$interes = ['Bajo', 'Medio', 'Alto'];
		$cursos = Curso::all();
		return view('preinscripcion', array("curso" => $cursos, "interes" => $interes));
	}

	public function guardar_preinscripcion(Request $request)
	{
		$preinscripcion = new Preinscripcion;
		$preinscripcion->dni = $request->input('dni');
		$preinscripcion->nombre = $request->input('nombre');
		$preinscripcion->apellido = $request->input('apellido');
		$preinscripcion->telefono = $request->input('telefono');
		$preinscripcion->email = $request->input('email');
		$preinscripcion->curso = $request->input('curso');
		$preinscripcion->interes = $request->input('interes');
		$preinscripcion->save();
		return Redirect::to('/');
	}

	public function practicas()
	{
		return view('practicas');
	}

	public function noticias()
	{
		$noticias = Post::orderBy('updated_at', 'DESC')->paginate(8);
		$noticias->setPath('/pagina/public/post');
		return view('noticias',array('noticias'=>$noticias));
	}
}
?>
