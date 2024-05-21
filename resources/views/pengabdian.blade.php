<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-100 rounded-xl">
            <h1 class="text-3xl font-bold text-slate-800">Pengabdian</h1>
            <p class="mt-2 text-slate-600">Pengabdian Jurusan Teknik Informatika Universitas Halu Oleo</p>
        </div>
        <div class="w-full my-12 py-8 bg-slate-50 px-6 rounded-xl">
            <!-- Timeline -->
            <div class="w-full">
                @foreach ( $tridharmas as $p )
                <!-- Heading -->
                <div class="ps-2 my-2 first:mt-0">
                    <h3 class="text-xs font-medium uppercase text-slate-500 dark:text-neutral-400">
                        {{ $p["year"] }}
                    </h3>
                </div>
                <!-- End Heading -->
                @foreach ( $p["data"] as $item )
                <a href="{{ $item->file }}" class="flex gap-x-3 px-4 hover:bg-slate-200 rounded-xl transition-all duration-200" download>
                    <!-- Icon -->
                    <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-slate-400 dark:after:bg-neutral-700">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-slate-400 dark:bg-neutral-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->

                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <p class="flex gap-x-1.5 text-xs text-slate-600 dark:text-white items-center">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" x2="8" y1="13" y2="13"></line>
                                <line x1="16" x2="8" y1="17" y2="17"></line>
                                <line x1="10" x2="8" y1="9" y2="9"></line>
                            </svg>
                            {{ $item["file"] }}
                        </p>
                        <h3 class="mt-1 font-medium text-slate-800 dark:text-neutral-400">
                            {{ $item->title }}
                        </h3>
                        <button type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-slate-500 hover:bg-slate-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700">
                            <img class="flex-shrink-0 size-4 rounded-full" src="{{ $item->lecturer->image }}" alt="Image Description">
                            {{ $item->lecturer->name }}
                        </button>
                    </div>
                    <!-- End Right Content -->
                </a>
                @endforeach
                @endforeach

            </div>
            <!-- End Timeline -->
        </div>
    </section>

</x-layout>
