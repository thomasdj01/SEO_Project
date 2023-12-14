@extends('Rollercoaster.layout')
@section('content')
<head>
</head>
<body>
@include('layouts.navigation')
    
    <!-- Mainpage -->
   <div class="flex w-100 pt-[141px]">
        <div class="w-1/4">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif 
        </div>
        <div class="w-full fixed text-center">
            <!-- Header -->
            <div class="font-bold m-5">
                Meld je aan voor de nieuwsbrief!
            </div>
            <!-- Body -->
            <div class="font-normal m-5">
                <form action="{{ route('Rollercoaster.store') }}" method="POST">
                @csrf
                <div>
                    <strong>Email:</strong>
                    <input type="email">
                </div>
                <div>
                    <strong>Algemene voorwaarden / privacy</strong>
                    <input type="checkbox">
                </div>
                <div>
                    <button type="submit">Aanmelden</button>
                </div>
            </div>
        </div>
   </div>
  
    
      
</div>
</body> 
@endsection