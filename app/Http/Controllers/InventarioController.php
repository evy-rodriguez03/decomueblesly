<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class InventarioController extends Controller
{
    // Vista principal del inventario
    public function index()
    {
        return view('inventario.principalinventario');
    }

    // Vista para agregar producto
    public function agregarProducto()
    {
        return view('inventario.agregar');
    }

    // Vista para rebajar producto
    public function rebajarProducto()
    {
        return view('inventario.rebajar');
    }

    // Vista para generar reporte de inventario
    public function reporteInventario()
    {
        $productos = Producto::all();
        return view('inventario.reporte', compact('productos'));
    }
}
