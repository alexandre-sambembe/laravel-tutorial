<div>
    <form action="#">
        <div>
            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Designação</label>
                <input id="name" placeholder="preencha a designacão" class="{{ $style }}" wire:model="data.designacao">
            </div>
            <div class="mb-4">
                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Detalhes</label>
                <textarea id="name" placeholder="detalhes da categoria" class="{{ $style }}" wire:model="data.descricao"></textarea>
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
                <td class="px-3 py-2 min-w-10">Designação</td>
                <td class="px-3 py-2">detalhes</td>
                <td class="px-3 py-2 "></td>
            </tr>
            </thead>
            <tbody class="">

            @foreach($categorias as $cat)
                <tr class="text-gray-600 dark:text-gray-400 text-sm name2
                        odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50
                        even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $cat->designacao }}</td>
                    <td class="px-3 py-2">{{ $cat->descricao }}</td>
                    <td class="px-3 py-2"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $categorias->links() }}
    </div>
</div>
