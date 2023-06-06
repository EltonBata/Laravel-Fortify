@extends('auth.layout')
@section('title', 'Forgot-Password')
@section('content')

    <div class="">

        <h3 class="text-center">Reset-Password</h3>
        <div class="">

            <form action="{{ route('password.update') }}" method="POST">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="">
                    <label for="" class="">Email:</label>
                    <input type="email" name="email" class="" readonly value="{{ $request->email }}">

                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="">
                    <label for="" class="">Password:</label>
                    <input type="password" name="password"
                        @error('password')
                        is-invalid
                    @enderror class=""
                        required placeholder="*****">

                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="">
                    <label for="" class="">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="" required placeholder="*****">
                </div>

                <div>
                    <button type="submit" class="btn">reset</button>
                </div>
            </form>

        </div>

    </div>

@endsection
