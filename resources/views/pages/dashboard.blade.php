@extends('layouts.dashboard')

@section('title', 'Store Dashboard')

@section('content')
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
        <h2 class="dashboard-title">Dashboard</h2>
        <p class="dashboard-subtitle">Look what you have made today!</p>
        </div>
        <div class="dashboard-content">
        <div class="row">
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dashboard-card-title">Customer</div>
                <div class="dashboard-card-subtitle">15,209</div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dashboard-card-title">Revenue</div>
                <div class="dashboard-card-subtitle">Rp. 10000000</div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body">
                <div class="dashboard-card-title">Transactions</div>
                <div class="dashboard-card-subtitle">10,000</div>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transactions</h5>
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-grid gap-2"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-1.png"
                        alt=""
                    />
                    </div>

                    <div class="col-md-4">Shirup Marzzan</div>
                    <div class="col-md-3">Bagas Satrio</div>
                    <div class="col-md-3">19 January, 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-grid gap-2"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-2.png"
                        alt=""
                    />
                    </div>

                    <div class="col-md-4">LeBrone X</div>
                    <div class="col-md-3">Masayoshi</div>
                    <div class="col-md-3">16 January, 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transactions-details.html"
                class="card card-list d-grid gap-2"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="/images/dashboard-icon-product-3.png"
                        alt=""
                    />
                    </div>

                    <div class="col-md-4">Soffa Lembutte</div>
                    <div class="col-md-3">Shayna</div>
                    <div class="col-md-3">11 January, 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img src="/images/dashboard-arrow-right.svg" />
                    </div>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection