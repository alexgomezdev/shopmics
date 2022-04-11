@extends('layouts.app')

@section('template_title')
    {{ $comic->name ?? 'Show Comic' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Comic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comics.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $comic->title }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $comic->price }}
                        </div>
                        <div class="form-group">
                            <strong>Isbn:</strong>
                            {{ $comic->isbn }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $comic->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Writer:</strong>
                            {{ $comic->writer }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
