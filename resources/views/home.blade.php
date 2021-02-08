{{-- HOME PAGE --}}
@extends('layouts.app')

@section('main')
    
    <div class="bkd-home-page">
        <div class="container">
            <!-- patsa lunga -->
            @include('partials.cards', [ 'title' => 'LE LUNGHE', 'pastaArray' => $lunghe ])
            <!-- /patsa lunga -->
            <!-- patsa corta -->
            @include('partials.cards', [ 'title' => 'LE CORTE', 'pastaArray' => $corte ])
            <!-- /patsa corta -->
            <!-- patsa cortissima -->
            @include('partials.cards', [ 'title' => 'LE CORTISSIME', 'pastaArray' => $cortissime ])
            <!-- /patsa cortissima -->
        </div>
    </div>
        
@endsection
