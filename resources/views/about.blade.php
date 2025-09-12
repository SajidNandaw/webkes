<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rumah Sakit Tirta Negara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12">
                <span class="text-lg font-bold text-teal-600">RUMAH SAKIT<br>TIRTA NEGARA</span>
            </div>
            <nav class="space-x-6 text-gray-700 font-medium">
                <a href="/" class="hover:text-teal-600">Beranda</a>
                <a href="/about" class="hover:text-teal-600">Tentang</a>
                <a href="/caridokter" class="hover:text-teal-600">Cari Dokter</a>
                <a href="/konsultasi" class="hover:text-teal-600">Konsultasi</a>
                <a href="/contact" class="hover:text-teal-600">Kontak</a>
                <button class="ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M16.65 10.65a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </button>
            </nav>
        </div>
    </header>

    <!-- VISI & MISI -->
    <section class="py-12 bg-gradient-to-b from-[#6ED3CD] to-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold">VISI DAN MISI</h2>
            <div class="text-justify leading-relaxed font-medium">
                <h3 class="italic">Visi</h3>
                <p>
                    “Menjadi rumah sakit terpercaya dengan layanan kesehatan paripurna, profesional, dan
                    berlandaskan kepedulian, untuk meningkatkan kualitas hidup masyarakat.”
                </p>
                <h3 class="italic">Misi</h3>
                <ol>
                    <li>1. Memberikan pelayanan kesehatan yang cepat, tepat, dan aman, berbasis pada pengetahuan ilmiah
                        dan kemajuan zaman.</li>
                    <li>2. Mengembangkan sumber daya manusia medis yang kompeten, profesional, dan berintegritas
                        tinggi.</li>
                    <li>3. Menghadirkan pelayanan kesehatan multi-disiplin yang holistik dengan mengedepankan teknologi
                        modern dan inovasi terkini.</li>
                    <li>4. Menjalankan fungsi sosial rumah sakit dalam upaya pemerataan layanan kesehatan bagi seluruh
                        lapisan masyarakat.</li>
                    <li>5. Berperan aktif dalam kegiatan ilmiah dan berbagi praktik dalam upaya preventif, promotif,
                        kuratif, dan rehabilitatif.</li>
                    <li>6. Menjalin kerja sama dengan instansi pemerintah dan memberikan pelayanan yang adil, tanpa
                        membedakan latar belakang pasien.</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- SEJARAH -->
    <section class="py-12 bg-gradient-to-b from-white to-[#6ED3CD]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold">SEJARAH</h2>
            <div class="text-justify leading-relaxed font-medium">
                <h3 class="italic">Sejarah Singkat Rumah Sakit Tirta Negara</h3>
                <p>Rumah Sakit Tirta Negara berdiri pada tahun 2025 sebagai jawaban atas kebutuhan mendesak akan
                    fasilitas kesehatan yang memadai di wilayah Tirta Negara dan sekitarnya. Sebelum berdiri, layanan
                    kesehatan di daerah ini hanya mengandalkan puskesmas dan klinik kecil, sehingga pasien dengan
                    kondisi serius harus dirujuk ke rumah sakit di kota besar yang berjarak cukup jauh. Hal ini sering
                    memperlambat penanganan, bahkan membahayakan keselamatan pasien darurat.</p>
                <p>
                    Dari keprihatinan tersebut, sekelompok tokoh masyarakat, tenaga medis, dan pemerhati kesehatan
                    berinisiatif membangun rumah sakit yang mampu memberikan pelayanan menyeluruh—mulai dari
                    pemeriksaan dasar, tindakan medis spesialis, hingga perawatan intensif. Dengan semangat gotong
                    royong dan dukungan penuh pemerintah daerah, RS Tirta Negara resmi berdiri dengan kapasitas awal 20
                    tempat tidur, satu instalasi gawat darurat, serta beberapa poliklinik umum dan spesialis dasar.
                    Dalam perjalanannya, RS Tirta Negara terus berkembang pesat. Fasilitas modern seperti laboratorium
                    canggih, instalasi radiologi digital, ruang operasi berstandar tinggi, farmasi, serta unit
                    perawatan intensif (ICU dan NICU) mulai tersedia. Jumlah tenaga medis pun bertambah, mencakup
                    dokter spesialis dari berbagai bidang, perawat terlatih, dan tenaga pendukung profesional.
                </p>
                <p>
                    Kini, RS Tirta Negara telah menjadi rumah sakit rujukan utama di kawasan ini dengan lebih dari 150
                    tempat tidur, pelayanan 24 jam, dan berbagai layanan unggulan yang mampu bersaing dengan rumah
                    sakit besar di kota-kota besar.
                </p>
            </div>
        </div>
    </section>
    <!-- KOMITMEN KAMI -->
    <section class="py-12 bg-gradient-to-b from-[#6ED3CD] to-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold">KOMITMEN KAMI</h2>
            <div class="text-justify leading-relaxed font-medium">
                <h3>Di Rumah Sakit Tirta Negara, kami percaya bahwa setiap pasien berhak mendapatkan pelayanan
                    kesehatan terbaik tanpa memandang latar belakang atau kondisi. Komitmen kami tidak hanya terletak
                    pada penyediaan fasilitas medis yang modern, tetapi juga pada sentuhan kemanusiaan dalam setiap
                    langkah perawatan.</h3>
                <h3 class="italic">Kami berkomitmen untuk:</h3>
                <ol>
                    <li>1. Mengutamakan keselamatan dan kenyamanan pasien sebagai prioritas utama.</li>
                    <li>2. Memberikan pelayanan yang cepat, tepat, dan ramah, didukung tenaga medis yang profesional
                        dan berpengalaman.</li>
                    <li>3. Mengembangkan kualitas sumber daya manusia melalui pelatihan dan pembaruan pengetahuan
                        secara berkelanjutan.</li>
                    <li>4. Menghadirkan inovasi dan teknologi kesehatan terkini untuk mendukung diagnosis dan
                        pengobatan yang akurat.</li>
                    <li>5. Menjalin hubungan yang harmonis dengan pasien, keluarga, dan masyarakat melalui komunikasi
                        yang terbuka dan penuh empati.</li>
                </ol>
                <p>Bagi kami, kesembuhan pasien bukan sekadar tujuan medis, melainkan juga wujud nyata dari dedikasi
                    dan pengabdian kami terhadap kesehatan masyarakat.</p>
            </div>
        </div>
    </section>
    <footer class="bg-gray-800 text-white pt-12">
        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">
            <!-- Alamat -->
            <div>
                <div class="flex items-center mb-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-12 mr-2" />
                    <span class="text-lg font-bold">RUMAH SAKIT TIRTA NEGARA</span>
                </div>
                <p class="font-bold">UNIT PELAYANAN RS. TIRTA NEGARA</p>
                <p>Jalan Beringin Albas Blok 58 Beji – Depok</p>
                <p>(021) 8847450, 083644619896</p>
                <p>0810-2345-7896, 0834-8842-1234</p>
                <p>rs.tirtanegara@gmail.com</p>
            </div>
            <!-- Tentang -->
            <div>
                <h3 class="font-bold mb-3 uppercase">TENTANG</h3>
                <ul class="space-y-1 text-sm">
                    <li>Profil RS Tirta Negara</li>
                    <li>Layanan</li>
                    <li>Inovasi</li>
                    <li>Maklumat & Pakta Integritas</li>
                    <li>Keselamatan Kerja</li>
                    <li>K3/Evaluasi</li>
                    <li>Penerimaan Calon Pegawai</li>
                    <li>Pengadaan/LPSE</li>
                </ul>
            </div>
            <!-- Informasi -->
            <div>
                <h3 class="font-bold mb-3 uppercase">INFORMASI</h3>
                <ul class="space-y-1 text-sm">
                    <li>Tirta Negara Cilandak</li>
                    <li>Tirta Negara Menteng</li>
                    <li>Tirta Negara Pamoyanan</li>
                    <li>Tirta Negara Sawangan</li>
                    <li>Tirta Negara Tapos</li>
                </ul>
            </div>
        </div>
        <!-- COPYRIGHT -->
        <div class="text-center text-white text-sm py-4 mt-8" style="background-color:#05B7AB;">
            Copyrights © 2025 All Rights Reserved. Powered by
            <span class="font-semibold">RUMAH SAKIT TIRTA NEGARA</span>
        </div>
    </footer>
</body>
</html>
