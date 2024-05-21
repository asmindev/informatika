<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-50 rounded-xl">
            <h1 class="text-3xl font-bold">Fasilitas</h1>
            <p class="text-slate-600 mt-2">Fasilitas yang tersedia di Jurusan Teknik Informatika</p>
        </div>
        <div class="py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 auto-rows-fr">
            @foreach ($facilities as $facility)
            <div class="bg-white p-4 rounded-lg border border-slate-200">
                <img src="{{ $facility->photo }}" alt="{{ $facility->name }}" class="w-full h-64 object-cover rounded-lg">
                <div class="flex justify-between items-center">

                    <h2 class="text-lg font-bold mt-4">{{ $facility->name }}</h2>
                    <span class="block text-orange-600 mt-2 capitalize bg-orange-100 py-0.5 px-2 text-xs rounded-full">{{ $facility->type }}</span>
                </div>
                <p class="text-slate-600 mt-2">{{ $facility->description }}</p>
            </div>
            @endforeach
    </section>

    </div>
</x-layout>
