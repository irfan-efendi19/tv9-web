<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-emerald-800 leading-tight">
            {{ __('Pusat Kendali TV9 Nusantara') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen" x-data="{ activeTab: 'schedule', showImportModal: false }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-emerald-100 mb-8">
                <div
                    class="p-8 flex items-center justify-between bg-gradient-to-r from-emerald-800 to-emerald-600 text-white">
                    <div>
                        <h1 class="text-3xl font-extrabold mb-2">Assalamu'alaikum, {{ Auth::user()->name }}!</h1>
                        <p class="text-emerald-100 opacity-90 mb-4">Selamat datang di sistem manajemen konten TV9
                            Nusantara.</p>
                        <a href="{{ route('profile.edit') }}"
                            class="inline-flex items-center px-4 py-2 bg-white/10 hover:bg-white/20 text-white text-xs font-bold rounded-lg border border-white/20 transition-all">
                            ⚙️ Pengaturan Profil
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div
                            class="w-16 h-16 rounded-full bg-yellow-500/20 flex items-center justify-center border border-yellow-500/30">
                            <span class="text-yellow-400 text-2xl">🌙</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Flash Messages --}}
            @if(session('import_success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl flex items-start gap-3">
                <span class="text-xl mt-0.5">✅</span>
                <div>
                    <p class="font-bold">{{ session('import_success') }}</p>
                    @if(session('import_errors'))
                        <ul class="mt-2 text-xs text-emerald-700 list-disc list-inside">
                            @foreach(session('import_errors') as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            @endif
            @if(session('import_error'))
            <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-800 rounded-2xl flex items-start gap-3">
                <span class="text-xl mt-0.5">❌</span>
                <p class="font-bold">{{ session('import_error') }}</p>
            </div>
            @endif

            {{-- Import Modal --}}
            <div x-show="showImportModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm" style="display:none;">
                <div @click.away="showImportModal = false" class="bg-white rounded-3xl shadow-2xl w-full max-w-lg p-8">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-xl font-bold text-slate-800">Upload Jadwal via CSV</h2>
                            <p class="text-sm text-slate-500 mt-1">File CSV dapat dibuat dari Microsoft Excel atau Google Sheets.</p>
                        </div>
                        <button @click="showImportModal = false" class="text-slate-400 hover:text-slate-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    <div class="bg-slate-50 rounded-2xl p-4 mb-6 text-sm text-slate-600">
                        <p class="font-bold text-slate-700 mb-2">📋 Format kolom yang diperlukan:</p>
                        <code class="text-xs bg-white border border-slate-200 px-3 py-2 rounded-lg block font-mono">
                            nama_program | kategori | hari | waktu_mulai | waktu_selesai | deskripsi
                        </code>
                        <p class="mt-2 text-xs text-slate-400">Kolom "hari" diisi: Senin, Selasa, Rabu, Kamis, Jumat, Sabtu, atau Minggu</p>
                    </div>

                    <form action="{{ route('program.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="border-2 border-dashed border-slate-200 rounded-2xl p-8 text-center mb-6 hover:border-emerald-400 transition-colors cursor-pointer" onclick="document.getElementById('csv-file').click()">
                            <svg class="w-10 h-10 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            <p class="text-slate-500 font-medium text-sm">Klik untuk pilih file CSV</p>
                            <p class="text-slate-400 text-xs mt-1">Format: .csv (max 2MB)</p>
                            <input id="csv-file" name="file" type="file" accept=".csv,.txt" class="hidden" onchange="document.getElementById('filename-label').textContent = this.files[0]?.name || 'Belum ada file'">
                        </div>
                        <p id="filename-label" class="text-center text-xs text-slate-400 -mt-4 mb-6">Belum ada file dipilih</p>

                        <div class="flex gap-3">
                            <a href="{{ route('program.template') }}" class="flex-1 text-center py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-sm rounded-xl transition-colors">
                                📥 Unduh Template
                            </a>
                            <button type="submit" class="flex-1 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold text-sm rounded-xl transition-all shadow-lg shadow-emerald-700/20">
                                Upload & Import
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tab Navigation -->
            <div class="flex gap-4 mb-8 overflow-x-auto pb-2">
                <button @click="activeTab = 'schedule'"
                    :class="activeTab === 'schedule' ? 'bg-emerald-700 text-white shadow-lg' : 'bg-white text-emerald-700 hover:bg-emerald-50 border border-emerald-100'"
                    class="px-6 py-3 rounded-xl font-bold transition-all duration-300 flex items-center gap-2 shrink-0">
                    <span>📅</span> Kelola Jadwal Siaran
                </button>
                <button @click="activeTab = 'catalog'"
                    :class="activeTab === 'catalog' ? 'bg-emerald-700 text-white shadow-lg' : 'bg-white text-emerald-700 hover:bg-emerald-50 border border-emerald-100'"
                    class="px-6 py-3 rounded-xl font-bold transition-all duration-300 flex items-center gap-2 shrink-0">
                    <span>🎬</span> Katalog Program (Feature)
                </button>
            </div>

            <!-- Tab Content: Schedule -->
            <div x-show="activeTab === 'schedule'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex flex-wrap justify-between items-center gap-3 bg-slate-50/50">
                        <h3 class="font-bold text-lg text-slate-800">Manajemen Jadwal Tayang</h3>
                        <div class="flex flex-wrap items-center gap-2">
                            <button @click="showImportModal = true" class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-bold rounded-lg transition-colors gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l4-4m0 0l4 4m-4-4v12"/></svg>
                                Upload CSV
                            </button>
                            <a href="{{ route('program.create') }}" class="inline-flex items-center px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-bold rounded-lg transition-colors">
                                + Tambah Jadwal
                            </a>
                        </div>
                    </div>
                    <div class="p-0 overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[10px] uppercase tracking-widest font-black">
                                    <th class="px-6 py-4">Hari</th>
                                    <th class="px-6 py-4">Waktu</th>
                                    <th class="px-6 py-4">Program</th>
                                    <th class="px-6 py-4">Kategori</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @php
                                $dayNames = [
                                1 => 'Senin',
                                2 => 'Selasa',
                                3 => 'Rabu',
                                4 => 'Kamis',
                                5 => 'Jumat',
                                6 =>
                                'Sabtu',
                                7 => 'Minggu'
                                ];
                                $groupedPrograms =
                                \App\Models\Program::orderBy('day_of_week')->orderBy('start_time')->get()->groupBy('day_of_week');
                                @endphp
                                @forelse($groupedPrograms as $dayNum => $dayPrograms)
                                <tr class="bg-emerald-50/50">
                                    <td colspan="5"
                                        class="px-6 py-2 text-xs font-black text-emerald-800 uppercase tracking-widest border-y border-emerald-100">
                                        {{ $dayNames[$dayNum] }}
                                    </td>
                                </tr>
                                @foreach($dayPrograms as $prog)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-4 text-sm font-bold text-emerald-700">
                                        {{ $dayNames[$prog->day_of_week] }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-600 font-medium">
                                        {{ \Carbon\Carbon::parse($prog->start_time)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($prog->end_time)->format('H:i') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-bold text-slate-900">{{ $prog->title }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-slate-100 text-slate-600 text-[10px] font-bold rounded-md">{{ $prog->category ?? 'Umum' }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <a href="{{ route('program.edit', $prog) }}"
                                                class="p-2 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">Edit</a>
                                            <form action="{{ route('program.destroy', $prog) }}" method="POST"
                                                class="inline"
                                                onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                                @csrf @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-20 text-center text-slate-400">Belum ada data jadwal.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tab Content: Catalog -->
            <div x-show="activeTab === 'catalog'" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                        <h3 class="font-bold text-lg text-slate-800">Manajemen Katalog Program</h3>
                        <a href="{{ route('catalog.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white text-sm font-bold rounded-lg transition-colors">
                            + Tambah Program
                        </a>
                    </div>
                    <div class="p-0 overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 text-[10px] uppercase tracking-widest font-black">
                                    <th class="px-6 py-4">Judul Program</th>
                                    <th class="px-6 py-4">Kategori</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @php
                                $catalogs = \App\Models\Catalog::latest()->get();
                                @endphp
                                @forelse($catalogs as $item)
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-4">
                                            @if($item->image_url)
                                            <img src="{{ $item->image_url }}"
                                                class="w-10 h-10 rounded-lg object-cover bg-slate-200">
                                            @else
                                            <div
                                                class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-700 font-bold">
                                                9</div>
                                            @endif
                                            <div class="text-sm font-bold text-slate-900">{{ $item->title }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-yellow-50 text-yellow-700 text-[10px] font-bold rounded-md uppercase tracking-wider">{{ $item->category ?? 'Program' }}</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <a href="{{ route('catalog.edit', $item) }}"
                                                class="p-2 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all">Edit</a>
                                            <form action="{{ route('catalog.destroy', $item) }}" method="POST"
                                                class="inline"
                                                onsubmit="return confirm('Hapus program ini dari katalog?')">
                                                @csrf @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-20 text-center text-slate-400">Katalog masih kosong.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>