@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-amber-500 text-start text-sm font-medium text-amber-300 bg-stone-900/50 font-cinzel uppercase tracking-wide focus:outline-none focus:text-amber-200 focus:bg-stone-900 focus:border-amber-400 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-sm font-medium text-stone-300 hover:text-amber-300 hover:bg-stone-900/50 hover:border-stone-500 font-cinzel uppercase tracking-wide focus:outline-none focus:text-amber-300 focus:bg-stone-900/50 focus:border-stone-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
