@extends('auth.layout')
@section('title', 'Forgot-Password')
@section('content')

    <div class="">

        <h3 class="text-center">Forgot-Password</h3>
        <div class="">

            @if (session('status'))
                {{ session('status') }}
            @endif

            <form action="{{ route('password.request') }}" method="POST">
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

                <div>
                    <button type="submit" class="btn">reset</button>
                </div>
            </form>

        </div>

    </div>

@endsection
