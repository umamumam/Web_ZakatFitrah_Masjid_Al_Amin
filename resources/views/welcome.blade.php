<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masjid Al Amin</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        emerald: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            900: '#064e3b',
                        }
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)',
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)',
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)',
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)',
                            },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased selection:bg-emerald-500 selection:text-white">
    <!-- Navbar -->
    <nav class="absolute top-0 left-0 right-0 z-50 flex items-center justify-between p-6 w-full max-w-7xl mx-auto">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-emerald-600 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-500/30">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </div>
            <span class="text-2xl font-bold tracking-tight text-gray-900">Masjid <span class="text-emerald-600">Al Amin</span></span>
        </div>
        <div>
            <a href="/admin/login" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-emerald-700 transition-all duration-300 bg-emerald-50 border border-emerald-100 rounded-full hover:bg-emerald-100 hover:shadow-md hover:border-emerald-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                Login Admin
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative overflow-hidden bg-white min-h-screen flex items-center">
        <!-- Floating Blobs Background -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-emerald-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-emerald-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob" style="animation-delay: 4s;"></div>
        </div>

        <!-- Pattern Overlay -->
        <div class="hidden lg:block absolute inset-0 opacity-5 pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23064e3b\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 w-full pt-32 lg:pt-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="max-w-2xl text-center lg:text-left">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-emerald-50 text-emerald-700 text-sm font-semibold mb-8 ring-1 ring-inset ring-emerald-600/20 shadow-sm">
                        <span class="flex w-2.5 h-2.5 rounded-full bg-emerald-600 mr-2.5 animate-pulse"></span>
                        Pusat Ibadah & Kegiatan Umat
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight text-gray-900 mb-8 leading-[1.1] drop-shadow-sm">
                        Selamat Datang di<br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-400">Masjid Al Amin</span>
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-600 mb-10 leading-relaxed font-medium">
                        Membangun generasi umat yang beriman, berilmu, dan beramal soleh. Mari bersama-sama kita makmurkan baitullah dengan ibadah dan serangkaian kegiatan positif.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="/admin/login" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white transition-all duration-300 bg-emerald-600 rounded-xl shadow-xl hover:bg-emerald-500 hover:shadow-emerald-500/40 hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                            Akses Pengurus
                            <svg class="w-5 h-5 ml-2 -mr-1 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                    
                    <div class="mt-10 flex items-center justify-center lg:justify-start gap-6 text-sm text-gray-500 font-medium">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Nyaman
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Aman
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            Sejuk
                        </div>
                    </div>
                </div>
                
                <!-- Image/Visual -->
                <div class="relative w-full pb-16 lg:pb-0 z-20">
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-400 to-emerald-200 rounded-[2.5rem] transform rotate-3 scale-[1.02] opacity-50 blur-xl transition-transform duration-500 group-hover:rotate-6"></div>
                    <div class="relative overflow-hidden bg-white/40 ring-1 ring-gray-900/5 backdrop-blur-sm rounded-[2rem] shadow-2xl p-3 lg:p-4 rotate-0 lg:-rotate-2 hover:rotate-0 transition-transform duration-500">
                        <div class="overflow-hidden rounded-2xl relative">
                            <!-- Image Hover Zoom Effect inside container -->
                            <img 
                                src="https://lh3.googleusercontent.com/gps-cs-s/AHVAweqAj2WQ6f4sEm6j8S3TuSHMYZgK7cesd8XMyr2JEZGppVbZ9OGgZ_70779fyGbB1pIKq6VTwXA5k93kP2Q6pe-aB0nWmky-atx0ktEYo-jX_mH6DdHuebKgFBEkHTzM7kaaW0pE=s680-w680-h510-rw" 
                                alt="Masjid Al Amin" 
                                class="w-full h-auto object-cover aspect-[4/3] transform transition-transform duration-700 hover:scale-105"
                            >
                            <!-- Inner decorative border -->
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-black/10 pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Elegant Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-0">
            <svg class="relative block w-full h-[60px] lg:h-[120px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-emerald-100"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-emerald-200"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-emerald-50"></path>
            </svg>
        </div>
    </div>
</body>
</html>
