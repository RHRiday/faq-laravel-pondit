@extends('layouts.app')

@section('content')
    <div class="text-center container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <main role="main" class="mt-8 inner cover">
            <h1 class="cover-heading">Welcome to FAQ.</h1>
            <p class="lead">Make your own FAQ page. Please login to go to edit mode. You can also
                view all the FAQs as a guest.
            </p>
            <p class="lead">
                <a href="/faq" class="btn btn-lg btn-info">View</a>
                <a href="/login" class="btn btn-lg btn-success">Login</a>
            </p>
        </main>
        <footer class="mastfoot mt-auto">
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Made by Rifat &copy; PONDITS
                </div>
            </div>
        </footer>
    </div>
@endsection
