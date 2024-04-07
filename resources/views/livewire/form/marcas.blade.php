<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="#">
                        <div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Designação</label>
                                <input id="name" placeholder="preencha a designacão" class="{{ $style }}"
                                       wire:model="data.designacao">
                            </div>
                            <div class="mb-4">
                                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Detalhes</label>
                                <textarea id="name" placeholder="detalhes da categoria" class="{{ $style }}"
                                          wire:model="data.descricao"></textarea>
                            </div>
                            <button class="mt-1 active:bg-pink-600 font-bold uppercase text-xs px-4 py-2
            rounded shadow  mr-1 dark:bg-gray-700 bg-gray-500 text-white
            transition-all duration-150" type="button" wire:click="salvarNovo">
                                Novo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
