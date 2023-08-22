<div>
    <div class="modal fade" id="deletModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">School Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="model" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyCategory">
                    <div class="modal-body">
                        هل أنت متأكد من مسح هذه المدرسة؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لا</button>
                        <button type="submit" class="btn btn-primary">نعم إمسح</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">School</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('admin/school/create') }}" class="btn btn-primary btn-sm float-end">
                                    Add School
                                </a>
                            </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schools as $school)
                        <tr>
                            <td>{{ $school->id }}</td>
                            <td>{{ $school->name }}</td>
                            <td>{{ $school->address }}</td>
                            <td>
                                <a href="{{ url('admin/school/' . $school->id . '/edit') }}"
                                    class="btn btn-success">Edit</a>
                                <!--<a href="#" wire:click="deleteSchool({{ $school->id }})"
                                    data-bs-toggle="modal" data-bs-toggle="#deletModal"
                                    class="btn btn-danger">Delete</a>-->
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div>
                {{ $schools->links() }}
            </div>
        </div>
    </div>
</div>
