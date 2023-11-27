<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class ProductoController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $productos = productos::where('user_id', $id)->get();
        return view('productos.productos', compact('productos'));
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
}
