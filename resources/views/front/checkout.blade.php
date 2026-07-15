<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - E-Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    {{-- Navbar --}}
    <nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
        <a href="{{ route('front.index') }}" class="text-xl font-bold text-indigo-600">E-Learning</a>
        <div class="flex gap-4">
            <span class="text-gray-600">Halo, {{ auth()->user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-500 hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    {{-- Checkout Form --}}
    <section class="py-12 px-8 max-w-xl mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Halaman Checkout</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="font-semibold text-gray-700 mb-4">Upload Bukti Transfer</h3>

            <form method="POST" action="{{ route('front.checkout.store') }}" enctype="multipart/form-data">
                @csrf

                {{-- Info Pembayaran --}}
                <div class="bg-indigo-50 rounded p-4 mb-6">
                    <p class="text-sm text-gray-600">Transfer ke rekening berikut:</p>
                    <p class="font-bold text-indigo-700 mt-1">BCA - 1234567890</p>
                    <p class="text-sm text-gray-600">a.n Reza Akta Mavia</p>
                </div>

                {{-- Upload Bukti --}}
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Bukti Transfer</label>
                    <input type="file" name="proof" accept="image/*"
                        class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    @error('proof')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 font-semibold">
                    Kirim Bukti Transfer
                </button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-indigo-600 text-white text-center py-6 mt-8">
        <p>&copy; {{ date('Y') }} E-Learning Reza All rights reserved.</p>
    </footer>

</body>
</html>