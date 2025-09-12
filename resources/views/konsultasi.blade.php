{{-- resources/views/konsultasi.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi - RS Tirta Negara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-200 flex items-center justify-center">
    <!-- Frame utama -->
    <div class="w-[900px] h-[560px] bg-white rounded-md shadow-md overflow-hidden flex relative">

        <!-- BAGIAN KIRI -->
        <aside class="w-[310px] h-full bg-gradient-to-b from-teal-500 to-teal-300 relative overflow-hidden">
            <!-- Logo dalam badge putih -->
            <div
                class="absolute top-0 left-0 bg-white w-[250px] h-[92px] rounded-r-[70px] shadow-sm flex items-center px-4 z-10">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20 mr-3 object-contain" />
                <div class="leading-tight">
                    <div class="text-[13px] font-bold text-sky-800 uppercase tracking-wide">RUMAH SAKIT</div>
                    <div class="text-[13px] font-bold text-sky-800 uppercase tracking-wide">TIRTA NEGARA</div>
                </div>
            </div>

            <!-- Dekorasi kotak -->
            <div class="absolute top-[140px] left-10 w-[56px] h-[56px] bg-teal-300/90 rotate-45 rounded-[8px]">
            </div>
            <div class="absolute top-[270px] left-[120px] w-[64px] h-[64px] bg-teal-300/90 rotate-45 rounded-[8px]">
            </div>

            <!-- Dekorasi segitiga -->
            <div
                class="absolute top-[200px] left-0 w-0 h-0
           border-l-[0px] border-l-transparent
           border-r-[100px] border-r-transparent
           border-b-[140px] border-b-teal-200/60">
            </div>
            <div
                class="absolute -bottom-6 left-[-50px] w-0 h-0
                 border-l-[100px] border-l-transparent
                 border-r-[100px] border-r-transparent
                 border-t-[160px] border-t-teal-200/50 rotate-[18deg]">
            </div>

            <!-- Fade bawah -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white/70 to-transparent"></div>
        </aside>

        <!-- BAGIAN KANAN -->
        <main class="flex-1 relative flex items-center justify-center bg-white">
            <!-- Dekorasi -->
            <div
                class="absolute -top-12 right-[300px] w-0 h-0
                 border-l-[90px] border-l-transparent
                 border-r-[90px] border-r-transparent
                 border-t-[140px] border-t-teal-200/80 rotate-[18deg]">
            </div>
            <div class="absolute bottom-[120px] -right-[235px] w-[290px] h-[290px] bg-teal-300/40 rounded-full">
            </div>
            <div
                class="absolute -top-6 right-6 w-[80px] h-[80px] bg-teal-200 rounded-[12px] rotate-[12deg] opacity-90">
            </div>
            <div
                class="absolute bottom-10 left-16 w-[64px] h-[64px] bg-gradient-to-br from-teal-200 to-white rounded-[12px] rotate-[12deg] opacity-90">
            </div>

            <!-- Form Konsultasi -->
            <section class="w-[440px] max-w-full flex flex-col items-center">
                <h1 class="text-2xl font-bold mb-8">PELAYANAN KONSULTASI</h1>
                <form action="#" method="POST" class="w-full space-y-5">
                    <!-- Nama Lengkap -->
                    <input type="text" placeholder="Nama Lengkap"
                        class="w-full px-4 py-3 rounded-md bg-gradient-to-r from-teal-100 to-teal-50 placeholder-gray-500 outline-none shadow-sm" />

                    <!-- Keluhan -->
                    <input type="text" placeholder="Keluhan"
                        class="w-full px-4 py-3 rounded-md bg-gradient-to-r from-teal-100 to-teal-50 placeholder-gray-500 outline-none shadow-sm" />

                    <!-- Pilih Poli -->
                    <select
                        class="w-full px-4 py-3 rounded-md bg-gradient-to-r from-teal-100 to-teal-50 text-gray-700 outline-none shadow-sm">
                        <option>Pilih Poli</option>
                        <option>Poli Jantung</option>
                        <option>Poli Anak</option>
                        <option>Poli Mata</option>
                        <option>Poli Saraf</option>
                    </select>

                    <!-- No Telp -->
                    <input type="text" placeholder="No. Telp/Handphone"
                        class="w-full px-4 py-3 rounded-md bg-gradient-to-r from-teal-100 to-teal-50 placeholder-gray-500 outline-none shadow-sm" />

                    <!-- Tombol -->
                    <div class="w-full flex justify-center pt-2">
                        <button type="submit"
                            class="px-8 py-2 rounded-md bg-gradient-to-r from-teal-400 to-teal-200 font-semibold shadow hover:opacity-90">
                            Daftar
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</body>

</html>
