<?php

namespace App\Livewire\Form;

use App\Models\Marca;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Marcas extends Component
{

    public $style = "border-gray-300 block dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 text-sm
                    focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500
                    dark:focus:ring-indigo-600 rounded-md shadow-sm  w-full";

    public array $data = ['designacao' => '', 'descricao' => ''];

    public function render()
    {
        return view('livewire.form.marcas');
    }
    public function salvarNovo()
    {
        Marca::create($this->data);
        return $this->redirect(route('marcas'));
    }
}
