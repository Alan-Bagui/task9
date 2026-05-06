@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #007bff; color: white;">
                <h3 class="card-title">Welcome to the Panel</h3>
            </div>
            <div class="card-body">
                <p>This is the administration panel developed as part of Task 9. AdminLTE 3 was integrated with Laravel.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #28a745; color: white;">
                <h3 class="card-title">Used Technologies</h3>
            </div>
            <div class="card-body">
                <ul>
                    <li>Laravel</li>
                    <li>AdminLTE 3</li>
                    <li>Bootstrap 4</li>
                    <li>Blade Templates</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-camera"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Photos</span>
                <span class="info-box-number">6</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-envelope"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Messages</span>
                <span class="info-box-number">3</span>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">12</span>
            </div>
        </div>
    </div>
</div>

@endsection