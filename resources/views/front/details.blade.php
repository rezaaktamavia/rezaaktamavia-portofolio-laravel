<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas - E-Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    {{-- Navbar --}}
    <nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
        <a href="{{ route('front.index') }}" class="text-xl font-bold text-indigo-600">E-Learning</a>
        <div class="flex gap-4">
            @auth
                <span class="text-gray-600">Halo, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-red-500 hover:underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-1 rounded hover:bg-indigo-700">Register</a>
            @endauth
        </div>
    </nav>

    {{-- Detail Kelas --}}
    <section class="py-12 px-8 max-w-4xl mx-auto">
        <div class="bg-white shadow rounded-lg overflow-hidden">

            {{-- Thumbnail --}}
            <img src="{{ Storage::url($course->thumbnail) }}" alt="{{ $course->name }}" class="w-full h-64 object-cover">

            <div class="p-6">
                {{-- Kategori & Nama --}}
                <span class="text-xs bg-indigo-100 text-indigo-600 px-2 py-1 rounded">
                    {{ $course->category->name ?? '-' }}
                </span>
                <h2 class="text-3xl font-bold text-gray-800 mt-3">{{ $course->name }}</h2>
                <p class="text-gray-500 mt-1">oleh {{ $course->teacher->name ?? '-' }}</p>

                {{-- Tentang Kelas --}}
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Tentang Kelas</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $course->about }}</p>
                </div>

                {{-- Keypoints --}}
                @if($course->courseKeypoints->count() > 0)
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Yang Akan Kamu Pelajari</h3>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($course->courseKeypoints as $keypoint)
                            <li class="text-gray-600">{{ $keypoint->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Video List --}}
                @if($course->courseVideos->count() > 0)
                <div class="mt-6">
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Materi Kelas</h3>
                    <ul class="space-y-2">
                        @foreach($course->courseVideos as $video)
                            <li class="bg-gray-50 px-4 py-3 rounded flex items-center gap-3">
                                <span class="text-indigo-500">▶</span>
                                <span class="text-gray-700">{{ $video->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Tombol Checkout --}}
                <div class="mt-8">
                    @auth
                        <a href="{{ route('front.checkout') }}"
                            class="bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700">
                            Daftar Sekarang
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="bg-indigo-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-indigo-700">
                            Login untuk Daftar
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-indigo-600 text-white text-center py-6 mt-8">
        <p>&copy; {{ date('Y') }} E-Learning Reza. All rights reserved.</p>
    </footer>

</body>
</html>