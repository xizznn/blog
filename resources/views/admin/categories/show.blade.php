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
            <h3 class="mb-0">{{ $category->title }}</h3>
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
        <div class="row">
          <div class="col-12">
            <table class="table mt-3 w-25">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>{{ $category->id }}</td>
                </tr>
                <tr>
                  <td>Название</td>
                  <td>{{ $category->title }}</td>
                </tr>
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