@extends('layouts/app')
@section('option')
    <li class="nav-item badge badge-dark">
        <a href="{{ route('create') }}" class="nav-link text-light">
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
    <div class="relative items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="container mt-8">
            <h1 class="display-4 text-center">Need Help?</h1>
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0 float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <a href="{{route('edit', 1)}}" class="btn btn-outline-primary btn-sm float-right">Edit</a>
                </div>
                <div class="card-body">
                    <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">
                    <h5 class="mb-0 float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h5>
                    <a href="{2}/edit" class="btn btn-outline-primary btn-sm float-right">Edit</a>
                </div>
                <div class="card-body">
                    <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Made by Rifat &copy; PONDITS
            </div>
        </div>
    </div>
@endsection
