<x-layout>

    <x-title-page title="Tin tức" />
    <div>
        <div class="max-w-container mx-auto py-10">
            <h1 class="font-normal text-3xl pb-4">Tin tức</h1>
            <div class="grid grid-cols-3 gap-10">
                @foreach ($blogs as $blog)
                    <x-blog-item :$blog />
                    {{-- {{ $blog }} --}}
                @endforeach
            </div>
        </div>
    </div>
    <x-site-footer />
</x-layout>

