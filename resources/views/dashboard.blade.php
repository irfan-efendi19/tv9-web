<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-emerald-800 leading-tight">
            {{ __('Pusat Kendali TV9 Nusantara') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen" x-data="{ activeTab: 'schedule' }">
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
                    <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                        <h3 class="font-bold text-lg text-slate-800">Manajemen Jadwal Tayang</h3>
                        <a href="{{ route('program.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-bold rounded-lg transition-colors">
                            + Tambah Jadwal
                        </a>
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