@extends('layouts.dashboard')

@section('title', 'Store Settings')

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Store Settngs</h2>
        <p class="dashboard-subtitle">Make store that profitable</p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-12">
            <form action="">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-2">
                        <label>Store Name</label>
                        <input 
                            type="text" 
                            class="form-control"
                        />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Category</label>
                        <select name="category" class="form-select">
                            <option value="" disabled>Select Category</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                        <label>Store</label>
                        <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                        <div class="form-check form-check-inline">
                            <input 
                            type="radio" 
                            class="form-check-input"
                            name="is_store_open"
                            id="openStoreTrue"
                            value="true"
                            >
                            <label for="openStoreTrue" class="custom-control-label">Open</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input 
                            type="radio" 
                            class="form-check-input"
                            name="is_store_open"
                            id="openStoreFalse"
                            value="false"
                            >
                            <label for="openStoreFalse" class="custom-control-label">Temporary Close</label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col text-end">
                        <button type="submit" class="btn btn-success px-5">
                        Save Now
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection