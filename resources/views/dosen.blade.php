<x-layout>
    <section class="w-full md:w-10/12 lg:w-8/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-50 rounded-xl">
            <h1 class="text-3xl font-bold">Dosen Teknik Informatika</h1>
            <p class="text-slate-600 mt-2">Dosen Pengajar di Jurusan Teknik Informatika</p>
        </div>
        <div class="py-12 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-fr">
            @foreach ($lecturers as $lecturer)
            <div class="w-full relative h-72 rounded-t-xl overflow-hidden">
                <img src="{{ $lecturer->image }}" alt="{{ $lecturer->name }}" class="w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-black via-black/80 to-transparent">
                    <div class="w-full h-full flex flex-col justify-end p-4">
                        <div class="text-center">
                            <h1 class="text-white font-medium">{{ $lecturer->name }}</h1>
                            <h3 class="text-blue-400 text-sm">{{ $lecturer->skill }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    </div>
</x-layout>
