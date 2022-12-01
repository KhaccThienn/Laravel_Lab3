@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <legend>Form Login</legend>

                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" name="email" placeholder="Email">
                    <small class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">

                    <small class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    </div>
@endsection
