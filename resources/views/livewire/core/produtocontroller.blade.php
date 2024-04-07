<div>
    <form action="#">
        <div>
            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Nome</label>
                <input id="name" placeholder="preencha o nome" class="{{ $style }}" wire:model="data.nome">
            </div>
            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Ean</label>
                <input id="name" placeholder="preencha o ean" class="{{ $style }}" wire:model="data.ean">
            </div>
            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Qauntidade</label>
                <input id="name" placeholder="preencha o nome" type="number" class="{{ $style }}" wire:model="data.quantidade">
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Categoria</label>

                <select id="name" placeholder="preencha o nome" class="{{ $style }}" wire:model="data.categoria_id">
                    @foreach($categorias as $attr)
                        <option value="{{$attr->id }}">{{$attr->designacao}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Marca</label>

                <select id="name" placeholder="preencha o nome" class="{{ $style }}" wire:model="data.marca_id">
                    @foreach($marcas as $attr)
                    <option value="{{$attr->id }}">{{$attr->designacao}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Ficha</label>
                <textarea id="name" placeholder="Prenche a ficaha tecnica" class="{{ $style }}" wire:model="data.ficha_tecnica"></textarea>
            </div>
            <button class="mt-1 active:bg-pink-600 font-bold uppercase text-xs px-4 py-2
            rounded shadow  mr-1 dark:bg-gray-700 bg-gray-500 text-white
            transition-all duration-150" type="button" wire:click="salvarNovo">
                Novo
            </button>
        </div>
    </form>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-full">

            <thead class="text-xs text-white uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-xs">
                <td class="px-3 py-2 min-w-10">Nome</td>
                <td class="px-3 py-2">QT</td>
                <td class="px-3 py-2 ">Ficha</td>
                <td class="px-3 py-2">Ean13</td>
                <td class="px-3 py-2 "></td>
                <td class="px-3 py-2"></td>
                <td class="px-3 py-2 ">acção</td>
            </tr>
            </thead>
            <tbody class="">

            @foreach($produtos as $cat)
                <tr class="text-gray-600 dark:text-gray-400 text-sm name2
                        odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50
                        even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $cat->nome }}</td>
                    <td class="px-3 py-2">{{ $cat->quantidade }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $cat->ficha_tecnica }}</td>
                    <td class="px-3 py-2">{{ $cat->ean }}</td>
                    <td class="px-3 py-2">{{ ''}}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ ''}}</td>
                    <td class="px-3 py-2"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $produtos->links() }}
    </div>
</div>

