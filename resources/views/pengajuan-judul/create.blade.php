<x-app-layout>
    @section('title', $title)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('pengajuan-judul.store') }}">
                        @csrf

                        <!-- Mahasiswa -->
                        <div>
                            <x-input-label for="mahasiswa_id" :value="__('Mahasiswa')"/>
                            <select name="mahasiswa_id" id="mahasiswa_id" class="block mt-1 w-full" autofocus>
                                <option value="0">Pilih Nama Anda...</option>
                                @foreach ($mahasiswas as $mahasiswa)
                                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nim . ' - ' . $mahasiswa->nama }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('mahasiswa_id')" class="mt-2"/>
                        </div>

                        <!-- Dosen Pembimbing -->
                        <div class="mt-4">
                            <x-input-label for="dosen_pembimbing_1" :value="__('Dosen Pembimbing Pertama')"/>
                            <select name="dosen_pembimbing_1" id="dosen_pembimbing_1" class="block mt-1 w-full" autofocus required>
                                <option value="0">Pilih Dosen Pembimbing Pertama...</option>
                                @foreach ($dosen_pembimbing_1 as $dp_1)
                                    <option value="{{ $dp_1->id }}">{{ $dp_1->nama_lengkap }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('dosen_pembimbing_1')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="dosen_pembimbing_2" :value="__('Dosen Pembimbing Kedua')"/>
                            <select name="dosen_pembimbing_2" id="dosen_pembimbing_2" class="block mt-1 w-full" autofocus required>
                                <option value="0">Pilih Dosen Pembimbing Kedua...</option>
                                @foreach ($dosen_pembimbing_2 as $dp_2)
                                    <option value="{{ $dp_2->id }}">{{ $dp_2->nama_lengkap }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('dosen_pembimbing_2')" class="mt-2"/>
                        </div>

                        <!-- Judul Pertama -->
                        <div class="mt-4">
                            <x-input-label for="judul_1" :value="__('Judul Pertama')"/>
                            <x-text-input id="judul_1" class="block mt-1 w-full" type="text" name="judul_1" :value="old('judul_1')" required autofocus/>
                            <x-input-error :messages="$errors->get('judul_1')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="referensi_1" :value="__('Referensi Judul Pertema')"/>
                            <x-text-input id="referensi_1" class="block mt-1 w-full" type="text" name="referensi_1" :value="old('referensi_1')" required autofocus/>
                            <x-input-error :messages="$errors->get('referensi_1')" class="mt-2"/>
                        </div>

                        <!-- Judul Kedua -->
                        <div class="mt-4">
                            <x-input-label for="judul_2" :value="__('Judul Kedua')"/>
                            <x-text-input id="judul_2" class="block mt-1 w-full" type="text" name="judul_2" :value="old('judul_2')" required autofocus/>
                            <x-input-error :messages="$errors->get('judul_2')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="referensi_2" :value="__('Referensi Judul Kedua')"/>
                            <x-text-input id="referensi_2" class="block mt-1 w-full" type="text" name="referensi_2" :value="old('referensi_2')" required autofocus/>
                            <x-input-error :messages="$errors->get('referensi_2')" class="mt-2"/>
                        </div>

                        <!-- Judul Ketiga -->
                        <div class="mt-4">
                            <x-input-label for="judul_3" :value="__('Judul Ketiga')"/>
                            <x-text-input id="judul_3" class="block mt-1 w-full" type="text" name="judul_3" :value="old('judul_3')" required autofocus/>
                            <x-input-error :messages="$errors->get('judul_3')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="referensi_3" :value="__('Referensi Judul Ketiga')"/>
                            <x-text-input id="referensi_3" class="block mt-1 w-full" type="text" name="referensi_3" :value="old('referensi_3')" required autofocus/>
                            <x-input-error :messages="$errors->get('referensi_3')" class="mt-2"/>
                        </div>

                        <!-- Submit -->
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
                                {{ __('Batal') }}
                            </a>
                            <x-primary-button class="ml-4">
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
