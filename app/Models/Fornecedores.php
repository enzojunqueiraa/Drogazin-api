<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome',
        'Contato',
        'CPF',
        'Email',
        'InscriçãoMunicipal',
        'País',
        'CNPJ',
        'Bairro',
        'Código',
        'Cidade',
        'WebSite',
    ];
}
