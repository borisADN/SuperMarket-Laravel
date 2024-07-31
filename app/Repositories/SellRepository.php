<?php

namespace App\Repositories;

use App\Interfaces\SellInterface;
use App\Models\Sell;

class SellRepository implements SellInterface
{
    public function index()
    {
        return Sell::all();
    }

    public function show($id)
    {
        return Sell::findOrFail($id);
    }

    public function store(array $data)
    {
        return Sell::create($data);
    }

    public function update(array $data, $id)
    {
        return Sell::findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return Sell::destroy($id);
    }

    public function chartByCategory(){
        $data = Sell::select('category_id', 'name')
        ->selectRaw('COUNT(*) as count')
        ->groupBy('category_id', 'name')
        ->get();
    
        // Convertir la collection en tableau associatif
        $json_data = $data->toArray();
    
        $names = [];
        $count = [];
    
        // Préparer les noms et les comptes
        foreach ($json_data as $item) {
            $names[] = $item['name'];
            $count[] = $item['count'];
        }
    
        // Créer le graphique
        $chart = new SellChart; // Si la classe du graphique s'appelle SellChart
        $chart->labels($names);
        $chart->dataset("Ventes par Catégorie", "pie", $count)->options([
        'backgroundColor' => ['#046e24', "#dd4c09", "#0b7ad4", "#b20bd4", "#d1163e", "#178897", "#587512"],
        ]);

        return $chart;
    }  
}
