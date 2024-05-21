<x-layout>
    <section class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[80vh] flex items-center">
        <div class="w-full uppercase">
            <h3 class="text-xl md:text-3xl font-medium md:font-semibold text-slate-800">Hi, Selamat datang di</h3>
            <h1 class="text-3xl md:text-6xl font-bold md:font-extrabold text-slate-800">
                Jurusan Teknik Informatika
            </h1>
            <h2 class="text-xl font-medium md:text-3xl md:font-bold text-slate-800">Fakultas Teknik, Universitas Haluoleo, Kendari</h2>
        </div>
    </section>
    <section class="bg-blue-100">

        <div class="px-4 w-full md:w-11/12 lg:w-10/12 mx-auto py-12 min-h-[50vh] md:min-h-[80vh] flex items-center">
            <div class="w-full flex justify-between items-center flex-col md:flex-row">
                <div class="w-full md:w-1/2 relative rounded-full overflow-hidden after:absolute after:bg-indigo-500 after:bottom-0 after:w-full after:h-12 after:left-1/2  before:absolute before:bg-orange-600 before:bottom-12 before:w-full before:h-24 before:md:h-32">
                    <img class="w-full h-full object-cover scale-150" src="{{ asset('storage/file.png') }}" alt="banner">
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
</x-layout>
