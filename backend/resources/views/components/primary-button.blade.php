<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-amber-700 border border-amber-900 rounded-md font-cinzel font-semibold text-xs text-white uppercase tracking-widest hover:bg-amber-800 active:bg-amber-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow']) }}>
    {{ $slot }}
</button>
