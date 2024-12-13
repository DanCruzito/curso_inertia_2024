<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    //RELACIÓN UNO A MUCHOS CATEGORIA - PRODUCTOS
    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class);
    }

    
}
