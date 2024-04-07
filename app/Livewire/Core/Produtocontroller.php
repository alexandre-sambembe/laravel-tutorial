<?php

namespace App\Livewire\Core;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use Livewire\Component;

class Produtocontroller extends Component
{
    public $style = "border-gray-300 block dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 text-sm
                    focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500
                    dark:focus:ring-indigo-600 rounded-md shadow-sm  w-full";

    public array $data = ['nome' => '', 'quantidade' => '', 'ficha_tecnica' => '', 'ean' => '', 'categoria_id' => '', 'marca_id' => ''];

    public function render()
    {
        $marcas = Marca:: all();
        $categorias = Categoria::all();
        $produtos = Produto::orderBy('id', 'desc')->paginate(15);
        return view('livewire.core.produtocontroller', compact('produtos', 'marcas', 'categorias'));
    }

    public function salvarNovo()
    {
        Produto::create($this->data);

    }
}
