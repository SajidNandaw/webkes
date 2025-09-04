<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Tirta Negara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">

    <!-- HEADER -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <img src="logo.png" alt="Logo" class="h-12">
                <span class="text-teal-700 font-bold">RUMAH SAKIT<br>TIRTA NEGARA</span>
            </div>
            <nav class="flex space-x-6 text-gray-800 font-medium">
                <a href="#" class="hover:text-teal-600">Beranda</a>
                <a href="#" class="hover:text-teal-600">Tentang</a>
                <a href="#" class="hover:text-teal-600">Cari Dokter</a>
                <a href="#" class="hover:text-teal-600">Konsultasi</a>
                <a href="#" class="hover:text-teal-600">Kontak</a>
            </nav>
            <div>
                <input type="text" placeholder="Search" class="border rounded-full px-3 py-1 text-sm">
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="relative bg-gradient-to-r from-teal-500 to-teal-300">
        <div class="container mx-auto flex items-center px-6 py-10">
            <div class="w-1/2 text-white">
                <h1 class="text-3xl font-bold leading-tight">Mengalirkan Harapan, <br>Menyembuhkan Negeri</h1>
                <p class="mt-3 italic text-lg">“Kami berkomitmen melayani dengan tulus demi sehatnya negeri.”</p>
            </div>
            <div class="w-1/2">
                <img src="hero.png" alt="Rumah Sakit" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section class="bg-white py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-6 gap-6 text-center">
                <div>
                    <img src="icon-rawatjalan.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Rawat Jalan</p>
                </div>
                <div>
                    <img src="icon-farmasi.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Farmasi</p>
                </div>
                <div>
                    <img src="icon-gizi.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Gizi</p>
                </div>
                <div>
                    <img src="icon-fisioterapi.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Fisioterapi</p>
                </div>
                <div>
                    <img src="icon-lab.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Laboratorium</p>
                </div>
                <div>
                    <img src="icon-radiologi.png" class="mx-auto h-12">
                    <p class="mt-2 font-semibold">Radiologi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- JENIS & WAKTU PELAYANAN -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 grid grid-cols-2 gap-10">
            <!-- JENIS -->
            <div>
                <h2 class="bg-teal-600 text-white px-4 py-2 rounded-md font-bold text-lg inline-block">JENIS PELAYANAN</h2>
                <ul class="mt-4 text-gray-700 space-y-3 text-sm">
                    <li><b>Rawat Jalan:</b> Dokter Umum, Spesialis Paru, Jantung, Bedah, Kandungan, dll</li>
                    <li><b>Farmasi:</b> Pelayanan Resep, Informasi Obat</li>
                    <li><b>Gizi:</b> Konseling Gizi</li>
                    <li><b>Fisioterapi:</b> Muskuloskeletal, Cedera Olahraga, dll</li>
                    <li><b>Laboratorium:</b> Hematologi, Kimia Klinik, PCR</li>
                    <li><b>Radiologi:</b> X-Ray, Panoramik, Mamografi</li>
                </ul>
            </div>
            <!-- WAKTU -->
            <div>
                <h2 class="bg-teal-600 text-white px-4 py-2 rounded-md font-bold text-lg inline-block">WAKTU PELAYANAN</h2>
                <div class="mt-4 text-gray-700 text-sm space-y-2">
                    <p><b>SENIN – KAMIS</b></p>
                    <p>Pendaftaran Pagi: 07.30 - 11.30 WIB</p>
                    <p>Istirahat: 12.00 - 13.00 WIB</p>
                    <p>Pendaftaran Siang: 13.00 - 16.00 WIB</p>
                    <p>Waktu Layanan: 08.00 - 23.00 WIB</p>
                    <br>
                    <p><b>JUMAT – MINGGU</b></p>
                    <p>Pendaftaran Pagi: 09.00 - 11.00 WIB</p>
                    <p>Istirahat: 11.30 - 13.00 WIB</p>
                    <p>Pendaftaran Siang: 13.00 - 16.00 WIB</p>
                    <p>Waktu Layanan: 08.00 - 23.00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DOKTER SPESIALIS -->
    <section class="bg-gradient-to-r from-teal-500 to-teal-300 py-12 text-center">
        <h2 class="text-2xl font-bold text-white">DOKTER SPESIALIS</h2>
        <div class="container mx-auto px-6 grid grid-cols-4 gap-6 mt-8">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="dokter1.png" class="mx-auto h-40">
                <p class="mt-2 font-semibold">dr. Ari Nurfal, Sp.PD, KKV</p>
                <p class="text-sm text-gray-600">(Dokter Spesialis Jantung)</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="dokter2.png" class="mx-auto h-40">
                <p class="mt-2 font-semibold">dr. Novi Resistante, Sp.OG</p>
                <p class="text-sm text-gray-600">(Dokter Kandungan)</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="dokter3.png" class="mx-auto h-40">
                <p class="mt-2 font-semibold">dr. Deni Syahputra</p>
                <p class="text-sm text-gray-600">(Dokter Umum)</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="dokter4.png" class="mx-auto h-40">
                <p class="mt-2 font-semibold">drg. Aidil Callindra</p>
                <p class="text-sm text-gray-600">(Dokter Spesialis Gigi)</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-6 grid grid-cols-3 gap-10">
            <!-- KIRI -->
            <div>
                <img src="logo.png" class="h-12 mb-3">
                <p class="font-bold">UNIT PELAYANAN RS. TIRTA NEGARA</p>
                <p class="text-sm mt-2">Jalan Baiturrahim Albas Blok 55 Beji - Depok</p>
                <p class="text-sm">Telp: (021) 8879450, 083641469896</p>
                <p class="text-sm">0810-2345-7896, 0834-8842-1234</p>
                <p class="text-sm">rs.tirtanegara@gmail.com</p>
            </div>
            <!-- TENGAH -->
            <div>
                <p class="font-bold mb-2">TENTANG</p>
                <ul class="space-y-1 text-sm">
                    <li>Profil RS Tirta Negara</li>
                    <li>Layanan</li>
                    <li>Inovasi</li>
                    <li>Maklumat & Integritas</li>
                    <li>Keselamatan Kerja</li>
                    <li>Penerimaan Calon Pegawai</li>
                    <li>Pengadaan/LPSE</li>
                </ul>
            </div>
            <!-- KANAN -->
            <div>
                <p class="font-bold mb-2">INFORMASI</p>
                <ul class="space-y-1 text-sm">
                    <li>Tirta Negara Cilandak</li>
                    <li>Tirta Negara Menteng</li>
                    <li>Tirta Negara Pamoyanan</li>
                    <li>Tirta Negara Sawangan</li>
                    <li>Tirta Negara Tapos</li>
                </ul>
            </div>
        </div>
        <div class="text-center text-sm mt-6 border-t border-gray-700 pt-4">
            Copyrights © 2025 All Rights Reserved. Powered by <b>RUMAH SAKIT TIRTA NEGARA</b>
        </div>
    </footer>

</body>
</html>
