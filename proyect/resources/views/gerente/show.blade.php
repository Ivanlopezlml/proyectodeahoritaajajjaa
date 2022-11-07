@extends('layouts.app')

@section('template_title')
    {{ $gerente->name ?? 'Show Gerente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Gerente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('gerentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $gerente->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $gerente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Tel:</strong>
                            {{ $gerente->numero tel }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
