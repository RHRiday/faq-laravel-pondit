@extends('layouts/app')

@section('content')
    <div class="container relative items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 mt-8">
        <div class="mx-auto sm:px-6 lg:px-8">
            <form action="{{ isset($id) ? route('update', $id) : route('store') }}" method="POST">
                @csrf
                @isset($id)
                    @method('PUT')
                @endisset

                <div class="form-group">
                    <label class="font-weight-bolder" for="question">Question:</label>
                    <input type="text" class="form-control form-control-lg" id="question"
                        value="{{ isset($id) ? $que : '' }}" placeholder="Type out the Question" required>
                </div>
                <div class="form-group">
                    <label class="font-weight-bolder" for="answer">Answer:</label>
                    <input type="text" class="form-control" id="answer" value="{{ isset($id) ? $ans : '' }}"
                        placeholder="Type out the Answer" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-outline-primary" type="submit" class="form-control" value="Submit">
                </div>
            </form>
        </div>
    </div>
@endsection
