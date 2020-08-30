@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-3 bg-secondary text-white">{{ __('Sveiki atvykę!!!') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Jus esate prįsijungęs!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
