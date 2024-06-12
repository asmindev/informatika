<x-layout>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[90vh] flex flex-col justify-center items-center">
        <div class="w-full h-full flex flex-col-reverse gap-y-12 md:flex-row items-stretch">
            <div class="w-full md:w-2/3 min-h-full flex items-end">
                <div class="w-full flex flex-col gap-y-2 mb-16">
                    <h2 class="text-xl md:text-5xl font-bold md:font-extrabold text-gray-700">Selamat Datang di Jurusan</h2>
                    <h1 class="text-4xl md:text-7xl font-bold md:font-extrabold text-orange-500">Teknik Informatika</h1>
                    <h3 class="text-xl font-semibold text-gray-700">Fakultas Teknik, Universitas Haluoleo, Kendari</h3>
                    <div class="mt-8 w-full md:w-10/12 flex items-center gap-12">
                        <button type="button" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-2xl">Jelajahi</button>
                        <div class="flex items-center gap-x-8">
                            <div class="">
                                <h1 class="text-3xl md:text-4xl font-bold text-gray-600">{{ $alumniesTotal }}</h1>
                                <h3 class="text-sm text-gray-800">Total Alumni</h3>
                            </div>
                            <div class="">
                                <h1 class="text-3xl md:text-4xl font-bold text-gray-600">{{ $receptionsTotal }}</h1>
                                <h3 class="text-sm text-gray-800">Total Mahasiswa</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-full md:w-1/3 md:scale-110 h-full rounded-full overflow-hidden">
                <div class="relative w-full h-full md:p-10 before:md:absolute before:bg-indigo-600/50 before:w-full before:h-full before:blur-xl after:absolute after:bg-red-600 after:w-full after:h-12 after:left-0 after:bottom-24 after:-z-10">
                    <div class="relative w-full border-b border-orange-600 rounded-full overflow-hidden h-[22rem] before:absolute before:bg-indigo-500 before:bottom-0 before:w-full before:h-2/6 before:md:h-1/2 before:blur-xl">
                        <img src="{{ asset('assets/avatar.png') }}" alt="Avatar" class="w-full md:h-full absolute bottom-0 object-cover">
                    </div>
                </div>
            </div>
        </div>
        <div class="relative z-50 mt-12 w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <a href="#" class="w-full block h-full bg-gradient-to-br from-pink-400 to-pink-600 rounded-3xl p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-pink-400 rounded-full p-2 size-12 text-pink-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">Monitoring Perkuliahan</h3>
                </div>
            </a>

            <a href="https://ta.ti.eng.uho.ac.id" target="_blank" class="w-full h-full bg-gradient-to-br from-lime-400 to-lime-600 rounded-3xl p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-lime-400 rounded-full p-2 size-12 text-lime-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">Sistem Monitoring TA</h3>
                </div>
            </a>
            <a href="#" class="w-full h-full bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-3xl p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-cyan-400 rounded-full p-2 size-12 text-cyan-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />

                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">Sistem Evaluasi Kepuasan</h3>
                </div>
            </a>
            <a href="#" class="w-full h-full bg-gradient-to-br from-violet-400 to-violet-600 rounded-3xl p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-violet-400 rounded-full p-2 size-12 text-violet-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">E-Library</h3>
                </div>
            </a>
            <a href="https://ojs.uho.ac.id/index.php/semantik" target="_blank" class="w-full h-full bg-gradient-to-br from-orange-400 to-orange-600 rounded-3xl p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-orange-400 rounded-full p-2 size-12 text-orange-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">Jurnal Semantik</h3>
                </div>
            </a>
            <a href="https://animator.uho.ac.id" target="_blank" class="w-full h-full bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-3xl p-4">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bg-emerald-400 rounded-full p-2 size-12 text-emerald-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />

                </svg>
                <div>
                    <h3 class="text-lg font-bold text-white">Jurnal Animator</h3>
                </div>
            </a>
        </div>
    </section>
    <section class="relative bg-blue-100 w-full">
        <div class="absolute -top-40 w-full h-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="fill-blue-100" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,122.7C384,117,480,139,576,160C672,181,768,203,864,181.3C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
        <div class="px-4 -mt-24 w-full md:w-11/12 lg:w-10/12 mx-auto pb-12 min-h-[50vh] md:min-h-[80vh] flex items-center">
            <div class="mt-64 w-full flex justify-between items-center flex-col md:flex-row">
                <div class="w-full md:w-1/2 relative rounded-full overflow-hidden after:absolute after:bg-indigo-500 after:bottom-0 after:w-full after:h-12 after:left-1/2  before:absolute before:bg-orange-600 before:bottom-12 before:w-full before:h-24 before:md:h-32">
                    <img class="w-full h-full object-cover scale-150" src="{{ asset('assets/file.png') }}" alt="banner">
                    <div class="z-50 absolute bg-black/50 backdrop-blur-md w-full h-24 md:h-40  bottom-0 left-0">
                        <div class="w-full h-full flex justify-center items-center flex-col">
                            <h1 class="text-lg md:text-3xl font-bold text-white">Isnawaty, S.Si., M.T</h1>
                            <h3 class="text-xs md:text-md text-slate-50">Ketua Jurusan Teknik Informatika</h3>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-justify">
                    <div class="hidden md:block">

                        <h1 class=" text-lg md:text-3xl font-bold ">Isnawaty, S.Si., M.T</h1>
                        <h3 class=" text-xs md:text-md ">Ketua Jurusan Teknik Informatika</h3>
                    </div>
                    <article class=" text-slate-700 mt-8 flex flex-col gap-y-6">
                        <p>
                            Program Studi S1 Teknik Informatika Universitas Halu Oleo adalah salah satu jurusan yang berada di Universitas Halu Oleo. Program Studi Teknik Informatika UHO merupakan bagian dari Fakultas Teknik Universitas Halu Oleo sejak dari tahun 2007 serta hingga saat ini didukung oleh 19 tenaga pengajar dengan kualifikasi lulusan dari universitas – universitas ternama yang berada di Indonesia.
                        </p>
                        <p>
                            Selain itu, telah banyak memiliki prestasi yang diraih oleh mahasiswa IT UHO baik tingkat daerah maupun tingkat nasional seperti GEMASTIK, Socio Technopreneur Campus (STC), Kompetisi Debat Mahasiswa Indonesia (KDMI), serta berbagai prestasi lainnya baik di bidang akademik maupun non akademik. Hingga saat ini, Teknik Informatika UHO memiliki tiga bidang minat studi yakni Rekayasa Perangkat Lunak (RPL), Komputasi Cerdas dan Visualisasi (KCV), serta Komputasi Berbasis Jaringan (KBJ).
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Dosen</h1>
        </div>
        <div id="image-slider" class="splide w-full" aria-label="Dosen IT">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($lecturers as $lecturer)
                    <li class="splide__slide">
                        <div class="p-4">
                            <img src="{{  $lecturer->image }}" class="w-full h-40 md:h-56 object-cover">
                            <div class="mt-2 mb-4">
                                <h1 class="text-sm md:text-base font-bold">{{ $lecturer->name }}</h1>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Prestasi</h1>
        </div>
        <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($achievments as $achievment)
            <li>
                <a href="/prestasi/{{ $achievment->id }}" target="_blank" class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                    <img src="{{ $achievment->image }}" alt="{{ $achievment->title }}">
                    <h1 class="text-lg font-bold">{{ $achievment->title }}</h1>
                    <p class="text-sm">{{ $achievment->description }}</p>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="my-6">
            <a href="/prestasi" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat Semua Prestasi</a>
        </div>
    </section>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="w-full md:w-2/3">
                <div>
                    <h1 class="text-center md:text-left text-3xl font-bold uppercase">Berita</h1>
                </div>
                <div>
                    <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($news as $new)
                        <li class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                            <a href="/berita/{{ $new->id }}" target="_blank" class="w-full h-full bg-slate-200 rounded-lg p-2 flex flex-col justify-center items-center gap-y-2">
                                <img src="{{ $new->image }}" alt="{{ $new->title }}" class="w-full h-full object-cover">
                                <h1 class="text-md">{{ $new->title }}</h1>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="my-6">
                        <a href="/berita" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3">
                <div>
                    <h1 class="text-center md:text-left text-3xl font-bold uppercase">Pengumuman</h1>
                </div>
                <div class="w-full my-12 px-4 py-3 bg-slate-200 divide-gray-800 divide-y flex flex-col gap-y-2 rounded">
                    @foreach ($announcements as $announcement)
                    <span class="w-full h-full block py-2">
                        <a href="#" target="_blank" class="w-full h-full text-sm">
                            <h1 class="text-md">{{ $announcement->title }}</h1>
                        </a>
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Galeri</h1>
        </div>
        <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($galleries as $galery)
            <li>
                <a href="/prestasi/{{ $galery->id }}" target="_blank" class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                    <img src="{{ $galery->image }}" alt="{{ $galery->title }}" class="w-full h-72 object-cover">
                    <h1 class="text-base">{{ $galery->title }}</h1>
                </a>
            </li>
            @endforeach
        </ul>
        <div class="my-6">
            <a href="/galeri" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat Semua Galeri</a>
        </div>
    </section>
    @vite('resources/js/corousel.js')
</x-layout>