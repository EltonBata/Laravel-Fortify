@extends('auth.layout')
@section('title', 'Register')

@section('content')


    <div class="">

        <h3 class="text-center">Regsister New Account</h3>
        <div class="">

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="">
                    <label for="" class="">Name:</label>
                    <input type="text" name="name"
                        @error('name')
                         is-invalid
                    @enderror class=""
                        required placeholder="Name">

                    @error('name')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="">
                    <label for="" class="">Birth:</label>
                    <input type="date" name="birth"
                        @error('birth')
                         is-invalid
                    @enderror class=""
                        required>

                    @error('birth')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="">
                    <label for="" class="">Email:</label>
                    <input type="email" name="email"
                        @error('email')
                        is-invalid
                    @enderror class=""
                        required placeholder="Email address">

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
                    <button type="submit" class="btn">register</button>
                </div>
            </form>

        </div>

    </div>

@endsection
