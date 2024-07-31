<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sell extends Model

    
   {
    // Les attributs que vous pouvez remplir
         protected $fillable = ['product_name', 'category_id', 'quantity', 'price'];
   }

