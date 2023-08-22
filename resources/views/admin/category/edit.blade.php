@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Edit Category</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/categorie') }}" class="btn btn-danger btn-sm text-white float-end">
                                    Back
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card-body">
            <form action="{{ url('admin/categorie/' . $cat->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $cat->name }}" class="form-control">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <label>Slug</label>
                        <input type="text" name="slug" value="{{ $cat->slug }}" class="form-control">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Description</label>
                        <textarea type="text" name="description" class="form-control">{{ $cat->description }}</textarea>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('/uploads/category/' . $cat->image) }}" width="100px" height="100px">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
