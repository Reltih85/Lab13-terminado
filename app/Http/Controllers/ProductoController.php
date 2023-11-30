<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Comentario;

class ProductoController extends Controller
{
    public function index()
        {
        $user = auth()->user();

        if ($user) {
        $id = $user->id;
        $productos = productos::where('user_id', $id)->get();
        return view('productos.productos', compact('productos'));
            } else {
        // Manejar el caso en que el usuario no está autenticado
        return redirect('/login'); // o cualquier otra acción que desees
            }
        }
    public function subirProducto(Request $request)
        {
            if ($request->hasFile('producto')){
                $id = auth()->user()->id;
                $image =$request->file('producto');
                $fileName = time() . '.'. $image->getClientOriginalExtension();
                Storage::disk('local')->put('/' . $fileName, file_get_contents($image));
                $producto = new productos;
                $producto->user_id =$id;
                $producto->nombre = $request->nombre;
                $producto->stock = $request->stock;
                $producto->descripcion = $request->descripcion;
                $producto->fecha_ingreso = $request->fecha_ingreso;
                $producto->precio_compra = $request->precio_compra;
                $producto->precio_venta = $request->precio_venta;
                $producto->ruta = $fileName;
                $producto->save();
                return redirect('/productos');

            }
        }
    public function mostrarProducto(string $ruta)
    {
        $file = Storage::disk('local')->get($ruta);
        return Image::make($file)->response();
    }
    public function eliminarProducto(Request $request)
{
    if ($request->id_producto){
        $producto = productos::find($request->id_producto);
        
        if ($producto) {
            // Elimina el archivo asociado al producto
            Storage::disk('local')->delete($producto->ruta);
            
            // Elimina el producto de la base de datos
            $producto->delete();

            return redirect('/productos');
        } else {
            // Manejo de error si el producto no se encuentra
            return redirect('/productos')->with('error', 'Producto no encontrado');
        }
    }
}
    public function subirComentario(Request $request)
    {
        if ($request->comentario){
            $id = auth()->user()->id;
            $comentario = new Comentario;
            $comentario->user_id = $id;
            $comentario->productos_id = $request->id_producto;
            $comentario->comentario = $request->comentario;
            $comentario->estado = 1;
            $comentario->save();
            return redirect('/home');
        }
    }


}
