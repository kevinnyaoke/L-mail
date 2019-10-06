@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('includes.message')

                    <form action="{{url ('/sendmail')}}" method="post">
                    @csrf

                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="Message">Message:</label>
                    <textarea name="user_message" id="user_message" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button class="btn btn-primary">Send</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
