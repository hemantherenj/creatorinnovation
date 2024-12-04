@extends('ADMIN.layout')

@php
    $title = 'Add Faculty'
@endphp

@section('title', $title)

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('ADMIN.Layouts.BreadCrumb', ['title' => $title])

    <!-- Main content -->
    <section class="content">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><a class="btn btn-danger" href="{{ route('admin.faculty') }}">Back</a></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="container">
                    <div class="col-md-12">
                        <div class="form-appl">
                            <h3>{{ $title }}</h3>
                            <form class="form1" method="post"
                                action="@if (isset($edit->id)) {{ route('faculty.update', ['id' => $edit->id]) }}@else{{ route('faculty.store') }} @endif"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-12 mb-3">
                                    <label for="">Your Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter Your Name"
                                        value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12 mb-3">
                                    <label for="">Designation</label>
                                    <input class="form-control" type="text" name="designation"
                                        placeholder="Enter Your Designation"
                                        value="@if (isset($edit->id)) {{ $edit->designation }}@else {{ old('designation') }} @endif">
                                    @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-5">
                                    <label for="">Photo</label>
                                    <div class="avatar-upload">
                                        <div>
                                            <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg"
                                                onchange="previewImage(this)" />
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="@if (isset($edit->id) && $edit->photo != '') background-image:url('{{ url('/') }}/uploads/{{ $edit->photo }}')@else background-image: url('{{ url('/img/avatar.png') }}') @endif">
                                            </div>
                                        </div>
                                    </div>
                                    @error('photo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                                <a class="btn btn-danger" href="{{ route('admin.faculty') }}">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script>
        function deleteFunction(id) {
            document.getElementById('delete_id').value = id;
            $("#modalDelete").modal('show');
        }
    </script>
@endpush

<style>
    .showPhoto {
        width: 51%;
        height: 54px;
        margin: auto;
    }

    .showPhoto>div {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>