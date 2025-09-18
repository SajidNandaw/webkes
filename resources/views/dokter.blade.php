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
                <a href="/home" class="hover:text-teal-600">Beranda</a>
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
        <!-- Background Foto -->
        <img src="{{ asset('images/bc.jpeg') }}" alt="Cari Dokter" class="w-full h-72 md:h-96 object-cover">

        <!-- Overlay Gradient -->
        <div class="absolute inset-0 z-10"
            style="background: linear-gradient(to right, #09B8AC 0%, rgba(255,255,255,0.4) 65%, rgba(255,255,255,0.6) 100%);">
        </div>

        <!-- Text -->
        <div class="absolute inset-0 flex items-center justify-start px-8 md:px-16 z-20">
            <div class="text-white max-w-lg">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug drop-shadow">
                    Butuh dokter?<br>Mulai pencarian Anda di sini
                </h1>
                <p class="mt-3 text-base md:text-lg drop-shadow">
                    Kami membantu Anda menemukan dokter dan spesialis yang tepat sesuai kebutuhan kesehatan Anda.
                </p>
            </div>
        </div>

        <div class="absolute bottom-0 right-8 flex items-end z-30">
            <!-- Dokter menunjuk (depan, tangan kelihatan) -->
            <img src="{{ asset('images/d3.png') }}" alt="Dokter 1" class="h-72 md:h-96 object-contain relative z-20">

            <!-- Dokter tablet (belakang, ketimpa tangannya) -->
            <img src="{{ asset('images/d1.png') }}" alt="Dokter 2"
                class="h-64 md:h-80 object-contain relative -ml-16 z-10">
        </div>
    </section>

    <!-- ===================== SEARCH BAR ===================== -->
    <section class="bg-white py-6">
        <div class="container mx-auto px-6">
            <form method="GET" action="{{ route('dokter.index') }}" class="flex justify-center">
                <input type="text" name="search" placeholder="Cari Dokter"
                    value="{{ request('search') }}"
                    class="w-full max-w-lg px-4 py-3 rounded-l-lg border border-gray-300 focus:outline-none">
                <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-5 rounded-r-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <!-- ===================== LIST DOKTER ===================== -->
    <section class="bg-gradient-to-b from-white to-teal-50 py-12">
        <div class="container mx-auto px-6 space-y-12">

            @forelse($dokters as $index => $dokter)
                <div
                    class="flex flex-col {{ $index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse' }} items-center gap-6 bg-teal-100 shadow p-6 rounded-lg">
                    <img src="{{ asset('images/' . $dokter->foto) }}" alt="{{ $dokter->nama }}"
                        class="h-40 w-40 rounded-full object-cover shadow">
                    <div>
                        <h3 class="text-xl font-bold">{{ $dokter->nama }}</h3>
                        <p class="text-gray-600 font-semibold">{{ $dokter->spesialis }}</p>
                        <p
                            class="mt-2 text-sm bg-teal-200 text-teal-800 inline-block px-3 py-1 rounded-full">
                            {{ $dokter->jadwal }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-600">Tidak ada dokter ditemukan.</p>
            @endforelse

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
