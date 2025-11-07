<main class="flex-grow">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-poppins font-bold mb-6">Panel Admin</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-secondary-light rounded-xl shadow-md p-6 text-center">
                <div class="text-3xl font-poppins font-bold text-accent-blue mb-2">127</div>
                <div class="text-text-muted">Total Laporan</div>
            </div>
            <div class="bg-secondary-light rounded-xl shadow-md p-6 text-center">
                <div class="text-3xl font-poppins font-bold text-green-info mb-2">89</div>
                <div class="text-text-muted">Terverifikasi</div>
            </div>
            <div class="bg-secondary-light rounded-xl shadow-md p-6 text-center">
                <div class="text-3xl font-poppins font-bold text-orange-warning mb-2">38</div>
                <div class="text-text-muted">Menunggu</div>
            </div>
        </div>
        
        <div class="bg-secondary-light rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-poppins font-bold mb-4">Kelola Data Kejadian</h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-primary-light">
                                <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Lokasi</th>
                                <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Tanggal</th>
                                <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Status</th>
                                <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm font-poppins">Bogor, Jawa Barat</td>
                                <td class="px-4 py-3 text-sm text-text-muted">10 Nov 2023</td>
                                <td class="px-4 py-3">
                                    <span class="bg-green-info/10 text-green-info text-xs font-poppins font-medium px-3 py-1 rounded-full">
                                        Terverifikasi
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <button class="text-accent-blue hover:text-accent-blue-hover font-poppins font-medium text-sm">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm font-poppins">Pacitan, Jawa Timur</td>
                                <td class="px-4 py-3 text-sm text-text-muted">05 Nov 2023</td>
                                <td class="px-4 py-3">
                                    <span class="bg-orange-warning/10 text-orange-warning text-xs font-poppins font-medium px-3 py-1 rounded-full">
                                        Menunggu
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <button class="text-accent-blue hover:text-accent-blue-hover font-poppins font-medium text-sm">
                                        Verifikasi
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>