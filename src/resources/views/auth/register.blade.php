<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-[#f2ede4] py-12">
        
        <div class="w-full sm:max-w-md bg-white shadow-2xl overflow-hidden">
            
            <div class="bg-black text-center py-8 px-4">
                <p class="text-[10px] uppercase tracking-[3px] text-[#8c8444] mb-2 font-bold">Nueva cuenta</p>
                <h2 class="text-5xl font-serif text-[#c2bc8a] leading-tight italic">Registrarse</h2>
            </div>

            <div class="p-10">
                <x-validation-errors class="mb-4 text-xs" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-1">Nombre</label>
                        <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                               class="w-full border-none bg-[#d9d9d9] p-3 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                               placeholder="Tu nombre completo">
                    </div>

                    <div class="mb-5">
                        <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-1">Correo Electrónico</label>
                        <input type="email" name="email" :value="old('email')" required autocomplete="username"
                               class="w-full border-none bg-[#d9d9d9] p-3 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                               placeholder="usuario@correo.com">
                    </div>

                    <div class="mb-5">
                        <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-1">Contraseña</label>
                        <input type="password" name="password" required autocomplete="new-password"
                               class="w-full border-none bg-[#d9d9d9] p-3 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                               placeholder="........">
                    </div>

                    <div class="mb-8">
                        <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-1">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" required autocomplete="new-password"
                               class="w-full border-none bg-[#d9d9d9] p-3 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                               placeholder="........">
                    </div>

                    <button type="submit" 
                            class="w-full bg-[#c2bc8a] hover:bg-[#b5af7a] text-black font-bold py-4 px-4 flex justify-center items-center gap-3 transition-all duration-300 uppercase tracking-[3px] text-xs">
                        Crear Cuenta
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>

                    <div class="mt-8 text-center">
                        <p class="text-[10px] text-gray-500 tracking-[1px] uppercase">
                            ¿Ya tiene cuenta? 
                            <a href="{{ route('login') }}" class="text-[#8c8444] font-bold hover:underline ml-1">Iniciar Sesión</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>