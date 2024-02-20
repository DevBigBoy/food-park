@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>
        <div class="card card-secondary">
            <div class="card-header">

            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
