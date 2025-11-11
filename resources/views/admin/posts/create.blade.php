@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Добавление поста</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <div class="col-12">
                        <form action="{{ route('admin.post.store') }}" method="POST">
                            @csrf
                            <div class="form-group w-25 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="mt-3" name="content" id="summernote">
                                    {{ old('content') }}
                                </textarea>
                            </div>
                            @error('content')
                                <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary mt-3" value="Добавить"></input>
                            </div>
                        </form>
                    </div>
                    <!--begin::Small Box Widget 4-->
                </div>
                <!--end::Small Box Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->

        <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection
