<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-emerald-800 leading-tight">
            {{ __('Edit Jadwal Siaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200">
                <div class="p-8">
                    <form action="{{ route('program.update', $program) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Nama Program</label>
                                <input type="text" name="title" value="{{ $program->title }}" required class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Hari</label>
                                    <select name="day_of_week" required class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                        @foreach([1 => 'Senin', 2 => 'Selasa', 3 => 'Rabu', 4 => 'Kamis', 5 => 'Jumat', 6 => 'Sabtu', 7 => 'Minggu'] as $val => $name)
                                            <option value="{{ $val }}" {{ $program->day_of_week == $val ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Kategori</label>
                                    <input type="text" name="category" value="{{ $program->category }}" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Waktu Mulai</label>
                                    <input type="time" name="start_time" value="{{ \Carbon\Carbon::parse($program->start_time)->format('H:i') }}" required class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Waktu Selesai</label>
                                    <input type="time" name="end_time" value="{{ \Carbon\Carbon::parse($program->end_time)->format('H:i') }}" required class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat</label>
                                <textarea name="description" rows="3" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">{{ $program->description }}</textarea>
                            </div>
                        </div>

                        <div class="mt-8 flex items-center justify-end gap-4">
                            <a href="{{ route('dashboard') }}" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">Batal</a>
                            <button type="submit" class="px-6 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-lg shadow-emerald-700/20 transition-all">
                                Perbarui Jadwal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
