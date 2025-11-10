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
            <h3 class="mb-0">Dashboard</h3>
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
          <div class="col-1">
            <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-primary">Добавить</a>
          </div>
          </div>
          <div class="row">
          <div class="col-6">
            <table class="table mt-3 w-25">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Название</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{{ $category->id }}</td>
                  <td>{{ $category->title }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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