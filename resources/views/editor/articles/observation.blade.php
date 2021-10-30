<x-editor-layout :article="$article">
    <h3 class="text-center text-2lx font-bold">OBSERVACIONES DEL ARTÍCULO</h3>
    <hr class="mt-2 mb-6">
    <div class="text-gray-500 px-3">
        {!!$article->observation->body!!}
    </div>
</x-editor-layout>