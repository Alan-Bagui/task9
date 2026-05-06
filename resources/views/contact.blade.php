@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #007bff; color: white;">
                <h3 class="card-title"><i class="fas fa-envelope mr-2"></i>Envianos un mensaje</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nombre completo</label>
                    <input type="text" class="form-control" placeholder="Juan Perez">
                </div>
                <div class="form-group">
                    <label>Correo electronico</label>
                    <input type="email" class="form-control" placeholder="juan@correo.com">
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje aqui..."></textarea>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-paper-plane mr-1"></i> Enviar mensaje
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #28a745; color: white;">
                <h3 class="card-title"><i class="fas fa-info-circle mr-2"></i>Informacion de contacto</h3>
            </div>
            <div class="card-body">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Direccion</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">Av. Universidad 1234, Ciudad de Mexico</span>
                    </div>
                </div>
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success"><i class="fas fa-phone"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Telefono</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">+52 55 1234 5678</span>
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
                        <span class="info-box-text">Horario</span>
                        <span class="info-box-number" style="font-size: 0.9rem;">Lunes a Viernes: 9:00 - 18:00 hrs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection