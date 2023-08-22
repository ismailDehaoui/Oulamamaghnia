@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Edit Student</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/student') }}" class="btn btn-danger btn-sm text-white float-end">
                                    Back
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="card-body">
            <form action="{{ url('admin/student/' . $student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <label class="labels"> : عدد الأحزاب المحفوظة </label>
                            <input type="number" name="N_parties_the_Koran" class="form-control"
                                value="{{ $student->N_parties_the_Koran }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">: الحزب الحالي </label>
                            <input type="number" name="current_party" class="form-control"
                                value="{{ $student->current_party }}">
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
