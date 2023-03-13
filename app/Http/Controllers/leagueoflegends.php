<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class leagueoflegends extends Controller
{
   //

   public function show()
   {
       // Obtener los datos de campeones e ítems de la API de Riot Games
       $champions = file_get_contents('https://ddragon.leagueoflegends.com/cdn/10.10.3216176/data/en_US/champion.json');
       $items = file_get_contents('https://ddragon.leagueoflegends.com/cdn/10.10.3216176/data/en_US/item.json');

       // Decodificar los datos JSON de campeones e ítems
       $champions = json_decode($champions);
       $items = json_decode($items);

       // Pasar los datos a la vista
       return view('leagueoflegends', compact('champions', 'items'));
   }

   
}
