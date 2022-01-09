@extends('partials.admin_partials')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Dashboard Prestasi</h3>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary">Tambah</a>
            <br>
            <br>
            <table class="table-hover dataTable" style="width: 100%" cellpadding="4" id="basic-datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->content }}</td>
                        <td>{{ $row->img }}</td>
                        <td>{{ $row->active }}</td>
                        <td><a href="" class="btn btn-primary btn-sm">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#basic-datatables').DataTable({});
                
            });
        </script>
    @endpush
@endsection
