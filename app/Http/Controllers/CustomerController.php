<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    // Muestra todos los clientes
    public function index()
    {
        $customers = Customer::all(); // Obtiene todos los clientes
        return view('customers.index', compact('customers'));
    }

    // Muestra el formulario para crear un nuevo cliente
    public function create()
    {
        return view('customers.create');
    }

    // Almacena un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dni' => 'required|string|max:255',
            'birthDate' => 'required|date', // Asegúrate de incluir esta línea
            'email' => 'required|email|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validación de la imagen
        ]);
    
        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->dni = $request->dni;
        $customer->birthDate = $request->birthDate; // Asigna el valor de birthDate
        $customer->email = $request->email;
    
        // Manejo de la imagen
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->photo->extension(); // Usa time() para generar un nombre único
            $request->photo->storeAs('photos', $filename, 'public'); // Almacena en storage/app/public/photos
            $customer->photo = 'photos/' . $filename; // Guarda solo la ruta relativa
        }
    
        $customer->save();
    
        return redirect()->route('customers.index')->with('success', 'Cliente creado con éxito.');
    }
    
    

    // Muestra los detalles de un cliente específico
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));    
    }

    // Muestra el formulario para editar un cliente existente
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    // Actualiza un cliente existente en la base de datos
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dni' => 'required|digits:8|unique:customers,dni,' . $customer->id,
            'birthDate' => 'required|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'anniversary' => 'nullable|date',
            'email' => 'required|email|unique:customers,email,' . $customer->id,
        ]);

        // Mantén la ruta de la imagen anterior
        $photoPath = $customer->photo;
        
        // Si hay una nueva foto, reemplaza la anterior
        if ($request->hasFile('photo')) {
            if ($photoPath) {
                Storage::disk('public')->delete($photoPath); // Elimina la imagen anterior
            }
            $photoPath = time() . '.' . $request->file('photo')->getClientOriginalExtension(); // Genera un nombre único
            $request->file('photo')->storeAs('photos', $photoPath, 'public'); // Almacena la nueva imagen
        }
    
        $customer->update($request->all() + ['photo' => $photoPath]);
    
        return redirect()->route('customers.index')->with('success', 'Cliente actualizado correctamente.');
    }

    // Elimina un cliente de la base de datos
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
