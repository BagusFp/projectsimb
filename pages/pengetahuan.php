<?php
// Data artikel pengetahuan
$articles = [
    [
        'id' => 1,
        'title' => 'Apa Itu Tanah Longsor?',
        'content' => 'Tanah longsor adalah perpindahan material pembentuk lereng berupa batuan, bahan rombakan, tanah, atau material campuran tersebut...',
        'category' => 'Pengetahuan Dasar',
        'image' => 'landslide1.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Jenis-jenis Tanah Longsor',
        'content' => 'Ada beberapa jenis tanah longsor yang perlu diketahui, antara lain longsoran translasi, longsoran rotasi, pergerakan blok...',
        'category' => 'Klasifikasi',
        'image' => 'landslide2.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Mitigasi Bencana Tanah Longsor',
        'content' => 'Mitigasi bencana tanah longsor dapat dilakukan melalui berbagai cara, baik struktural maupun non-struktural...',
        'category' => 'Mitigasi',
        'image' => 'mitigation.jpg'
    ]
];
?>

<main class="flex-grow">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-poppins font-bold mb-6">Pengetahuan & Edukasi</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <?php foreach ($articles as $article): ?>
                <div class="bg-secondary-light rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="h-48 bg-gradient-to-r from-accent-blue to-blue-600 flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <span class="bg-accent-blue/10 text-accent-blue text-xs font-poppins font-medium px-3 py-1 rounded-full mb-3 inline-block">
                            <?php echo $article['category']; ?>
                        </span>
                        <h3 class="font-poppins font-bold text-xl mb-3"><?php echo $article['title']; ?></h3>
                        <p class="text-text-muted mb-4 line-clamp-3"><?php echo $article['content']; ?></p>
                        <a href="?page=pengetahuan&article=<?php echo $article['id']; ?>" class="text-accent-blue hover:text-accent-blue-hover font-poppins font-medium flex items-center gap-2">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- FAQ Section -->
        <div class="mt-12 bg-secondary-light rounded-xl shadow-md p-6">
            <h2 class="text-2xl font-poppins font-bold mb-6">Pertanyaan Umum</h2>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-poppins font-bold text-lg mb-2">Apa penyebab utama tanah longsor?</h3>
                    <p class="text-text-muted">Penyebab utama tanah longsor antara lain hujan deras, erosi, gempa bumi, aktivitas manusia, dan lereng yang curam.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-poppins font-bold text-lg mb-2">Bagaimana cara mengenali daerah rawan longsor?</h3>
                    <p class="text-text-muted">Daerah rawan longsor biasanya memiliki ciri-ciri seperti retakan tanah, kemiringan lereng yang curam, dan riwayat kejadian longsor sebelumnya.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="font-poppins font-bold text-lg mb-2">Apa yang harus dilakukan saat terjadi tanah longsor?</h3>
                    <p class="text-text-muted">Segera evakuasi ke tempat yang lebih tinggi, hindari daerah lereng, dan ikuti instruksi dari pihak berwenang.</p>
                </div>
            </div>
        </div>
    </div>
</main>