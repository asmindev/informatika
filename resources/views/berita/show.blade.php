<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="py-12 w-full flex flex-col md:flex-row gap-8">
            <div class="w-3/4">
                <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full h-96 object-cover">
                <div class="w-full font-medium text-xl text-gray-700">{{ $news->title }}</div>
                <div class="w-full text-sm text-slate-400">{{ $news->date }}</div>
                {!! $news->content !!}
            </div>
            <div class="w-1/4 divide-y">
                <div>
                    <div class="w-full font-medium text-xl text-gray-700">Terbaru</div>
                </div>
                @foreach ($latest as $last )
                <a href="/berita/{{ $last->id}}" class="text-sm hover:text-blue-500 py-2 block">
                    <div class="w-full">{{ $last->title }}</div>
                    <div class="w-full text-xs text-slate-400">{{ $last->date }}</div>
                </a>

                @endforeach
            </div>
        </div>
    </section>
</x-layout>
