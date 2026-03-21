<x-app-layout>
    <x-slot name="header">
        <h2 class="font-cinzel font-bold text-xl text-amber-100 leading-tight tracking-widest uppercase">
            {{ __('Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-stone-200">
                <div class="p-8 text-center">
                    <p class="font-playfair text-stone-600 italic text-lg">{{ __("Bienvenido al Románico Palentino.") }}</p>
                    <a href="{{ route('dashboard') }}" class="btn-romanico mt-6 inline-flex">
                        Explorar monumentos
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
