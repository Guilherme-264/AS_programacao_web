<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
    {
        $filme = Filme::all();
        return view('filme.index', compact('filme'));
    }
    
    public function create()
    {
        return view('filme.create');
    }
    
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect('filme')->with('success', 'Filme created successfully.');
    }
    
    public function edit($id)
    {
        $filme = Filme::findOrFail($id);
        return view('filme.edit', compact('filme'));
    }
    
    public function update(Request $request, $id)
    {
        $filme = Filme::findOrFail($id);
        $filme->update($request->all());
        return redirect('filme')->with('success', 'Filme updated successfully.');
    }
    
    public function destroy($id)
    {
        $filme = Filme::findOrFail($id);
        $filme->delete();
        return redirect('filme')->with('success', 'Filme deleted successfully.');
    }    
}
