@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    {{-- @if (Auth::check())
        <div>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Logged in</strong>
                    <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    </div>
                <div class="toast-body">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
@endsection

@section('footer')
    
@endsection