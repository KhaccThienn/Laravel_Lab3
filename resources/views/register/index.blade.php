@extends('layouts.app')

@section('main')
    <div class="container p-5">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                <small class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                <small class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                <small class="text-danger">
                    @error('image')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                <small class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </small>
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password">
                <small class="text-danger">
                    @error('confirmpassword')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
