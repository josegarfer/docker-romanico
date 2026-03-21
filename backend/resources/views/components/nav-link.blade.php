@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-amber-500 text-sm font-medium leading-5 text-amber-300 font-cinzel uppercase tracking-widest focus:outline-none focus:border-amber-400 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-stone-300 font-cinzel uppercase tracking-widest hover:text-amber-300 hover:border-stone-500 focus:outline-none focus:text-amber-300 focus:border-stone-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
