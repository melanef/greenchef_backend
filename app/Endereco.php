<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    protected $fillable = ['nome', 'logradouro', 'numero', 'bairro', 'cidade', 'uf', 'cep', 'padrao'];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function pedidos()
    {
        $this->belongsToMany(Pedido::class);
    }
}
