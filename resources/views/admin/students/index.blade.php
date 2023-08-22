@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Students</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/student/create') }}"
                                    class="btn btn-primary btn-sm text-white float-end">
                                    Add Student
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <div class="card-body">
                <form action="" method="GET">
                    <div class="container">
                        <div class="row">
                            <div class="mb-3">
                                <label>Filter by date</label>
                                <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>School</label>
                                <select name="school" class="form-control">
                                    @foreach ($schools as $school)
                                        <option value="{{ $school->id }}">
                                            {{ $school->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Category</label>
                                <select name="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Sexe</label>
                                <select name="sexe" class="form-control">
                                    <option value="homme">homme</option>
                                    <option value="femme">femme</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <br>
                                <button type="submit" class="btn btn-primary">Filter</button>

                            </div>
                        </div>
                    </div>
                </form>


                <div class=" table-responsive">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>School</th>
                                <th>Category</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Prix Annuel</th>
                                <th>Prix Abonne</th>
                                <th>Prix Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>

                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}"
                                            class="text-secondary">
                                            {{ $student->id }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->school->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->category->name }}
                                        </a>
                                    </td>


                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->firstName }}
                                        </a>
                                    </td>


                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->lastName }}
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->prix_annuel }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->prix_abonne }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/profil') }}" class="text-dark">
                                            {{ $student->prix_total }}
                                        </a>
                                    </td>

                                    <td>
                                        <a href="{{ url('admin/student/' . $student->id . '/edit') }}"
                                            class="btn btn-sm btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
