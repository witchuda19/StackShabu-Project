<?php

namespace App\Http\Controllers;
use App\Models\Shabu;

use Illuminate\Http\Request;

class ShabuController extends Controller
{
    
    public function index() {
        $data['shabus'] = Shabu::orderBy('id', 'asc')->paginate(5);
        return view('shabus.index', $data);
    }

    public function create() {
        return view('shabus.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $shabu = new Shabu;
        $shabu->name = $request->name;
        $shabu->email = $request->email;
        $shabu->phone = $request->phone;
        $shabu->save();
        return redirect()->route('shabus.index')->with('success', 'Shabu has been created successfully.');
    }

    public function edit(Shabu $shabu) {
        return view('shabus.edit', compact('shabu'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $shabu = Shabu::find($id);
        $shabu->name = $request->name;
        $shabu->email = $request->email;
        $shabu->phone = $request->phone;
        $shabu->save();
        return redirect()->route('shabus.index')->with('success', 'Shabu has been updated successfully.');
    }

    public function destroy(Shabu $shabu) {
        $shabu->delete();
        return redirect()->route('shabus.index')->with('success', 'Shabu has been deleted successfully.');
    }


}
