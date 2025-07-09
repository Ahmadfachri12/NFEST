@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<x-layout>
    <x-slot name='page_content'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Welcome Card -->
                    <div class="card mb-4 w-100">
                        <div class="card-body text-left">
                            <p class="fw-bold mb-0">Selamat Datang di Dashboard Admin</p>
                        </div>
                    </div>
                    <br>

                    <!-- Row: Statistik Chart -->
                    <div class="row">

                        <!-- Chart: Total Pengguna -->
                        <div class="col-md-6">
                            <div class="card mb-4 w-100">
                                <div class="card-header">
                                    <h5 class="mb-0">Statistik Pengguna</h5>
                                </div>
                                <div class="card-body text-center">
                                    <canvas id="userChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Chart: Event -->
                        <div class="col-md-6">
                            <div class="card mb-4 w-100">
                                <div class="card-header">
                                    <h5 class="mb-0">Statistik Event</h5>
                                </div>
                                <div class="card-body">
                                    @if ($eventStats->count() > 0)
                                        <canvas id="eventChart" height="200"></canvas>
                                    @else
                                        <p class="text-muted mb-0">Belum ada data event untuk ditampilkan.</p>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div> <!-- End row -->

                </div>
            </div>
        </div>

        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Chart Total Pengguna (Pie chart)
            const userChart = document.getElementById('userChart').getContext('2d');
            new Chart(userChart, {
                type: 'doughnut',
                data: {
                    labels: ['Pengguna Terdaftar'],
                    datasets: [{
                        data: [{{ $totalUser }}],
                        backgroundColor: ['rgba(153, 102, 255, 0.7)'],
                        borderColor: ['rgba(153, 102, 255, 1)'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });

            // Chart Statistik Event
            @if ($eventStats->count() > 0)
            const eventChart = document.getElementById('eventChart').getContext('2d');
            new Chart(eventChart, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($eventStats->keys()) !!},
                    datasets: [{
                        label: 'Jumlah Event per Kategori',
                        data: {!! json_encode($eventStats->values()) !!},
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
            @endif
        </script>
    </x-slot>
</x-layout>
