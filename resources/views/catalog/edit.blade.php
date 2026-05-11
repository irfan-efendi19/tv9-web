<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-emerald-800 leading-tight">
            {{ __('Edit Program Katalog') }}
        </h2>
    </x-slot>

    <!-- Croppie.js CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl border border-slate-200">
                <div class="p-8">
                    <form id="catalogForm" action="{{ route('catalog.update', $catalog) }}" method="POST">
                        @csrf @method('PATCH')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Column: Fields -->
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
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi</label>
                                    <textarea name="description" rows="4" class="w-full rounded-xl border-slate-200 focus:border-emerald-500 focus:ring-emerald-500">{{ $catalog->description }}</textarea>
                                </div>
                            </div>

                            <!-- Right Column: Poster Upload & Crop -->
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">Poster Program (Ganti Gambar)</label>
                                <div class="mb-4">
                                    <input type="file" id="upload" accept="image/*" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-all cursor-pointer">
                                </div>
                                
                                <!-- Croppie Container -->
                                <div id="upload-demo" class="hidden rounded-xl overflow-hidden border border-slate-100 bg-slate-50"></div>
                                
                                <!-- Placeholder / Current Image -->
                                <div id="upload-placeholder" class="aspect-[2/3] w-full bg-slate-50 rounded-xl border-2 border-dashed border-slate-200 overflow-hidden relative group">
                                    @if($catalog->image_url)
                                        @php
                                            $posterPath = str_replace('storage/', 'program-poster/', ltrim($catalog->image_url, '/'));
                                        @endphp
                                        <img src="{{ str_starts_with($catalog->image_url, 'http') ? $catalog->image_url : '/' . $posterPath }}" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                            <span class="text-white text-xs font-bold">Pilih file baru untuk mengganti</span>
                                        </div>
                                    @else
                                        <div class="flex flex-col items-center justify-center h-full text-slate-400">
                                            <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                            <span class="text-xs font-medium">Belum ada poster</span>
                                        </div>
                                    @endif
                                </div>

                                <input type="hidden" name="image_data" id="image_data">
                            </div>
                        </div>

                        <div class="mt-10 pt-6 border-t border-slate-100 flex items-center justify-end gap-4">
                            <a href="{{ route('dashboard') }}" class="text-sm font-bold text-slate-400 hover:text-slate-600 transition-colors">Batal</a>
                            <button type="submit" id="save-btn" class="px-8 py-3 bg-emerald-700 hover:bg-emerald-800 text-white font-bold rounded-xl shadow-lg shadow-emerald-700/20 transition-all flex items-center gap-2">
                                <span id="btn-text">Perbarui Program</span>
                                <div id="loader" class="hidden w-4 h-4 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Croppie.js Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    
    <script>
        var $uploadCrop;

        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#upload-demo').removeClass('hidden');
                    $('#upload-placeholder').addClass('hidden');
                    $uploadCrop.croppie('bind', {
                        url: e.target.result
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $uploadCrop = $('#upload-demo').croppie({
            viewport: {
                width: 200,
                height: 300,
                type: 'square'
            },
            boundary: {
                width: 300,
                height: 400
            },
            enableExif: true,
            showZoomer: true,
            enableOrientation: true
        });

        $('#upload').on('change', function () { 
            readFile(this); 
        });

        $('#catalogForm').on('submit', function (ev) {
            if ($('#upload').val()) {
                ev.preventDefault();
                $('#save-btn').prop('disabled', true);
                $('#loader').removeClass('hidden');
                $('#btn-text').text('Memproses...');

                $uploadCrop.croppie('result', {
                    type: 'base64',
                    size: { width: 600, height: 900 },
                    format: 'png',
                    quality: 0.9
                }).then(function (resp) {
                    $('#image_data').val(resp);
                    $('#catalogForm')[0].submit();
                });
            }
        });
    </script>
</x-app-layout>
