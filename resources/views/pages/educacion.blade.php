<x-app-layout>
    <section>
        <div class="bg-cover container grid grid-cols-1 lg:grid-cols-2"style="background-image: url({{asset('img/pages/bg.jpg')}})">
            <div class="  text-white px-5 py-4 font-bold text-2xl">
                <h2>Educación</h2>
            </div>   
        </div>
        @livewire('educacion-index')
        <div id="button-up">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </div>
    </section>
</x-app-layout>