@extends('layouts/app')
@section('option')
    <li class="nav-item badge badge-dark">
        <a href="{{ route('faq.create') }}" class="nav-link text-light">
            <div class="font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                    viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                &nbsp; Create
            </div>
        </a>
    </li>
@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <h1 class="display-4 text-center">Need Help?</h1>
    @foreach ($data as $item)
        <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0 float-left">{{ $item->question }}</h5>
                <a href="{{ route('faq.edit', $item->id) }}" class="btn btn-outline-primary btn-sm float-right">Edit</a>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $item->answer }}</p>
            </div>
        </div>
    @endforeach
    <div class="mb-5">&nbsp;</div>
@endsection
