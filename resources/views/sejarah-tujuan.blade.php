<x-layout>
    <section class="w-full h-full px-4 md:w-11/12 lg:w-10/12 mx-auto">
        <div class="w-full my-12 py-8 px-12 rounded-xl bg-slate-100">
            <h1 class="text-3xl font-bold text-slate-800 uppercase">Sejarah & Tujuan</h1>
            <p class="text-slate-700 mt-4">Berikut adalah sejarah dan tujuan Jurusan Teknik Informatika Universitas Halu Oleo</p>
        </div>
        <div class="my-24">
            <h1 class="font-semibold">
                Sejarah dan Tujuan Teknik Informatika UHO
            </h1>
            <article>
                <p class="mt-4 text-slate-700">
                    {!! $history !!}
                </p>
                <h5 class="mt-4 text-slate-800 font-semibold">Adapun tujuan dari Teknik Informatika UHO adalah sebagai berikut</h5>
                <p class="text-slate-700">
                    {!! $purpose !!}
                </p>
            </article>
        </div>
    </section>
</x-layout>
