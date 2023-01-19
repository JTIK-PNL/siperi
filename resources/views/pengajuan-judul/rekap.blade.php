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

                    <table>
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Dosen Pembimbing Pertama</th>
                            <th>Dosen Pembimbing Kedua</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($pengajuan_juduls as $pengajuan_judul)
                            <tr>
                                <td>{{ $pengajuan_judul->id }}</td>
                                <td>{{ $pengajuan_judul->mahasiswa->nim }}</td>
                                <td>{{ $pengajuan_judul->mahasiswa->nama }}</td>
                                <td>{{ $pengajuan_judul->dosen_pembimbing_1st->nama_lengkap }}</td>
                                <td>{{ $pengajuan_judul->dosen_pembimbing_2nd->nama_lengkap }}</td>
                                <td>{{ $pengajuan_judul->status }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6"><i>Data belum tersedia!</i></td>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot></tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
