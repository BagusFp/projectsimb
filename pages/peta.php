<?php
// Data tanah longsor (contoh)
$landslide_data = [
    [
        'id' => 1,
        'lokasi' => 'Bogor, Jawa Barat',
        'tanggal' => '2023-11-10',
        'korban_meninggal' => 2,
        'korban_luka' => 5,
        'kerusakan_rumah' => 12,
        'sumber' => 'BNPB',
        'coordinates' => [-6.5971, 106.8060]
    ],
    [
        'id' => 2,
        'lokasi' => 'Pacitan, Jawa Timur',
        'tanggal' => '2023-11-05',
        'korban_meninggal' => 1,
        'korban_luka' => 3,
        'kerusakan_rumah' => 8,
        'sumber' => 'BNPB',
        'coordinates' => [-8.2068, 111.0799]
    ],
    [
        'id' => 3,
        'lokasi' => 'Agam, Sumatera Barat',
        'tanggal' => '2023-10-28',
        'korban_meninggal' => 3,
        'korban_luka' => 7,
        'kerusakan_rumah' => 15,
        'sumber' => 'BNPB',
        'coordinates' => [-0.2500, 100.1667]
    ]
];
?>

<main class="flex-grow">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-poppins font-bold mb-6">Peta Tanah Longsor Indonesia</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Sidebar -->
            <div class="lg:col-span-1 bg-secondary-light rounded-xl shadow-md p-6 h-fit">
                <h2 class="text-xl font-poppins font-bold mb-4">Filter Data</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-poppins font-medium text-text-muted mb-2">Provinsi</label>
                        <select class="w-full bg-primary-light border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option value="">Semua Provinsi</option>
                            <option value="jabar">Jawa Barat</option>
                            <option value="jatim">Jawa Timur</option>
                            <option value="sumbar">Sumatera Barat</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-poppins font-medium text-text-muted mb-2">Tanggal</label>
                        <input type="date" class="w-full bg-primary-light border border-gray-300 rounded-lg px-3 py-2 text-sm">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-poppins font-medium text-text-muted mb-2">Tingkat Kerusakan</label>
                        <select class="w-full bg-primary-light border border-gray-300 rounded-lg px-3 py-2 text-sm">
                            <option value="">Semua Tingkat</option>
                            <option value="ringan">Ringan</option>
                            <option value="sedang">Sedang</option>
                            <option value="berat">Berat</option>
                        </select>
                    </div>
                    
                    <button class="w-full bg-accent-blue text-white py-2 rounded-lg font-poppins font-medium hover:bg-accent-blue-hover transition-colors duration-300">
                        Terapkan Filter
                    </button>
                </div>
                
                <div class="mt-6">
                    <h3 class="text-lg font-poppins font-bold mb-3">Legenda</h3>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-red-500 rounded-full"></div>
                            <span class="text-sm text-text-muted">Tinggi (> 5 korban)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full"></div>
                            <span class="text-sm text-text-muted">Sedang (2-5 korban)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 bg-green-500 rounded-full"></div>
                            <span class="text-sm text-text-muted">Rendah (< 2 korban)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Peta -->
            <div class="lg:col-span-3">
                <div class="bg-secondary-light rounded-xl shadow-md overflow-hidden">
                    <div id="map" class="h-96 w-full rounded-xl"></div>
                </div>
                
                <!-- Daftar Kejadian -->
                <div class="mt-6 bg-secondary-light rounded-xl shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-poppins font-bold mb-4">Daftar Kejadian Terbaru</h2>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="bg-primary-light">
                                        <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Lokasi</th>
                                        <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Tanggal</th>
                                        <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Meninggal</th>
                                        <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Luka</th>
                                        <th class="px-4 py-3 text-left text-sm font-poppins font-medium text-text-muted">Rumah Rusak</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php foreach ($landslide_data as $item): ?>
                                        <tr class="hover:bg-gray-50 cursor-pointer" onclick="focusOnMap(<?php echo $item['coordinates'][0]; ?>, <?php echo $item['coordinates'][1]; ?>)">
                                            <td class="px-4 py-3 text-sm font-poppins"><?php echo $item['lokasi']; ?></td>
                                            <td class="px-4 py-3 text-sm text-text-muted"><?php echo date('d M Y', strtotime($item['tanggal'])); ?></td>
                                            <td class="px-4 py-3 text-sm text-red-600 font-medium"><?php echo $item['korban_meninggal']; ?></td>
                                            <td class="px-4 py-3 text-sm text-yellow-600 font-medium"><?php echo $item['korban_luka']; ?></td>
                                            <td class="px-4 py-3 text-sm text-blue-600 font-medium"><?php echo $item['kerusakan_rumah']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
let map;
let markers = [];

document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi peta
    const mapElement = document.getElementById('map');
    if (!mapElement) return;
    
    try {
        map = L.map('map').setView([-2.5489, 118.0149], 5);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
        
        // Tambahkan marker dari data PHP
        const landslideData = <?php echo json_encode($landslide_data); ?>;
        
        landslideData.forEach(item => {
            let markerColor = 'green';
            if (item.korban_meninggal > 5) {
                markerColor = 'red';
            } else if (item.korban_meninggal >= 2) {
                markerColor = 'orange';
            }
            
            const marker = L.marker([item.coordinates[0], item.coordinates[1]], {
                icon: L.divIcon({
                    className: 'custom-marker',
                    html: `<div style="background-color: ${markerColor}; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white;"></div>`,
                    iconSize: [16, 16],
                    iconAnchor: [8, 8]
                })
            }).addTo(map);
            
            marker.bindPopup(`
                <div class="p-2">
                    <h3 class="font-poppins font-bold text-lg">${item.lokasi}</h3>
                    <p class="text-sm text-text-muted">${new Date(item.tanggal).toLocaleDateString('id-ID')}</p>
                    <div class="mt-2 space-y-1">
                        <div class="flex justify-between">
                            <span>Meninggal:</span>
                            <span class="font-medium text-red-600">${item.korban_meninggal}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Luka:</span>
                            <span class="font-medium text-yellow-600">${item.korban_luka}</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Rumah Rusak:</span>
                            <span class="font-medium text-blue-600">${item.kerusakan_rumah}</span>
                        </div>
                    </div>
                    <p class="text-xs text-text-muted mt-2">Sumber: ${item.sumber}</p>
                </div>
            `);
            
            markers.push(marker);
        });
        
    } catch (error) {
        console.error('Error initializing map:', error);
    }
});

function focusOnMap(lat, lng) {
    if (map) {
        map.setView([lat, lng], 10);
        
        // Buka popup untuk marker yang sesuai
        markers.forEach(marker => {
            const markerLatLng = marker.getLatLng();
            if (markerLatLng.lat === lat && markerLatLng.lng === lng) {
                marker.openPopup();
            }
        });
    }
}
</script>