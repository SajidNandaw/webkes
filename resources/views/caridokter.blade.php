{{-- resources/views/cari-dokter.blade.php --}}
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

    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative">
        <img src="{{ asset('images/doctor-hero.jpg') }}" alt="Cari Dokter" class="w-full h-72 md:h-96 object-cover">
        <div class="absolute inset-0 bg-teal-900 bg-opacity-40"></div>
        <div class="absolute inset-0 flex items-center justify-start px-8 md:px-16">
            <div class="text-white max-w-lg">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug drop-shadow">
                    Butuh dokter?<br>Mulai pencarian Anda di sini
                </h1>
                <p class="mt-3 text-base md:text-lg drop-shadow">
                    Kami membantu Anda menemukan dokter dan spesialis yang tepat sesuai kebutuhan kesehatan Anda.
                </p>
            </div>
        </div>
    </section>

    <!-- ===================== SEARCH BAR ===================== -->
    <section class="bg-white py-6">
        <div class="container mx-auto px-6">
            <div class="flex justify-center">
                <input type="text" placeholder="Cari Dokter"
                    class="w-full max-w-lg px-4 py-3 rounded-l-lg border border-gray-300 focus:outline-none">
                <button class="bg-teal-600 hover:bg-teal-700 text-white px-5 rounded-r-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ===================== LIST DOKTER ===================== -->
    <section class="bg-gradient-to-b from-white to-teal-50 py-12">
        <div class="container mx-auto px-6 space-y-12">

            <!-- Dokter 1 -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter1.png') }}" alt="Dokter Paru"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Yulia Octaviany Harnoto, SpP</h3>
                    <p class="text-gray-600 font-semibold">DOKTER SPESIALIS PARU</p>
                    <p class="mt-2 text-sm bg-purple-100 text-purple-700 inline-block px-3 py-1 rounded-full">
                        Rabu 15.00 - 19.00
                    </p>
                </div>
            </div>

            <!-- Dokter 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter2.png') }}" alt="Dokter Jantung"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Azri Nurizal, Sp.PD, KKV</h3>
                    <p class="text-gray-600 font-semibold">DOKTER SPESIALIS JANTUNG</p>
                    <div class="mt-2 space-y-1 text-sm">
                        <span class="bg-teal-100 text-teal-700 inline-block px-3 py-1 rounded-full">Senin 08.00 -
                            12.00</span><br>
                        <span class="bg-teal-100 text-teal-700 inline-block px-3 py-1 rounded-full">Rabu 15.00 -
                            19.00</span><br>
                        <span class="bg-teal-100 text-teal-700 inline-block px-3 py-1 rounded-full">Minggu 10.00 -
                            12.00</span>
                    </div>
                </div>
            </div>

            <!-- Dokter 3 -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter3.png') }}" alt="Dokter Gizi"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Christin Santun Sriati Lumban Tobing, M.Gizi, Sp.GK</h3>
                    <p class="text-gray-600 font-semibold">DOKTER GIZI</p>
                    <p class="mt-2 text-sm bg-blue-100 text-blue-700 inline-block px-3 py-1 rounded-full">
                        Rabu 09.00 - 12.00
                    </p>
                </div>
            </div>

            <!-- Dokter 4 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter4.png') }}" alt="Dokter Kandungan"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">Dr. dr. Novi Reskiastanti, Sp.OG, Subsp.KFM</h3>
                    <p class="text-gray-600 font-semibold">DOKTER KANDUNGAN</p>
                    <p class="mt-2 text-sm bg-pink-100 text-pink-700 inline-block px-3 py-1 rounded-full">
                        Selasa 10.00 - 13.00
                    </p>
                </div>
            </div>

            <!-- Dokter 5 -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter5.png') }}" alt="Dokter Umum"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Deni Syahputra</h3>
                    <p class="text-gray-600 font-semibold">DOKTER UMUM</p>
                    <p class="mt-2 text-sm bg-green-100 text-green-700 inline-block px-3 py-1 rounded-full">
                        Senin - Jumat 08.00 - 16.00
                    </p>
                </div>
            </div>

            <!-- Dokter 6 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter6.png') }}" alt="Dokter Gigi"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">drg. Adisti Callindra</h3>
                    <p class="text-gray-600 font-semibold">DOKTER GIGI</p>
                    <p class="mt-2 text-sm bg-yellow-100 text-yellow-700 inline-block px-3 py-1 rounded-full">
                        Jumat 09.00 - 12.00
                    </p>
                </div>
            </div>

            <!-- Dokter 7 -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter7.png') }}" alt="Dokter Anak"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Melisa Handayani, Sp.A</h3>
                    <p class="text-gray-600 font-semibold">DOKTER ANAK</p>
                    <p class="mt-2 text-sm bg-indigo-100 text-indigo-700 inline-block px-3 py-1 rounded-full">
                        Rabu & Sabtu 09.00 - 12.00
                    </p>
                </div>
            </div>

            <!-- Dokter 8 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter8.png') }}" alt="Dokter Kulit"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Riska Amalia, Sp.KK</h3>
                    <p class="text-gray-600 font-semibold">DOKTER SPESIALIS KULIT</p>
                    <p class="mt-2 text-sm bg-red-100 text-red-700 inline-block px-3 py-1 rounded-full">
                        Kamis 14.00 - 17.00
                    </p>
                </div>
            </div>

            <!-- Dokter 9 -->
            <div class="flex flex-col md:flex-row items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter9.png') }}" alt="Dokter THT"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Bayu Pratama, Sp.THT</h3>
                    <p class="text-gray-600 font-semibold">DOKTER SPESIALIS THT</p>
                    <p class="mt-2 text-sm bg-orange-100 text-orange-700 inline-block px-3 py-1 rounded-full">
                        Selasa 09.00 - 12.00
                    </p>
                </div>
            </div>

            <!-- Dokter 10 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-white shadow p-6 rounded-lg">
                <img src="{{ asset('images/dokter10.png') }}" alt="Dokter Bedah"
                    class="h-40 w-40 rounded-full object-cover shadow">
                <div>
                    <h3 class="text-xl font-bold">dr. Ahmad Fauzan, Sp.B</h3>
                    <p class="text-gray-600 font-semibold">DOKTER BEDAH</p>
                    <p class="mt-2 text-sm bg-gray-100 text-gray-700 inline-block px-3 py-1 rounded-full">
                        Jumat 13.00 - 16.00
                    </p>
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

        <div class="text-center text-white text-sm py-4 mt-8" style="background-color:#05B7AB;">
            Copyrights © 2025 All Rights Reserved. Powered by
            <span class="font-semibold">RUMAH SAKIT TIRTA NEGARA</span>
        </div>
    </footer>
</body>
</html>