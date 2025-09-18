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
                <a href="/home" class="hover:text-teal-600">Beranda</a>
                <a href="/about" class="hover:text-teal-600">Tentang</a>
                <a href="/dokter" class="hover:text-teal-600">Cari Dokter</a>
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

    <section class="relative">
        <!-- Gambar -->
        <img src="{{ asset('images/bg.jpg') }}" alt="Hospital" class="w-full h-64 md:h-96 object-cover z-0">

        <!-- Overlay gradient full width: hijau -> putih transparan lembut -->
        <div class="absolute inset-0 z-10"
            style="background: linear-gradient(to right, #09B8AC 0%, rgba(255,255,255,0.4) 65%, rgba(255,255,255,0.6) 100%);">
        </div>

        <!-- Dekorasi diamond kiri -->
        <div class="absolute top-6 left-12 w-16 h-16 bg-teal-400/40 rotate-45 z-20"></div>

        <!-- Dekorasi diamond kanan -->
        <div class="absolute top-8 right-16 w-20 h-20 bg-teal-500/60 rotate-45 z-20"></div>

        <!-- Segitiga kanan bawah (proporsional, lurus, cebol) -->
        <div
            class="absolute bottom-12 right-28 w-0 h-0
                border-l-[70px] border-l-transparent
                border-r-[70px] border-r-transparent
                border-b-[90px] border-b-teal-400/60 z-20">
        </div>

        <!-- Segitiga kiri bawah (proporsional, lurus, cebol) -->
        <div
            class="absolute bottom-8 left-28 w-0 h-0
                border-l-[60px] border-l-transparent
                border-r-[60px] border-r-transparent
                border-b-[80px] border-b-teal-400/35 z-20">
        </div>

        <!-- Text -->
        <div class="absolute top-1/4 left-8 md:left-16 text-white z-30">
            <h1 class="text-3xl md:text-4xl font-bold leading-snug drop-shadow">
                Mengalirkan Harapan,<br>Menyembuhkan Negeri
            </h1>
            <p class="mt-3 italic text-lg drop-shadow">
                "Kami berkomitmen melayani dengan tulus demi sehatnya negeri."
            </p>
        </div>
    </section>

    <!-- ===================== JENIS & WAKTU PELAYANAN ===================== -->
    <section class="bg-gradient-to-b from-white to-teal-50 container mx-auto px-6 py-12 grid md:grid-cols-2 gap-10">
        <div>
            <h2 class="bg-teal-600 text-white px-4 py-2 rounded-t font-bold text-center">JENIS PELAYANAN</h2>
            <div class="border p-4 space-y-3 bg-white text-sm leading-relaxed">
                <p><b>Rawat Jalan:</b> Dokter Umum, Dokter Spesialis Gizi, Dokter Spesialis Paru, Dokter Spesialis
                    Obsgyn, Dokter Spesialis Jantung, Dokter Spesialis Rehab Medik, Pelayanan KB dan KIA.</p>
                <p><b>Farmasi:</b> Pelayanan Resep, Pelayanan Informasi Obat, Konseling Obat.</p>
                <p><b>Gizi:</b> Konseling Gizi.</p>
                <p><b>Fisioterapi:</b> Muskuloskeletal dan Cedera Olahraga, Neuromuskulos, Kesehatan Kewanitaan,
                    Sederhana hingga Rehabilitasi Sistemik.</p>
                <p><b>Laboratorium:</b> Pemeriksaan Hematologi, Kimia Klinik, dan Swab Antigen serta PCR.</p>
                <p><b>Radiologi:</b> Pemeriksaan Radiologi Konvensional Non Kontras, Panoramik dan Dental X-Ray,
                    Rontgen, Mammography.</p>
            </div>
        </div>

        <div>
            <h2 class="bg-teal-600 text-white px-4 py-2 rounded-t font-bold text-center">WAKTU PELAYANAN</h2>
            <div class="border p-4 bg-white text-sm leading-relaxed">
                <p><b>SENIN – KAMIS</b><br>
                    Pendaftaran Pagi: 07.30 – 11.30 WIB<br>
                    Istirahat: 12.00 – 13.00 WIB<br>
                    Pendaftaran Siang: 13.00 – 16.00 WIB<br>
                    Waktu Layanan: 08.00 – 23.00 WIB
                </p>
                <br>
                <p><b>JUMAT – MINGGU</b><br>
                    Pendaftaran Pagi: 09.00 – 11.00 WIB<br>
                    Istirahat: 11.30 – 13.00 WIB<br>
                    Pendaftaran Siang: 13.00 – 16.00 WIB<br>
                    Waktu Layanan: 08.00 – 23.00 WIB
                </p>
            </div>
        </div>
    </section>

    <!-- ===================== DOKTER SPESIALIS ===================== -->
    <section class="bg-gradient-to-b from-teal-50 to-white py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-center text-2xl font-bold text-gray-800 mb-10">DOKTER SPESIALIS</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div class="bg-white shadow p-4 rounded-lg">
                    <img src="{{ asset('images/D4.jpg') }}" class="mx-auto h-43 mb-4">
                    <p class="font-bold">dr. Ari Nurial, Sp.PD, KKV</p>
                    <p class="text-sm text-gray-600">(Dokter Spesialis Jantung)</p>
                </div>
                <div class="bg-white shadow p-4 rounded-lg">
                    <img src="{{ asset('images/D5.jpg') }}" class="mx-auto h-43 mb-4">
                    <p class="font-bold">Dr. dr. Novi Reskiastanti, Sp.OG, Subsp.KFM</p>
                    <p class="text-sm text-gray-600">(Dokter Kandungan)</p>
                </div>
                <div class="bg-white shadow p-4 rounded-lg">
                    <img src="{{ asset('images/D6.jpg') }}" class="mx-auto h-43 mb-4">
                    <p class="font-bold">dr. Deni Syahputra</p>
                    <p class="text-sm text-gray-600">(Dokter Umum)</p>
                </div>
                <div class="bg-white shadow p-4 rounded-lg">
                    <img src="{{ asset('images/D7.jpg') }}" class="mx-auto h-43 mb-4">
                    <p class="font-bold">drg. Adisti Callindra</p>
                    <p class="text-sm text-gray-600">(Dokter Spesialis Gigi)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FOOTER ===================== -->
    <footer class="bg-gray-800 text-white pt-12">
        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-10">

            <!-- Alamat -->
            <div>
                <div class="flex items-center mb-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-12 mr-2">
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
