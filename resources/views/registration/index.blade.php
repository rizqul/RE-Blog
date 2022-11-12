@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
            <form action="/registration" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" name="name" id="name" placeholder="Name">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        value="{{ old('username') }}" name="username" id="username" placeholder="Username">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror rounded-bottom"
                        name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-3">Already have account ? Login <a href="/login">Here</a></small>
        </main>
    </div>
</div>
@endsection