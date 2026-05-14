<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-2xl text-[#8c8444] leading-tight italic">
            {{ __('Panel de Administración — Curador') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#f2ede4] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 shadow-md border-l-4 border-[#c2bc8a]">
                    <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Obras en Galería</p>
                    <span class="text-3xl font-serif text-black">24</span>
                </div>
                <div class="bg-white p-6 shadow-md border-l-4 border-black">
                    <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Visitantes Registrados</p>
                    <span class="text-3xl font-serif text-black">152</span>
                </div>
                <div class="bg-white p-6 shadow-md border-l-4 border-[#8c8444]">
                    <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Exposiciones Activas</p>
                    <span class="text-3xl font-serif text-black">3</span>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl border border-gray-100">
                <div class="p-6 sm:px-20 bg-black border-b border-gray-800 flex justify-between items-center">
                    <div class="text-2xl text-[#c2bc8a] font-serif uppercase tracking-widest">
                        Gestión de Inventario
                    </div>
                    <button class="bg-[#c2bc8a] hover:bg-[#b5af7a] text-black px-4 py-2 text-xs font-bold uppercase tracking-widest transition">
                        + Agregar Nueva Obra
                    </button>
                </div>

                <div class="bg-white p-8">
                    <p class="text-gray-600 font-light italic mb-4">Aquí aparecerá la lista de piezas artísticas del museo.</p>
                    <div class="border-t border-gray-100 pt-4">
                        <div class="flex justify-center py-10">
                            <span class="text-[#8c8444] opacity-50 font-serif text-lg">No hay obras registradas actualmente.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>