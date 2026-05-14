<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-[#f2ede4]">
        
        <div class="w-full sm:max-w-md bg-white shadow-lg overflow-hidden p-10 border border-gray-100">
            
            <div class="text-center mb-10">
                <p class="text-[10px] uppercase tracking-[3px] text-[#8c8444] font-bold mb-1">Bienvenido de regreso</p>
                <h2 class="text-4xl font-serif text-black leading-tight">Iniciar <span class="italic text-[#8c8444]">sesión</span></h2>
            </div>

            <x-validation-errors class="mb-4 text-xs" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-2">Correo Electrónico</label>
                    <input type="email" name="email" :value="old('email')" required autofocus 
                           class="w-full border-none bg-[#e5e7eb] p-4 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                           placeholder="usuario@correo.com">
                </div>

                <div class="mb-8">
                    <label class="block text-[11px] font-bold uppercase tracking-widest text-black mb-2">Contraseña</label>
                    <input type="password" name="password" required autocomplete="current-password"
                           class="w-full border-none bg-[#e5e7eb] p-4 text-gray-700 focus:ring-2 focus:ring-[#c2bc8a] outline-none" 
                           placeholder="........">
                </div>

                <button type="submit" 
                        class="w-full bg-[#c2bc8a] hover:bg-[#b5af7a] text-black font-bold py-4 px-4 flex justify-center items-center gap-3 transition-all duration-300 uppercase tracking-[2px] text-xs">
                    Ingresar
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>

                <div class="mt-10 text-center">
                    <p class="text-[11px] text-gray-500 uppercase tracking-wider">
                        ¿No tiene cuenta? 
                        <a href="{{ route('register') }}" class="text-[#8c8444] font-bold hover:underline ml-1">Regístrese aquí</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>