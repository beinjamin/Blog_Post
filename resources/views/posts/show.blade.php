<x-layout title="{{ $post->title }}">
  
   <div class="space-y-10 md:space-y-16">
                {{-- Début du post --}}
                <article class="flex flex-col lg:flex-row pb-10 md:pb-16 border-b">
                    <div class="lg:w-5/12">
                        <img class="w-full max-h-72 object-cover lg:max-h-none lg:h-full" src="{{ $post -> thumbnail  }}">
                    </div>
                    <div class="flex flex-col items-start mt-5 space-y-5 lg:w-7/12 lg:mt-0 lg:ml-12">
                        <a href="" class="underline font-bold text-slate-900 text-lg">Catégorie</a>
                        <h1 class="font-bold text-slate-900 text-3xl lg:text-5xl leading-tight">{{ $post -> title }}</h1>
                        <ul class="flex flex-wrap gap-2">
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 1</a></li>
                            <li><a href="" class="px-3 py-1 bg-indigo-700 text-indigo-50 rounded-full text-sm">Tag 2</a></li>
                        </ul>
                        <p class="text-xl lg:text-2xl text-slate-600">

                            {!! nl2br (e($post->content)) !!}
                            
                        </p>
                        
                     <time class="text-xs text-slate-400" datatime="{{ $post -> created_at}}"> {{ $post -> created_at}}</time>

                    </div>
                </article>
                {{-- Fin du post --}}

               

            </div>
</x-layout>
       