<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buat Akun - RS Tirta Negara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-200 flex items-center justify-center">
    <!-- Frame -->
    <div class="w-[900px] h-[560px] bg-white rounded-md shadow-md overflow-hidden flex relative">

        <!-- LEFT (sidebar) -->
        <aside class="w-[310px] h-full bg-gradient-to-b from-teal-500 to-teal-300 relative overflow-hidden">
            <!-- Badge putih kiri atas -->
            <div
                class="absolute top-0 left-0 bg-white w-[250px] h-[92px] rounded-r-[70px] shadow-sm flex items-center px-4 z-10">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-20 h-20 mr-3 object-contain" />
                <div class="leading-tight">
                    <div class="text-[13px] font-bold text-sky-800 uppercase tracking-wide">RUMAH SAKIT</div>
                    <div class="text-[13px] font-bold text-sky-800 uppercase tracking-wide">TIRTA NEGARA</div>
                </div>
            </div>

            <!-- Kotak diamond (dekor) -->
            <div class="absolute top-[140px] left-10 w-[56px] h-[56px] bg-teal-300/90 rotate-45 rounded-[8px]"></div>
            <div class="absolute top-[270px] left-[120px] w-[64px] h-[64px] bg-teal-300/90 rotate-45 rounded-[8px]">
            </div>

            <!-- SEGITIGA KIRI TENGAH -->
            <div
                class="absolute top-[200px] left-0 w-0 h-0
                border-l-[0px] border-l-transparent
                border-r-[100px] border-r-transparent
                border-b-[140px] border-b-teal-200/60">
            </div>

            <!-- SEGITIGA KIRI BAWAH -->
            <div
                class="absolute -bottom-6 left-[-50px] w-0 h-0
                border-l-[100px] border-l-transparent
                border-r-[100px] border-r-transparent
                border-t-[160px] border-t-teal-200/50 rotate-[18deg]">
            </div>

            <!-- Fade bawah -->
            <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-white/70 to-transparent"></div>
        </aside>

        <!-- RIGHT (form area + dekor) -->
        <main class="flex-1 relative flex items-center justify-center">
            <!-- Segitiga kanan atas -->
            <div
                class="absolute -top-12 right-[300px] w-0 h-0
                border-l-[90px] border-l-transparent
                border-r-[90px] border-r-transparent
                border-t-[140px] border-t-teal-200/80 rotate-[18deg]">
            </div>

            <!-- Circle kanan -->
            <div class="absolute bottom-[120px] -right-[235px] w-[290px] h-[290px] bg-teal-300/40 rounded-full"></div>

            <!-- Kotak kanan atas -->
            <div class="absolute -top-6 right-6 w-[80px] h-[80px] bg-teal-200 rounded-[12px] rotate-[12deg] opacity-90">
            </div>

            <!-- Persegi kecil di background putih bawah-kiri -->
            <div
                class="absolute bottom-10 left-16 w-[64px] h-[64px] bg-gradient-to-br from-teal-200 to-white rounded-[12px] rotate-[12deg] opacity-90">
            </div>

            <!-- Form -->
            <section class="w-[440px] max-w-full flex flex-col items-center">
                <h1 class="text-3xl font-bold mb-6">Buat Akun</h1>
                <form action="#" method="POST" class="w-full space-y-5">
                    @csrf
                    <!-- Nama -->
                    <div
                        class="flex items-center bg-gradient-to-r from-teal-100 to-teal-50 rounded-md px-3 py-3 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 text-gray-600 mr-2">
                            <path d="M10 10a4 4 0 100-8 4 4 0 000 8zM3 18a7 7 0 1114 0H3z" />
                        </svg>
                        <input type="text" name="nama" placeholder="Nama"
                            class="w-full bg-transparent outline-none placeholder-gray-500" />
                    </div>

                    <!-- Email -->
                    <div
                        class="flex items-center bg-gradient-to-r from-teal-100 to-teal-50 rounded-md px-3 py-3 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-5 h-5 text-gray-600 mr-2">
                            <path
                                d="M2.25 6.75A2.25 2.25 0 014.5 4.5h15a2.25 2.25 0 012.25 2.25v.768l-9.75 5.79-9.75-5.79V6.75zm0 2.775v7.725A2.25 2.25 0 004.5 19.5h15a2.25 2.25 0 002.25-2.25V9.525l-9.75 5.79-9.75-5.79z" />
                        </svg>
                        <input type="email" name="email" placeholder="Email"
                            class="w-full bg-transparent outline-none placeholder-gray-500" />
                    </div>

                    <!-- Password -->
                    <div
                        class="flex items-center bg-gradient-to-r from-teal-100 to-teal-50 rounded-md px-3 py-3 shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 text-gray-600 mr-2">
                            <path fill-rule="evenodd"
                                d="M10 2a4 4 0 00-4 4v2H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-1V6a4 4 0 00-4-4zm-2 6V6a2 2 0 114 0v2H8z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" name="password" placeholder="Kata Sandi"
                            class="w-full bg-transparent outline-none placeholder-gray-500" />
                    </div>

                    <!-- Button -->
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
