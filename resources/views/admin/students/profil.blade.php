@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                class="rounded-circle mt-5" width="150px"
                                src="{{ asset('/uploads/student/' . $student->image) }}">

                        </div>
                    </div>
                    <div class="col-md-5 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right"> Personal information</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label class="labels">First Name : </label>
                                    <span class="text-dark">
                                        {{ $student->firstName }}
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Last Name : </label>
                                    <span class="text-dark">
                                        {{ $student->lastName }}
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">Sexe : </label>
                                    <span class="text-dark">
                                        {{ $student->sexe }}
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Date birthday : </label>
                                    <span class="text-dark">
                                        {{ $student->dateOfBirthday }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Category : </label>
                                    <span class="text-dark">
                                        {{ $student->category->name }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">School : </label>
                                    <span class="text-dark">
                                        {{ $student->school->name }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Date d'iscription : </label>
                                    <span class="text-dark">
                                        {{ $student->created_at->format('d-m-Y ') }}
                                    </span>
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Parents information</h4>
                                </div>

                                <div class="col-md-12">
                                    <label class="labels">statut : </label>
                                    <span class="text-dark">
                                        {{ $student->statut }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Statut familly : </label>
                                    <span class="text-dark">
                                        {{ $student->statut_familly }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Father profession : </label>
                                    <span class="text-dark">
                                        {{ $student->father_profession }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Father phone : </label>
                                    <span class="text-dark">
                                        {{ $student->father_phone }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Mother profession : </label>
                                    <span class="text-dark">
                                        {{ $student->mother_profession }}
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label class="labels">Mother phone : </label>
                                    <span class="text-dark">
                                        {{ $student->mother_phone }}
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <form action="{{ url('admin/student') }}" method="PUT" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Koran information</h4>
                                    </div>
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
                                        <div class="mt-5 text-center">
                                            <button type="submit" class="btn btn-primary float-end">Update</button>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class="col-md-6">
                                    <label class="labels">Country</label>
                                    <input type="text"
                                        class="text-dark" placeholder="country" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels">State/Region</label>
                                    <input type="text"
                                        class="text-dark" value="" placeholder="state">
                                </div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center experience">
                                <h4>
                                    Subscriptions information
                                </h4>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <table class="table table-border table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date Abonne</th>
                                            <th>Prix Annuel</th>
                                            <th>Prix Abonne</th>
                                            <th>Prix Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $student->updated_at->format('d-m-Y A') }}</td>
                                            <td>{{ $student->prix_annuel }}</td>
                                            <td>{{ $student->prix_abonne }}</td>
                                            <td>{{ $student->prix_total }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <a href="{{ url('admin/invoice/' . $student->id) }}" class="btn btn-sm btn-info">Imprime
                                </a>
                                <a href="{{ url('admin/invoice/' . $student->id . '/generate') }}" target="_black"
                                    class="btn btn-sm btn-warning">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
@endsection
