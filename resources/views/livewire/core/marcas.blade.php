<div>
    {{--    <form action="#">--}}
    {{--        <div>--}}
    {{--            <div class="mb-4">--}}
    {{--                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Designação</label>--}}
    {{--                <input id="name" placeholder="preencha a designacão" class="{{ $style }}" wire:model="data.designacao">--}}
    {{--            </div>--}}
    {{--            <div class="mb-4">--}}
    {{--                <label class="block dark:text-gray-400 text-sm mx-2" for="name">Detalhes</label>--}}
    {{--                <textarea id="name" placeholder="detalhes da categoria" class="{{ $style }}"--}}
    {{--                          wire:model="data.descricao"></textarea>--}}
    {{--            </div>--}}
    {{--            <button class="mt-1 active:bg-pink-600 font-bold uppercase text-xs px-4 py-2--}}
    {{--            rounded shadow  mr-1 dark:bg-gray-700 bg-gray-500 text-white--}}
    {{--            transition-all duration-150" type="button" wire:click="salvarNovo">--}}
    {{--                Novo--}}
    {{--            </button>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    <a href="{{ route('marcasforme') }}" class="mt-1 active:bg-pink-600 font-bold uppercase text-xs px-4 py-2
            rounded shadow  mr-1 dark:bg-gray-700 bg-gray-500 text-white
            transition-all duration-150" type="button" wire:navigate>Nova Marca </a>

    @foreach($marcas as $cat)

        <div class="bg-white">
            <div class="mx-auto max-w-7xl py-24 sm:px-6 sm:py-32 lg:px-8">
                <ul role="list" class="divide-y divide-gray-100">
                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                            <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                        </div>
                    </li>
                </ul>
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                    <svg viewBox="0 0 1024 1024"
                         class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                         aria-hidden="true">
                        <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                                fill-opacity="0.7"/>
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="#7775D6"/>
                                <stop offset="1" stop-color="#E935C1"/>
                            </radialGradient>
                        </defs>
                    </svg>
                    <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                           {{ $cat->designacao  }}
                            <br>
                            Start using our app today.
                        </h2>
                        <p class="mt-6 text-lg leading-8 text-gray-300">Ac euismod vel sit maecenas id pellentesque eu
                            sed consectetur. Malesuada adipiscing sagittis vel nulla.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                            <a href="#"
                               class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                                started</a>
                            <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endforeach







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

            @foreach($marcas as $cat)
                <tr class="text-gray-600 dark:text-gray-400 text-sm name2
                        odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50
                        even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $cat->designacao }}</td>
                    <td class="px-3 py-2">{{ $cat->descricao }}</td>
                    <td class="px-3 py-2">
                        <button wire:click="eliminar('{{$cat->id}}')" class="mt-1 active:bg-pink-600 font-bold uppercase text-xs px-4 py-2
                            rounded shadow  mr-1 dark:bg-gray-700 bg-gray-500 text-white
                            transition-all duration-150" type="button">delete </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $marcas->links() }}
    </div>
</div>
