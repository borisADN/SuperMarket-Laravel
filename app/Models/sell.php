<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model

    
   {
    // Les attributs que vous pouvez remplir
         protected $fillable = ['product_name', 'category_id', 'quantity', 'price'];
   }

