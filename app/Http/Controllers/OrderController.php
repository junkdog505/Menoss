<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Mostrar lista de pedidos
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Mostrar formulario para crear un nuevo pedido
    public function create()
    {
        return view('orders.create');
    }

    // Guardar un nuevo pedido
    public function store(Request $request)
    {
        $request->validate([
            'customerID' => 'required|exists:customers,id',
            'productID' => 'required|exists:products,productID',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Pedido creado exitosamente.');
    }

    // Mostrar formulario para editar un pedido
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    // Actualizar un pedido
    public function update(Request $request, $id)
    {
        $request->validate([
            'customerID' => 'required|exists:customers,id',
            'productID' => 'required|exists:products,productID',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    // Mostrar detalles de un pedido
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    // Eliminar un pedido
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}
