@extends('layouts.app')

@section('title', 'Photos')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header" style="background: #007bff; color: white;">
                <h3 class="card-title"><i class="fas fa-camera mr-2"></i>Gallery</h3>
            </div>
            <div class="card-body">
                <p>Explore our collection of featured images from different places around the world.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div style="background: #2d1b4e; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌅</div>
            <div class="card-body">
                <h5 class="card-title">Sunrise</h5>
                <p class="card-text text-muted">Morning photograph of the horizon</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div style="background: #0d2b45; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌊</div>
            <div class="card-body">
                <h5 class="card-title">Ocean</h5>
                <p class="card-text text-muted">The relaxed waves of the ocean</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div style="background: #1a2e1a; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🏔️</div>
            <div class="card-body">
                <h5 class="card-title">Mountain</h5>
                <p class="card-text text-muted">Snow-capped peaks at sunset</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div style="background: #3d1a2a; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌸</div>
            <div class="card-body">
                <h5 class="card-title">Spring</h5>
                <p class="card-text text-muted">Flowers in full bloom</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div style="background: #0f1826; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌃</div>
            <div class="card-body">
                <h5 class="card-title">City</h5>
                <p class="card-text text-muted">Urban night lights</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div style="background: #1a3020; height: 150px; display: flex; align-items: center; justify-content: center; font-size: 4rem;">🌿</div>
            <div class="card-body">
                <h5 class="card-title">Forest</h5>
                <p class="card-text text-muted">Path between ancient trees</p>
            </div>
        </div>
    </div>

</div>

@endsection