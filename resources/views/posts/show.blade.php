<x-layout title="{{ $post->title }}">
  
   <div class="space-y-10 md:space-y-16">
                {{-- Début du post --}}
                <x-post :post="$post"  />

                {{-- Fin du post --}}

               

            </div>
</x-layout>
       