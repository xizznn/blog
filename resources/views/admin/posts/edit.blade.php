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
                        <h3 class="mb-0">Редактирование поста</h3>
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
                        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            @csrf
                            <div class="form-group w-50 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                @error('title')
                                    <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="mt-3" name="content" id="summernote">
                                    {{ $post->content }}
                                </textarea>
                            </div>
                            @error('content')
                                <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                            @enderror

                            <div class="form-group mt-3 w-50">
                                <label for="formFile" class="form-label">Добавить превью</label>
                                <div class="w-25">
                                    <img src="{{ asset('storage/' . $post->preview_image) }}" class="w-25" alt="preview_image" style="min-width:300px; height: auto;">
                                </div>
                                <input class="form-control" type="file" id="formFile" name="preview_image">
                            </div>
                            @error('preview_image')
                                <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                            @enderror
                            <div class="form-group mt-3 w-50">
                                <label for="formFile" class="form-label">Добавить главное изображение</label>
                                <div class="w-25">
                                    <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" style="max-width:500px; height: auto;">
                                </div>
                                <input class="form-control" type="file" id="formFile" name="main_image">
                            </div>
                            @error('main_image')
                                <div class="text-danger">Это поле необходимо заполнить {{ $message }}</div>
                            @enderror
                            <div class="form-group mt-3 w-50">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3 w-50">
                                <label>Теги</label>
                                <select class="select2" name="tag_ids[]" multiple="multiple"
                                    data-placeholder="Выберите теги" style="width: 100%;">
                                    @foreach ($tags as $tag)
                                        <option
                                            {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary mt-3" value="Обновить">
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
