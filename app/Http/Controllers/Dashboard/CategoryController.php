<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::get();
        $categories = Category::paginate(3);
        // dd($categories);
        return view('dashboard.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Category();  ///Debí colocar ésta linea para que me funcione el formulario de cargar ya  que realiza una inicialización de un objeto
        // dd($category->title);
        return view('dashboard.category.create', compact('category')); ///Debí colocar el compact para que me funcione el formulario de cargar
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    public function store(StoreRequest $request)
    {
        // dd('Ingreso');

        //Validaciones
        // $request->validate([
        //     'title' => 'required|min:5|max:500',
        //     'slug' => 'required|min:5|max:500'
        // ]);

        //Crear data a la BD
        // Category::create($request->all()); //también me sirve para enviar la data a la BD
        Category::create($request->validated()); //nos da los datos validados para enviar la data a la BD

        //me sirve para enviar la data a la BD
        // Category::create([
        //     'title' => $request->all()['title'], //La llave o Key = title y el valor es el title que está después del request
        //     'slug' => $request->all()['slug'] //La llave o Key = slug y el valor es el slug que está después del request
        // ]);

        // dd(request()->get('title'));
        // dd($request->all());
        // dd($request->all()['title']);
        return to_route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // return view('dashboard.category.show', compact('category'));
        return view('dashboard.category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        // $category->update($request->validated());
        //Image
        // dd(public_path('upload/categories'));
        $data = $request->validated();
        // dd($request->image);
        if( isset($data['image']) ) {
            $data['image'] = $filename = time().".".$data['image']->extension(); //el la función time() es para que la imagen quede con un nombre random osea aleatorio. La variable $filename es una variable que no existe y para realizar una asignación multiple

            $request->image->move(public_path("uploads/categories"), $filename);
        }
        ///End Image

        // $category->update($request->validated());
        $category->update($data);
        return to_route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('category.index');
    }
}
