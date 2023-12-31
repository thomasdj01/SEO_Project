@extends('Rollercoaster.layout')
@section('content')
<head>
</head>
<body>
@include('layouts.navigation')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Mainpage -->
   <div class="flex w-100 pt-[141px]">
        <div class="w-1/4">
        </div>
        <div class="w-1/4 fixed">
            <!-- Header -->
            <div class="font-bold m-5">
                Nieuw binnen!
            </div>
            <!-- Body -->
            <div class="font-normal m-5">
                blah blah blah blah
            </div>
        </div>
        <div class="w-2/4">
            <div class="max-h-85 h-screen">
                <!-- Pagina's per div -->
                <a href="/Rollercoaster/show/0">
                    <div class="py-10 bg-slate-300"> 
                        <!-- Header -->
                        <div class="font-bold m-5">
                            Nieuw binnen!
                        </div>
                        <!-- Body -->
                        <div class="font-normal m-5">
                            blah blah blah blah
                        </div>
                    </div>
                </a>
                <!-- Pagina's per div -->
                <a href="/Rollercoaster/show/1"> 
                    <div class="py-10">
                        <!-- Header -->
                        <div class="font-bold m-5">
                            Ongeluk? Servers microsoft neer!
                        </div>
                        <!-- Body -->
                        <div class="py-2.5 font-normal m-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend quam a magna malesuada, at tincidunt nisi rhoncus. Cras ullamcorper metus in eros rhoncus tempus. Morbi dapibus commodo nulla eget feugiat. Morbi non nulla maximus, tincidunt dolor eu, gravida metus. Suspendisse id lacus magna. Morbi at aliquet dolor. Duis neque mi, feugiat ac dolor at, egestas auctor odio. Nullam lectus tellus, suscipit commodo finibus eu, dapibus a turpis. Nulla finibus orci sit amet justo tempus, eu tristique turpis lobortis. Nulla facilisi. Suspendisse pulvinar tortor et quam suscipit, ac gravida mi ornare. Etiam sem mauris, eleifend id eros eu, interdum egestas risus. Nunc aliquet faucibus nibh at vestibulum. Curabitur non elit non turpis sagittis rhoncus rutrum ut lacus. Quisque id turpis in nulla egestas congue ac vitae nunc.
                            Curabitur tincidunt sollicitudin libero, ut vehicula nibh convallis sit amet. Morbi accumsan, odio interdum interdum fringilla, urna lorem eleifend metus, eget fermentum sem elit eget sapien. Curabitur bibendum aliquet nunc, id scelerisque urna semper sed. Curabitur viverra sem id neque consequat, non posuere augue feugiat. Integer sit amet orci vitae metus faucibus porta sit amet ut nunc. Ut sed ultricies odio. Nulla volutpat neque non blandit venenatis. Curabitur ultricies tincidunt dapibus. Nulla facilisi. Etiam vel pretium tellus, quis maximus mi. Praesent commodo fringilla fringilla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet leo luctus magna tempus pharetra. Mauris accumsan arcu erat, vel venenatis libero feugiat vel.
                            Etiam accumsan semper lectus placerat pellentesque. Vivamus convallis leo eu orci scelerisque eleifend. Vestibulum imperdiet sed lacus eu vulputate. Quisque posuere nibh vel dolor sollicitudin ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla eros lectus, convallis nec felis ac, gravida lacinia orci. In sagittis, magna id pulvinar pellentesque, nisi massa pellentesque est, eu sagittis diam purus sit amet dui. Vivamus euismod dictum porttitor. Curabitur urna erat, molestie eu consectetur a, suscipit ac sapien. Suspendisse dictum scelerisque eros, in suscipit lacus pulvinar ut. Morbi dictum sem massa.
                            Fusce vehicula tellus lorem, eu dictum augue efficitur feugiat. Nam accumsan sem mi, nec aliquam sem efficitur vitae. Integer nec arcu ullamcorper, blandit odio et, commodo purus. Phasellus interdum semper nulla, nec hendrerit neque ultricies ut. Duis tempor tellus et tortor dictum efficitur. Pellentesque sodales orci et varius lacinia. Sed accumsan lacus odio, quis cursus turpis pellentesque in.
                            Quisque mollis tempor purus nec fringilla. Phasellus varius justo nunc, non viverra neque sodales eu. Aenean nisi elit, convallis at imperdiet eget, maximus elementum justo. In hac habitasse platea dictumst. Ut sit amet luctus diam. Donec maximus ultrices urna, eu consequat magna laoreet sit amet. Sed vel aliquet mauris. Proin dignissim tellus iaculis interdum aliquam.
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-1/4">
        </div>
        <div class="w-1/4 fixed right-0">
            <a href="https://www.google.com/">
            <div class="font-bold m-5"> Advertentie </div>
            <div><img src="https://wiki.dave.eu/images/4/47/Placeholder.png"></div>
            <div class="font-normal m-2.5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend quam a magna malesuada, at tincidunt nisi rhoncus. </div>
            </a>
        </div>
   </div>
  
    
      
</div>
</body> 
@endsection