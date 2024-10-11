<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Mostrar lista de empleados
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Mostrar formulario para crear un nuevo empleado
    public function create()
    {
        return view('employees.create');
    }

    // Guardar un nuevo empleado
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'salary' => 'required|numeric|min:0',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Empleado creado exitosamente.');
    }

    // Mostrar formulario para editar un empleado
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    // Actualizar un empleado
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'salary' => 'required|numeric|min:0',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    // Mostrar detalles de un empleado
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    // Eliminar un empleado
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Empleado eliminado exitosamente.');
    }
}
