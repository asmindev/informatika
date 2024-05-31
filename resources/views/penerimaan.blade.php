<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-100 rounded-xl">
            <h1 class="text-3xl font-bold text-slate-800">Penerimaan</h1>
            <p class="mt-2 text-slate-600">Penerimaan Mahasiswa Baru Jurusan Teknik Informatika Universitas Halu Oleo</p>
        </div>
        <div class="my-12">
            <canvas id="myChart"></canvas>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = @json($receptions);
        data.sort((a, b) => new Date(a.year) - new Date(b.year));

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map(x => x.year), // Labels for the data points
                datasets: [{
                        label: 'Jumlah Pendaftar',
                        data: data.map(x => x.registrant), // Data for registrants
                        backgroundColor: 'rgba(255, 99, 132, 0.2)', // Bar color
                        borderColor: 'rgba(255, 99, 132, 1)', // Border color
                        borderWidth: 1
                    },
                    {
                        label: 'Jumlah Diterima',
                        data: data.map(x => x.passed), // Data for accepted
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Kapasitas',
                        data: data.map(x => x.capacity), // Data for capacity
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-layout>
