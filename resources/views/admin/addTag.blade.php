@extends('admin.dashboard')
@section('title', 'Add')

@section('content')

<form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('admin.tag.store') }}">
    @csrf

    <div class="page-body">

        <!-- New Tag Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>ADD TAG</h5>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Tag Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Tag Name" name="libelle_tag" value="">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Tag Description</label>
                                        <div class="col-sm-9">
                                            <textarea name="designation_tag" id="description" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary container">ADD <i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

