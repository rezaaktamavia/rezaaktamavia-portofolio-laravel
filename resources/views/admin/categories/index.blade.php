<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Categories') }}
            </h2>
            <a href="{{ route('admin.categories.create') }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-6">
                @forelse($categories as $category)
                <div class="item-card flex flex-row justify-between items-center border-b border-gray-100 pb-4 last:border-0 last:pb-0" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
                    
                    <div class="flex flex-row items-center gap-x-4" style="display: flex; flex-direction: row; align-items: center; gap: 1rem;">
                        <img src="{{ Storage::url($category->icon) }}" 
                             alt="{{ $category->name }}" 
                             style="width: 120px; height: 90px; object-fit: cover;" 
                             class="rounded-2xl shadow-sm">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $category->name }}</h3>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center text-left" style="display: flex; flex-direction: column; justify-content: center; min-w: 150px;">
                        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider">Date</p>
                        <h3 class="text-indigo-950 text-lg font-bold mt-1">{{ $category->created_at->format('d M Y') }}</h3>
                    </div>

                    <div class="flex flex-row items-center gap-x-3" style="display: flex; flex-direction: row; align-items: center; gap: 0.75rem;">
    
    <a href="{{ route('admin.categories.edit', $category) }}" 
       class="font-bold py-3 px-6 bg-indigo-700 text-white rounded-full text-sm hover:bg-indigo-800 transition" 
       style="background-color: #4338ca; color: white; padding: 12px 24px; border-radius: 9999px; font-weight: bold; text-decoration: none; font-size: 14px;">
        Edit
    </a>
    
    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" 
                class="font-bold py-3 px-6 bg-red-700 text-white rounded-full text-sm hover:bg-red-800 transition" 
                style="background-color: #b91c1c; color: white; padding: 12px 24px; border-radius: 9999px; font-weight: bold; cursor: pointer; border: none; font-size: 14px;">
            Delete
        </button>
    </form>

</div>
                </div>
                @empty
                    <p class="text-center text-gray-500">Belum ada data category.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>