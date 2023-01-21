<x-app-layout>
    @push('styles')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    @endpush
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    @endpush
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
                    <table class="datatable table table-bordered table-striped w-full">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $('.datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('pengajuan-judul.rekap') }}',
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'nim', name: 'nim'},
                        {data: 'nama', name: 'nama'},
                        {data: 'dosen_pembimbing_1st', name: 'dosen_pembimbing_1st', searchable: true, orderable: true},
                        {data: 'dosen_pembimbing_2nd', name: 'dosen_pembimbing_2nd', searchable: true, orderable: true},
                        {data: 'status', name: 'status'},
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
