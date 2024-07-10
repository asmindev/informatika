<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-50 rounded-xl">
            <h1 class="text-3xl font-bold">Berita Teknik Informatika</h1>
            <p class="text-slate-600 mt-2">Berita terbaru di Jurusan Teknik Informatika</p>
        </div>
        <div class="py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 auto-rows-fr">
            @foreach ($news as $n)
            <a href="/berita/{{ $n->id }}" class="w-full h-fit rounded-xl overflow-hidden border border-slate-200">
                <img src="{{ $n->image }}" alt="{{ $n->title }}" class="w-full h-72 object-cover">
                <div class="w-full h-full">
                    <div class="py-6 px-4">
                        <div class="w-full flex justify-between">
                            <h1 class="text-slate-800 font-medium text-lg">{{ $n->title }}</h1>
                            <h2 class="text-slate-600 text-sm">{{ $n->date }}</h2>
                        </div>
                        <h3 class="text-slate-600 text-sm line-clamp-2">{!! $n->content !!}</h3>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</x-layout>
