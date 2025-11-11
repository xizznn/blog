@extends('admin.layouts.main')
@section('content')
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Редактирование поста</h3></div>
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
              <form action="{{ route('admin.post.update', $post->id) }}" class="w-25" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Название</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                @error('title')
                <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                @enderror
                </div>
                <input type="submit" class="btn btn-primary mt-3" value="Обновить"></input>
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
