<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('admin.department_system', compact('departments'));
    }
    public function create(){
        return view('admin.create_department');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:departments,name',
        ]);

        Department::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.department')
            ->with('success', 'Department created successfully.');
    }

    public function edit($id){
        $departments = Department::findOrfail($id);

        return view('admin.edit_department', compact('departments'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
        ]);

        $department = Department::findOrfail($id);
        $department->update([
            'name' => $request->name,
        ]); 

        return redirect()->route('admin.department')
            ->with('success', 'Department updated successfully.');
    }

    public function destroy($id){
        $department = Department::findOrfail($id);
        $department->delete();

        return redirect()->route('admin.department')
            ->with('success', 'Department deleted successfully.');
    }
}
