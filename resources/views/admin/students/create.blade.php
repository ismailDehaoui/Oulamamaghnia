@extends('layouts.admin.admin')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Add Student</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/student') }}" class="btn btn-danger btn-sm text-white float-end">
                                    BACK
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @if ($errors->any())
            <div class="alert alert-warning p-3 m-3">
                @foreach ($errors as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <div class="card-body">

            <form action="{{ url('admin/student') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="personalInformation-tab" data-bs-toggle="tab"
                            data-bs-target="#personalInformation-tab-pane" type="button" role="tab"
                            aria-controls="personalInformation-tab-pane" aria-selected="true">
                            Personal information
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="parentInformation-tab" data-bs-toggle="tab"
                            data-bs-target="#parentInformation-tab-pane" type="button" role="tab"
                            aria-controls="parentInformation-tab-pane" aria-selected="false">
                            Parents information
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Details-tab" data-bs-toggle="tab" data-bs-target="#Details-tab-pane"
                            type="button" role="tab" aria-controls="Details-tab-pane" aria-selected="false">
                            Details
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Koran-information-tab" data-bs-toggle="tab"
                            data-bs-target="#Koran-information-tab-pane" type="button" role="tab"
                            aria-controls="Koran information-tab-pane" aria-selected="false">
                            Koran information
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="subscription-tab" data-bs-toggle="tab"
                            data-bs-target="#subscription-tab-pane" type="button" role="tab"
                            aria-controls="subscription-tab-pane" aria-selected="false">
                            Subscriptions
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="personalInformation-tab-pane" role="tabpanel"
                        aria-labelledby="personalInformation-tab" tabindex="0">
                        <div class="mb-3">
                            <label>School</label>
                            <select name="school_id" class="form-control">
                                @foreach ($schools as $school)
                                    <option value="{{ $school->id }}">
                                        {{ $school->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>First Name</label>
                            <input type="text" name="firstName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Date of birthday</label>
                            <input type="date" name="dateOfBirthday" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Sexe</label>
                            <select name="sexe" class="form-control">
                                <option value="homme">
                                    Homme
                                </option>
                                <option value="femme">
                                    Femme
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="parentInformation-tab-pane" role="tabpanel"
                        aria-labelledby="parentInformation-tab" tabindex="0">
                        <div class="mb-3">
                            <label>familial Status</label>
                            <select name="familial_mtatus" class="form-control">
                                <option value="عادي">عادي</option>
                                <option value="يتيم الأب">يتيم الأب</option>
                                <option value="يتيم الأم">يتيم الأم</option>
                                <option value="يتيم الأبوين">يتيم الأبوين</option>
                                <option value="الوالدين مطلقين">الوالدين مطلقين</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Marital Status</label>
                            <select name="marital_mtatus" class="form-control">
                                <option value="ميسورة">ميسورة</option>
                                <option value="معوزة">متوسطة </option>
                                <option value="ضعيفة">ضعيفة</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Father profession</label>
                            <input type="text" name="father_profession" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Father's phone number</label>
                            <input type="text" name="father_phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Mother profession</label>
                            <input type="text" name="mother_profession" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Mother's phone number</label>
                            <input type="text" name="mother_phone" class="form-control">
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="Details-tab-pane" role="tabpanel"
                        aria-labelledby="Details-tab" tabindex="0">
                        <div class="mb-3">
                            <label>هل يعاني من مرض؟ </label>
                            <select name="malad" class="form-control">
                                <option value="1">
                                    Yes
                                </option>
                                <option value="0">
                                    No
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>نوع المرض</label>
                            <input type="text" name="type_malade" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>شهادة الميلاد</label>
                            <input type="file" name="birth_certificate" class="form-control">
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="Koran-information-tab-pane" role="tabpanel"
                        aria-labelledby="Koran-information-tab" tabindex="0">
                        <div class="col-md-12">
                            <label class="labels"> : عدد الأحزاب المحفوظة </label>
                            <input type="number" name="N_parties_the_Koran" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">: الحزب الحالي </label>
                            <input type="number" name="current_party" class="form-control">
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="subscription-tab-pane" role="tabpanel"
                        aria-labelledby="subscription-tab" tabindex="0">
                        <div class="mb-3">
                            <label>التأمين السنوي</label>
                            <input type="number" name="prix_annuel" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>الإشتراك الشهري</label>
                            <input type="number" name="prix_abonne" class="form-control">
                        </div>
                    </div>
                </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </div>
        </form>
    </div>
    </div>
@endsection
