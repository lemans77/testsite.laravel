@extends('layouts.app')

@section('title-head', 'Home page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>{{ __('Home page') }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
