@extends('layouts/app')
@section('option')
    <li class="nav-item badge badge-dark">
        <a href="{{ route('faq.index') }}" class="nav-link text-light">
            <div class="font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 470.586 470.586"
                    fill="currentColor" class="bi bi-plus-circle">
                    <path d="M327.081,0H90.234C74.331,0,61.381,12.959,61.381,28.859v412.863c0,15.924,12.95,28.863,28.853,28.863H380.35
                  c15.917,0,28.855-12.939,28.855-28.863V89.234L327.081,0z M333.891,43.184l35.996,39.121h-35.996V43.184z M384.972,441.723
                  c0,2.542-2.081,4.629-4.635,4.629H90.234c-2.55,0-4.619-2.087-4.619-4.629V28.859c0-2.548,2.069-4.613,4.619-4.613h219.411v70.181
                  c0,6.682,5.443,12.099,12.129,12.099h63.198V441.723z M128.364,128.89H334.15c5.013,0,9.079,4.066,9.079,9.079
                  c0,5.013-4.066,9.079-9.079,9.079H128.364c-5.012,0-9.079-4.066-9.079-9.079C119.285,132.957,123.352,128.89,128.364,128.89z
                  M343.229,198.98c0,5.012-4.066,9.079-9.079,9.079H128.364c-5.012,0-9.079-4.066-9.079-9.079s4.067-9.079,9.079-9.079H334.15
                  C339.163,189.901,343.229,193.968,343.229,198.98z M343.229,257.993c0,5.013-4.066,9.079-9.079,9.079H128.364
                  c-5.012,0-9.079-4.066-9.079-9.079s4.067-9.079,9.079-9.079H334.15C339.163,248.914,343.229,252.98,343.229,257.993z
                  M343.229,318.011c0,5.013-4.066,9.079-9.079,9.079H128.364c-5.012,0-9.079-4.066-9.079-9.079s4.067-9.079,9.079-9.079H334.15
                  C339.163,308.932,343.229,312.998,343.229,318.011z" />
                </svg>
                &nbsp; View
            </div>
        </a>
    </li>
@endsection

@section('content')
    <h1 class="text-center">Add a Question</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="mb-2 alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <form action="{{ isset($id) ? route('faq.update', $id) : route('faq.store') }}" method="POST">
        @csrf
        @isset($id)
            @method('PUT')
        @endisset

        <div class="form-group">
            <label class="font-weight-bolder" for="question">Question:</label>
            <input type="text" class="form-control form-control-lg" id="question" name="question"
                value="{{ isset($id) ? $que : old('question') }}" placeholder="Type out the Question" required>
        </div>
        <div class="form-group">
            <label class="font-weight-bolder" for="answer">Answer:</label>
            <input type="text" class="form-control" id="answer" name="answer" value="{{ isset($id) ? $ans :  old('question')  }}"
                placeholder="Type out the Answer" required>
        </div>
        <div class="form-group">
            <input class="btn btn-outline-primary" type="submit" class="form-control" value="Submit">
        </div>
    </form>
    @isset($id)
        <form action="{{ route('faq.destroy', $id) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-outline-danger" type="submit">Delete</button>
        </form>
    @endisset
@endsection
