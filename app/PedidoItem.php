<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    protected $fillable = ['quantidade', 'medida', 'quantidade_nomimal'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function ingrediente()
    {
        return $this->hasOne(Ingrediente::class);
    }
}
