@extends('auth.layout')
@section('title', 'Login')
@section('content')

<div class="">

    <h3 class="text-center">Login</h3>
    <div class="">

            @if (session('status'))
                {{ session('status') }}
            @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="">
                <label for="" class="">Email:</label>
                <input type="email" name="email" class="" required>

                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="">
                <label for="" class="">Password</label>
                <input type="password" name="password" class="" required>


                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div>
                <button type="submit" class="btn">Logon</button>
            </div>
        </form>

    </div>

</div>

@endsection