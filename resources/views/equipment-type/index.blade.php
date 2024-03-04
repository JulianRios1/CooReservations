@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-left justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tipos de equipos</h1>
    </div>
    {!! $html->table() !!}
</div>
@endsection

@push('scripts')
    {!! $html->scripts() !!}
@endpush
