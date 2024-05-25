<x-layout>
            
    <div class="space-y-10 md:space-y-16">

            @foreach ($posts as $post )
            <x-post :post="$post" :list="true" />

                @endforeach
                {{ $posts -> links() }}

            </div>
</x-layout>