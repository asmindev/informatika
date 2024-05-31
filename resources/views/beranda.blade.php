<x-layout>
    <section
        class="relative px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex items-center">
        <div class="w-full uppercase">
            <h3 class="text-xl md:text-3xl font-medium md:font-semibold text-slate-800">Hi, Selamat datang di</h3>
            <h1 class="text-3xl md:text-6xl font-bold md:font-extrabold text-slate-800">
                Jurusan Teknik Informatika
            </h1>
            <h2 class="text-xl font-medium md:text-3xl md:font-bold text-slate-800">Fakultas Teknik, Universitas
                Haluoleo, Kendari</h2>
        </div>
        <div class="absolute bottom-0 h-12 w-full">
            <div class="w-full bg-blue-600 rounded-xl">
                <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-4 text-center">
                    <a href="https://ta.ti.eng.uho.ac.id/" class="p-8 bg-white rounded-lg">
                        <h1>Sistem Monitoring TA</h1>
                    </a>
                    <a href="#" class="p-8 bg-white rounded-lg">
                        <h1>Sistem Evaluasi Kepuasan</h1>
                    </a>
                    <a href="#" class="p-8 bg-white rounded-lg">
                        <h1>E-Librarry</h1>
                    </a>
                    <a href="#" class="p-8 bg-white rounded-lg">
                        <h1>Sistem Monitoring Perkuliahan</h1>
                    </a>
                    <a href="#" class="p-8 bg-white rounded-lg">
                        <h1>Jurnal Semantik</h1>
                    </a>
                    <a href="#" class="p-8 bg-white rounded-lg">
                        <h1>Jurnal Animator</h1>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-blue-100 w-full -z-10">
        <div class="absolute -top-56 w-full h-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path class="fill-blue-100" fill-opacity="1"
                    d="M0,192L48,176C96,160,192,128,288,122.7C384,117,480,139,576,160C672,181,768,203,864,181.3C960,160,1056,96,1152,74.7C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
        <div class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[80vh] flex items-center">
            <div class="mt-64 w-full flex justify-between items-center flex-col md:flex-row">
                <div
                    class="w-full md:w-1/2 relative rounded-full overflow-hidden after:absolute after:bg-indigo-500 after:bottom-0 after:w-full after:h-12 after:left-1/2  before:absolute before:bg-orange-600 before:bottom-12 before:w-full before:h-24 before:md:h-32">
                    <img class="w-full h-full object-cover scale-150" src="{{ asset('storage/file.png') }}"
                        alt="banner">
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
                            Program Studi S1 Teknik Informatika Universitas Halu Oleo adalah salah satu jurusan yang
                            berada di Universitas Halu Oleo. Program Studi Teknik Informatika UHO merupakan bagian dari
                            Fakultas Teknik Universitas Halu Oleo sejak dari tahun 2007 serta hingga saat ini didukung
                            oleh 19 tenaga pengajar dengan kualifikasi lulusan dari universitas – universitas ternama
                            yang berada di Indonesia.
                        </p>
                        <p>
                            Selain itu, telah banyak memiliki prestasi yang diraih oleh mahasiswa IT UHO baik tingkat
                            daerah maupun tingkat nasional seperti GEMASTIK, Socio Technopreneur Campus (STC), Kompetisi
                            Debat Mahasiswa Indonesia (KDMI), serta berbagai prestasi lainnya baik di bidang akademik
                            maupun non akademik. Hingga saat ini, Teknik Informatika UHO memiliki tiga bidang minat
                            studi yakni Rekayasa Perangkat Lunak (RPL), Komputasi Cerdas dan Visualisasi (KCV), serta
                            Komputasi Berbasis Jaringan (KBJ).
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section
        class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Dosen</h1>
        </div>
        <div id="image-slider" class="splide w-full" aria-label="Dosen IT">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($lecturers as $lecturer)
                        <li class="splide__slide">
                            <div class="p-4">
                                <img src="{{ $lecturer->image }}" class="w-full">
                                <div>
                                    <h1 class="text-base font-bold">{{ $lecturer->name }}</h1>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <section
        class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Prestasi</h1>
        </div>
        <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($achievments as $achievment)
                <li>
                    <a href="/prestasi/{{ $achievment->id }}" target="_blank"
                        class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                        <img src="{{ $achievment->image }}" alt="{{ $achievment->title }}">
                        <h1 class="text-lg font-bold">{{ $achievment->title }}</h1>
                        <p class="text-sm">{{ $achievment->description }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="my-6">
            <a href="/prestasi" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat Semua
                Prestasi</a>
        </div>
    </section>
    <section
        class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="flex gap-4">
            <div class="w-2/3">
                <div>
                    <h1 class="text-3xl font-bold uppercase">Berita</h1>
                </div>
                <div>
                    <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach ($news as $new)
                            <li
                                class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                                <a href="/berita/{{ $new->id }}" target="_blank"
                                    class="w-full h-full bg-slate-200 rounded-lg p-2 flex flex-col justify-center items-center gap-y-2">
                                    <img src="{{ $new->image }}" alt="{{ $new->title }}"
                                        class="w-full h-full object-cover">
                                    <h1 class="text-md">{{ $new->title }}</h1>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="my-6">
                        <a href="/berita" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat
                            Semua Berita</a>
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div>
                    <h1 class="text-3xl font-bold uppercase">Pengumuman</h1>
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
    <section
        class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[70vh] flex flex-col justify-center items-center">
        <div class="w-full flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold underline uppercase">Galeri</h1>
        </div>
        <ul class="my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($galleries as $galery)
                <li>
                    <a href="/prestasi/{{ $galery->id }}" target="_blank"
                        class="w-full h-full bg-slate-200 rounded-lg p-4 flex flex-col justify-center items-center gap-y-2">
                        <img src="{{ $galery->image }}" alt="{{ $galery->title }}" class="w-full h-72 object-cover">
                        <h1 class="text-base">{{ $galery->title }}</h1>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="my-6">
            <a href="/galeri" class="w-full py-4 px-8 bg-slate-200 rounded-lg text-center font-bold">Lihat Semua
                Galeri</a>
        </div>
    </section>
    @vite('resources/js/corousel.js')
</x-layout>
