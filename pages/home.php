<?php
// Data statistik untuk homepage
$stats = [
    ['value' => 127, 'label' => 'Total Kejadian', 'color' => 'text-orange-warning'],
    ['value' => 42, 'label' => 'Korban Meninggal', 'color' => 'text-red-600'],
    ['value' => 89, 'label' => 'Korban Luka', 'color' => 'text-yellow-600'],
    ['value' => 315, 'label' => 'Rumah Rusak', 'color' => 'text-blue-600'],
];

// Data berita terbaru
$news = [
    [
        'id' => 1,
        'title' => 'Peningkatan Kewaspadaan Tanah Longsor di Musim Hujan',
        'summary' => 'BMKG mengingatkan masyarakat untuk meningkatkan kewaspadaan terhadap potensi tanah longsor di musim hujan ini.',
        'date' => '15 Nov 2023',
        'category' => 'Peringatan'
    ],
    [
        'id' => 2,
        'title' => 'Teknologi Baru Deteksi Dini Longsor',
        'summary' => 'Peneliti kembangkan sistem deteksi dini tanah longsor menggunakan sensor IoT dan kecerdasan buatan.',
        'date' => '10 Nov 2023',
        'category' => 'Teknologi'
    ],
    [
        'id' => 3,
        'title' => 'Edukasi Mitigasi Bencana di Sekolah',
        'summary' => 'BNPB gencarkan program edukasi mitigasi bencana tanah longsor di sekolah-sekolah daerah rawan.',
        'date' => '5 Nov 2023',
        'category' => 'Edukasi'
    ]
];
?>

<main class="flex-grow">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-accent-blue to-blue-600 text-white py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-poppins font-bold mb-4">SIGLON</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Sistem Informasi Tanah Longsor Indonesia - Pusat Informasi dan Pemantauan Tanah Longsor</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="?page=peta" class="bg-white text-accent-blue px-6 py-3 rounded-lg font-poppins font-medium hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                    Lihat Peta
                </a>
                <a href="?page=pengetahuan" class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-poppins font-medium hover:bg-white/10 transition-colors duration-300">
                    Pelajari Mitigasi
                </a>
            </div>
        </div>
    </section>

    <!-- Statistik Section -->
    <section class="py-16 bg-secondary-light">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-poppins font-bold text-center mb-12">Statistik Tanah Longsor</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <?php foreach ($stats as $stat): ?>
                    <div class="stat-card bg-primary-light rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow duration-300">
                        <div class="stat-value text-3xl md:text-4xl font-poppins font-bold <?php echo $stat['color']; ?> mb-2">
                            <?php echo $stat['value']; ?>
                        </div>
                        <div class="text-text-muted font-poppins font-medium">
                            <?php echo $stat['label']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Peta Section -->
    <section class="py-16 bg-gray-soft">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-poppins font-bold mb-4">Pemantauan Real-time</h2>
                    <p class="text-text-muted mb-6 text-lg">
                        Pantau lokasi kejadian tanah longsor di seluruh Indonesia dengan peta interaktif kami. 
                        Data diperbarui secara berkala dari sumber terpercaya.
                    </p>
                    <a href="?page=peta" class="inline-flex items-center gap-2 bg-accent-blue text-white px-6 py-3 rounded-lg font-poppins font-medium hover:bg-accent-blue-hover transition-colors duration-300">
                        Buka Peta Interaktif
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden h-80">
                    <div id="home-map" class="w-full h-full rounded-xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="py-16 bg-secondary-light">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-poppins font-bold">Berita Terbaru</h2>
                <a href="?page=pengetahuan" class="text-accent-blue hover:text-accent-blue-hover font-poppins font-medium flex items-center gap-2">
                    Lihat Semua Berita
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($news as $item): ?>
                    <div class="bg-primary-light rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-3">
                                <span class="bg-accent-blue/10 text-accent-blue text-xs font-poppins font-medium px-3 py-1 rounded-full">
                                    <?php echo $item['category']; ?>
                                </span>
                                <span class="text-text-muted text-sm"><?php echo $item['date']; ?></span>
                            </div>
                            <h3 class="font-poppins font-bold text-lg mb-3 multi-line-truncate truncate-2"><?php echo $item['title']; ?></h3>
                                <p class="text-text-muted text-sm mb-4 multi-line-truncate truncate-3"><?php echo $item['summary']; ?></p>
                            <a href="?page=pengetahuan&article=<?php echo $item['id']; ?>" class="text-accent-blue hover:text-accent-blue-hover font-poppins font-medium text-sm flex items-center gap-1">
                                Baca Selengkapnya
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<script>
// Inisialisasi peta sederhana untuk homepage
document.addEventListener('DOMContentLoaded', function() {
    // Periksa apakah elemen peta ada
    const mapElement = document.getElementById('home-map');
    if (!mapElement) return;
    
    try {
        const map = L.map('home-map').setView([-2.5489, 118.0149], 5);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
        
        // Tambahkan beberapa marker contoh
        const sampleLocations = [
            { lat: -6.2088, lng: 106.8456, title: 'Jakarta' },
            { lat: -7.2504, lng: 112.7688, title: 'Surabaya' },
            { lat: -6.9175, lng: 107.6191, title: 'Bandung' },
        ];
        
        sampleLocations.forEach(loc => {
            L.marker([loc.lat, loc.lng])
                .addTo(map)
                .bindPopup(`<b>${loc.title}</b><br>Contoh lokasi pemantauan`);
        });
    } catch (error) {
        console.error('Error initializing map:', error);
    }
});
</script>