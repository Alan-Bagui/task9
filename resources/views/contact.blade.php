@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #007bff; color: white;">
                <h3 class="card-title"><i class="fas fa-envelope mr-2"></i>Send us a message</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Juan Perez">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="juan@correo.com">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="4" placeholder="Write your message here..."></textarea>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-paper-plane mr-1"></i> Send Message
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #28a745; color: white;">
                <h3 class="card-title"><i class="fas fa-info-circle mr-2"></i>Contact Info</h3>
            </div>
            <div class="card-body">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Address</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">Av. Universidad 1234, Ciudad de Monterrey</span>
                    </div>
                </div>
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success"><i class="fas fa-phone"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Phone Number</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">+52 81 1234 5678</span>
                    </div>
                </div>
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning"><i class="fas fa-envelope"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Email</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">contacto@menuapp.dev</span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-clock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Schedule</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">From Monday to Friday 9:00 - 18:00 hrs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection