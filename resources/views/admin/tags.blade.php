@extends('admin.dashboard')
@section('title', 'tags')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Tags List</h5>
                            <div class="right-options">
                                <ul>
                                    <li>
                                        <a class="btn btn-solid" href="{{ route('admin.tag.add') }}">Add Tag</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                            @if(Session::has('success'))
                            <div class="text-center mb-4">
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="text-center mb-4">
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table all-package theme-table table-product" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Tag Name</th>
                                            <th>Tag Description</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tags as $tag)
                                        <tr>
                                            <td>{{ $tag->libelle_tag }}</td>
                                            <td>{{ $tag->designation_tag }}</td>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $tag->id }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $tag->id }}">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal{{ $tag->id }}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Tag</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('admin.tag.update', $tag->id) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="tagName{{ $tag->id }}">Tag Name</label>
                                                                <input type="text" class="form-control" id="tagName{{ $tag->id }}" name="libelle_tag" value="{{ $tag->libelle_tag }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tagDescription{{ $tag->id }}">Tag Description</label>
                                                                <textarea class="form-control" id="tagDescription{{ $tag->id }}" name="designation_tag">{{ $tag->designation_tag }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Modal -->
                                        
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $tag->id }}" aria-hidden="true" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header d-block text-center">
                                                        <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="remove-box">
                                                            <p>Delete Tag: <strong>{{ $tag->libelle_tag }}</strong>?</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                                                        <form id="formDeleteTag{{ $tag->id }}" action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal" id="confirmDeleteButton{{ $tag->id }}">Yes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Delete Modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
