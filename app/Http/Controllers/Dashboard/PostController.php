<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest; //El PutRequest nos ayuda a validar los datos
use App\Http\Requests\Post\StoreRequest; //El StoreRequest nos ayuda a validar los datos
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        ///Ejemplo Básico Compact
        // $posts = ['post1', 'post2', 'post3'];
        // return view('contact', ['name' => 'Andres', 'posts' => $posts]);  //Clave o key = name y el valor = Andres ////Clave o key = post y el valor = es la variable $post //La clave es la varaibale que colocamos en la vista
        // return view('contact', ['name' => 'Andres', compact('posts')]);  //Clave o key = name y el valor = Andres //////La clave es la varaibale que colocamos en la vista
        // return view('contact', ['posts' => $posts, 'categories' => $categories]);
        // return view('contact', compact('posts', 'categories'));  //Clave o key = name y el valor = Andres //////La clave es la varaibale que colocamos en la vista

        // session()->flush();
        // session(['key' => 'value']);
        // $posts = Post::get(); //El método get() me trae todos los registros de la BD de la tabla posts
        // dd($posts); //el dd ayuda a realizar Pruebas de verificación que si me está llegando la data a la  variable $posts

        $posts = Post::paginate(3); //El método paginate() me muestra los registros de la BD de la tabla posts por página
         // dd($posts);
        return view('dashboard/post/index', compact('posts')); //la función compact me envía la data a la vista index
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::get(); //con el método get traemos todas las categorías de la base de datos
        // dd($categories); //el dd ayuda a realizar Pruebas de traer infromación

        $categories = Category::pluck('id', 'title'); //con el método pluck traemos solo los campos id y title de la base de datos BD
        // dd($categories); //el dd ayuda a realizar Pruebas de traer infromación

        $post = new Post(); //Es un nuevo Post(no tare información de la base de datos) para poder utilizar el formulario _form.blade.php y hacer la inicialización //con el Post estamos creando una nueva instancia limpia; ya que no se está mapeando con nada de la base de datos
        // dd($post);
        // dd($post->title);

        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request) //El StorRequest nos ayuda a validar los datos
    {
        // Post::create($request->all());
        Post::create($request->validated()); //El validated nos ayuda a validar los datos

        return to_route('post.index')->with('status', 'Post created');  //Redirecciona hacia la página del index ////después del ->with es para mostrar mensaje de la acción; la llave es status y el valor es Post deleted
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return view('dashboard/post/show', compact('post'));
        return view('dashboard/post/show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //Aquí se pinta o se muestra el formulario
        $categories = Category::pluck('id', 'title');//con el método pluck traemos solo los campos id y title de la base de datos
        return view( 'dashboard.post.edit', compact('categories', 'post') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post) //El PutRequest nos ayuda a validar los datos que vienen del formulario
    {
        // dd(public_path());//Revisar carga de imagen en la carpeta pública
        // dd(public_path('upload/posts'));//Revisar carga de imagen en la carpeta pública
        //Llega la información del cliente; el $request


        // $post->update($request->validated());

        $data = $request->validated();
        // dd($request->image);
        //image
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();
            $request->image->move(public_path('uploads/posts'),$filename);
        }
        //image
        $post->update($data);
        return to_route('post.index')->with('status', 'Post updated'); //después del ->with es para mostrar mensaje de la acción; la llave es status y el valor es Post updated
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status', 'Post deleted'); //después del ->with es para mostrar mensaje de la acción; la llave es status y el valor es Post deleted
    }
}

