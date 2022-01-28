@extends('layouts.dashboard')

@section('title', 'Store Dashboard Product Detail')

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Shirup Marzan</h2>
        <p class="dashboard-subtitle">Product Details</p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('dashboard-product-update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-group mb-2">
                                    <label>Product Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        value="{{ $product->name }}"
                                    />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-group mb-2">
                                    <label>Price</label>
                                    <input
                                        type="number"
                                        name="price"
                                        class="form-control"
                                        value="{{ $product->price }}"
                                    />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                    <label>Category</label>
                                    <select name="categories_id" class="form-select">
                                        <option value="{{ $product->categories_id }}">Tidak diganti " {{ $product->category->name }} "</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group mb-2">
                                    <label>Description</label>
                                    <textarea name="description" id="editor">{!! $product->description !!}</textarea>
                                    </div>
                                </div>                    
                            </div>
                            <div class="row">
                                <div class="col d-grid gap-2">
                                    <button
                                    type="submit"
                                    class="btn btn-success"
                                    >
                                    Update Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @foreach ($product->galleries as $gallery)
                                <div class="gallery-container">
                                    <img
                                    src="{{ Storage::url($gallery->photos ?? '') }}"
                                    alt=""
                                    class="w-100"
                                    />
                                    <a href="{{ route('dashboard-product-gallery-delete', $gallery->id) }}" class="delete-gallery">
                                    <img src="/images/icon-delete.svg" alt="" />
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            </div>
                            <div class="col-12 d-grid gap-2 mt-3">
                                <form action="{{ route('dashboard-product-gallery-upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="products_id" value="{{ $product->id }}">
                                    <input type="file" name="photos" id="file" style="display: none;" multiple onchange="form.submit()">
                                    <button type="button" class="btn btn-secondary mt-3" onclick="thisFileUpload()">
                                        Add Photo
                                    </button>
                                </form>
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

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
      CKEDITOR.replace("editor");
</script>
<script>
    function thisFileUpload() {
        document.getElementById("file").click();
    }
</script>
@endpush