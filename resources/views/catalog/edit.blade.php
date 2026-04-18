<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-emerald-800 leading-tight">
            {{ __('Edit Program Katalog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200">
                <div class="p-8">
                    <form action="{{ route('catalog.update', $catalog) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Judul Program</label>
                                <input type="text" name="title" value="{{ $catalog->title }}" required class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                                <input type="text" name="category" value="{{ $catalog->category }}" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">URL Gambar Poster</label>
                                <input type="url" name="image_url" value="{{ $catalog->image_url }}" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                                <textarea name="description" rows="4" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">{{ $catalog->description }}</textarea>
                            </div>
                        </div>

                        <div class="mt-8 flex items-center justify-end gap-4">
                            <a href="{{ route('dashboard') }}" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">Batal</a>
                            <button type="submit" class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-lg shadow-emerald-700/20 transition-all">
                                Perbarui Program
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
