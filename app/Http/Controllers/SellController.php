<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell; // Assurez-vous que le modèle Sell est importé correctement

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sells = Sell::all();

        // Passer la variable $sells à la vue
        return view('sells.index', compact('sells'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sells.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Sell::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('sells.create')->with('success', 'Vente ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implémentation si nécessaire
    }

    /**
     * Show the form for editing the specified resource.
     */
    
        public function edit($id)
    {
        $sell = Sell::findOrFail($id);
        return view('sells.edit', compact('sell'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $sell = Sell::findOrFail($id);
        $sell->update($request->all());

        return redirect()->route('sells.index')->with('success', 'Vente mise à jour avec succès!');
    }
    

   

    public function delete(Sell $sell)
    {
        // Passer la variable $sell à la vue
        return view('sells.delete', compact('sell'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sell $sell)
    {
        $sell->delete();
        return redirect()->route('sells.index')->with('success', 'Vente supprimée avec succès!');
    }
}
use App\Models\Sell;

class SellController extends Controller
{
    public function index()
    {
        $sells = Sell::all();
        return view('sells.index', compact('sells'));
    }

    public function show($id)
    {
        $sell = Sell::findOrFail($id);
        return view('sells.show', compact('sell'));
    }
}
