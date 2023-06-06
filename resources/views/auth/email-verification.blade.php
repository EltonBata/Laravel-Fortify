 @extends('auth.layout')
 @section('title', 'Forgot-Password')
 @section('content')


     @if (session('status'))
         {{ session('status') }}
     @endif

     You Must Verify your email.


     <form action="{{ route('verification.send') }}" method="POST">
         @csrf

         <div>
             <button type="submit" class="btn">resend email</button>
         </div>
     </form>

 @endsection
