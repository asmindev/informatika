<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="py-12 w-full flex flex-col md:flex-row gap-8">
            <div class="w-3/4">
                <img src="{{ $achievment->image }}" alt="{{ $achievment->title }}" class="w-full h-96 object-cover">
                <div class="w-full font-medium text-xl text-gray-700">{{ $achievment->title }}</div>
                <div class="w-full text-sm text-slate-400">{{ $achievment->date }}</div>
                {!! $achievment->description !!}
            </div>
        </div>
    </section>
</x-layout>
