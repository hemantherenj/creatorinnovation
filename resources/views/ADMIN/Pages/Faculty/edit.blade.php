@extends('BACKEND.layout')

@php
    $title = 'Edit Faculty'
@endphp

@section('title', $title)

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('BACKEND.Layouts.BreadCrumb', ['title' => $title])

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $index => $row)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->designation }}</td>
                                <td>
                                    <div class="showPhoto">
                                        <div id="imagePreview"
                                            style="@if ($row->photo != '') background-image:url('{{ url('/') }}/uploads/{{ $row->photo }}')@else background-image: url('{{ url('/img/avatar.png') }}') @endif;">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href={{ route('dashboard.edit', ['id' => $row->id]) }} class="btn btn-primary"> Edit</a>
                                    <button class="btn btn-danger"
                                        onClick="deleteFunction('{{ $row->id }}')">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No Users Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('BACKEND/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('BACKEND/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush