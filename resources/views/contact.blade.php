{{-- resources/views/kontak.blade.php --}}
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

    <section class="relative bg-gradient-to-b from-teal-400 to-teal-200 py-12 overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold text-center text-black mb-8">
                KONTAK DARURAT
            </h2>

            <!-- Konten utama -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <!-- Kiri (info darurat) -->
                <div class="text-center md:text-left space-y-10">
                    <!-- Nomor IGD -->
                    <div>
                        <div class="flex items-center justify-center md:justify-start space-x-3 mb-2">
                            <div class="bg-white w-12 h-12 rounded-full flex items-center justify-center shadow">
                                <img src="{{ asset('images/phone.png') }}" alt="Telepon" class="w-6 h-6">
                            </div>
                            <p class="text-2xl md:text-3xl font-bold text-black">+62 859-7253-1422</p>
                        </div>
                        <div class="flex justify-center md:justify-start mt-2">
                            <span class="px-4 py-1 bg-white rounded-full text-black font-semibold text-sm shadow">
                                IGD 24 JAM
                            </span>
                        </div>
                    </div>

                    <!-- Nomor Ambulans -->
                    <div>
                        <p class="text-2xl md:text-3xl font-bold text-black text-center md:text-left">118 / 119</p>
                        <div class="flex justify-center md:justify-start mt-2">
                            <span class="px-4 py-1 bg-white text-black font-semibold text-sm rounded-full shadow">
                                AMBULANS
                            </span>
                        </div>
                    </div>

                    <!-- Catatan -->
                    <p class="italic text-gray-700 text-sm mt-10 max-w-md text-left">
                        “Sebutkan nama pasien, lokasi, dan kondisi darurat <br>
                        secara singkat agar petugas dapat menyiapkan bantuan.”
                    </p>
                </div>

                <!-- Kanan (gambar dokter dari kamu) -->
                <div class="relative flex justify-center md:justify-start">
                    <img src="{{ asset('images/dokter.png') }}" alt="Dokter" class="h-80 object-contain relative z-10">
                </div>
            </div>
        </div>

        <!-- ===================== DEKORASI PRINTILAN ===================== -->
        <!-- Kotak miring -->
        <div class="absolute top-12 left-20 w-12 h-12 bg-teal-300/70 rotate-12 rounded-md"></div>
        <div class="absolute top-32 left-1/3 w-10 h-10 bg-teal-200/60 rotate-45 rounded-md"></div>
        <div class="absolute top-20 right-28 w-8 h-8 bg-teal-100/60 rotate-12 rounded-md"></div>

        <!-- Segitiga -->
        <div
            class="absolute bottom-20 left-1/4 w-0 h-0 
             border-l-[35px] border-l-transparent 
             border-r-[35px] border-r-transparent 
             border-t-[55px] border-t-teal-200/70">
        </div>
        <div
            class="absolute bottom-36 right-1/3 w-0 h-0 
             border-l-[25px] border-l-transparent 
             border-r-[25px] border-r-transparent 
             border-t-[40px] border-t-teal-100/60">
        </div>

        <!-- Lingkaran -->
        <div class="absolute -bottom-16 right-10 w-[200px] h-[200px] bg-teal-300/40 rounded-full"></div>
        <div class="absolute top-1/2 -left-12 w-[100px] h-[100px] bg-teal-200/40 rounded-full"></div>
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