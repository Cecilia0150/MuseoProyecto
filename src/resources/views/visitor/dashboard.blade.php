<x-app-layout>
    <div class="min-h-screen bg-[#f2ede4]">
        <div class="bg-black py-20 px-10 text-center">
            <p class="text-[#c2bc8a] text-[10px] uppercase tracking-[5px] mb-4">Exposición Actual</p>
            <h1 class="text-6xl font-serif text-white italic">Colección de Primavera</h1>
            <div class="w-24 h-1 bg-[#c2bc8a] mx-auto mt-6"></div>
        </div>

        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12 border-b border-black/10 pb-4">
                <h2 class="text-3xl font-serif text-black">Explorar <span class="italic text-[#8c8444]">Obras</span></h2>
                <p class="text-[11px] uppercase tracking-widest text-gray-500">Mostrando piezas destacadas</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-gray-200 overflow-hidden shadow-lg border-8 border-white mb-4 transition-transform duration-500 group-hover:scale-[1.02]">
                        <div class="w-full h-full bg-[#d9d9d9] flex items-center justify-center text-gray-400 italic">Imagen de la Obra</div>
                    </div>
                    <h3 class="font-serif text-xl text-black">Título de la Obra</h3>
                    <p class="text-[10px] uppercase tracking-widest text-[#8c8444] font-bold">Autor de la Obra</p>
                </div>

                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-gray-200 overflow-hidden shadow-lg border-8 border-white mb-4 transition-transform duration-500 group-hover:scale-[1.02]">
                         <div class="w-full h-full bg-[#d9d9d9] flex items-center justify-center text-gray-400 italic">Imagen de la Obra</div>
                    </div>
                    <h3 class="font-serif text-xl text-black">Nombre de la Pieza</h3>
                    <p class="text-[10px] uppercase tracking-widest text-[#8c8444] font-bold">Artista Invitado</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>