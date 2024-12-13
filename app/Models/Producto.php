<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio',
        'stock',
        'categoria_id'
    ];

    //RELACIÓN INVERSA CATEGORIA PRODUCTO
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}
