<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-emerald-800 leading-tight">
            {{ __('Tambah Jadwal Siaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200">
                <div class="p-8">
                    <form action="{{ route('program.store') }}" method="POST">
                        @csrf

                        <!-- Error Display -->
                        @if ($errors->any())
                            <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                                <div class="flex items-center gap-3">
                                    <span class="text-red-500 text-xl">⚠️</span>
                                    <div>
                                        <h4 class="text-sm font-bold text-red-800">Gagal Menyimpan</h4>
                                        <ul class="text-xs text-red-700 mt-1 list-disc list-inside">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Program</label>
                                <input type="text" name="title" required
                                    class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500"
                                    placeholder="Contoh: Kiswah Event">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Hari</label>
                                    <select name="day_of_week" required
                                        class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                        <option value="1">Senin</option>
                                        <option value="2">Selasa</option>
                                        <option value="3">Rabu</option>
                                        <option value="4">Kamis</option>
                                        <option value="5">Jumat</option>
                                        <option value="6">Sabtu</option>
                                        <option value="7">Minggu</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                                    <select name="category" required
                                        class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                        <option value="religi">Religi</option>
                                        <option value="berita">Berita</option>
                                        <option value="hiburan">Hiburan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Waktu Mulai</label>
                                    <input type="time" name="start_time" required
                                        class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Waktu Selesai</label>
                                    <input type="time" name="end_time" required
                                        class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat</label>
                                <textarea name="description" rows="3"
                                    class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500"></textarea>
                            </div>
                        </div>

                        <div class="mt-8 flex items-center justify-end gap-4">
                            <a href="{{ route('dashboard') }}"
                                class="text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">Batal</a>
                            <button type="submit"
                                class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-lg shadow-emerald-700/20 transition-all">
                                Simpan Jadwal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>