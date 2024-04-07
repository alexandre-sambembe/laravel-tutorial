<?php

namespace App\Livewire\Core;

use App\Models\Categoria;
use App\Models\Marca;
use Livewire\Component;

class CategoriaController extends Component
{

    public $style = "border-gray-300 block dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 text-sm
                    focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500
                    dark:focus:ring-indigo-600 rounded-md shadow-sm  w-full";

    public array $data = ['designacao' =>'', 'descricao' =>''];

    public function render()
    {
        $categorias = Categoria::orderBy('id', 'desc')->paginate(15);
        return view('livewire.core.categoria-controller' ,compact('categorias'));
    }
    public function salvarNovo()
    {
        Categoria::create($this->data);

    }
}
