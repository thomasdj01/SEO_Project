@extends('Rollercoaster.layout')
  
@section('content')

@include('layouts.navigation')
    
    @if ($errors->any())
    <div class="w-100">
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    </div>
    @endif
    <form action="{{ route('Rollercoaster.store') }}" method="POST">
    @csrf
    <div class="w-100 flex pt-[141px] h-screen bg-slate-400">
        <div class="w-1/4 left-0">
            <!-- Header -->
            <div class="font-bold m-5">
                Ongeluk? Servers microsoft neer!
            </div>
            <!-- Body -->
            <div class="font-normal m-5">
                bla bla bla
            </div>
        </div>
        <div class="h-full w-3/4 bg-slate-300 right-0">
                <!-- Pagina's per div -->
                <div class="flex"> 
                    <!-- Header -->
                    <div class="flex-col">
                        <div class="p-5"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4a4UkTGSVLFolVEtZwbNHJgKqj_DdsMdMGw&s" height="250px" width="250px"></div>
                        <div class="font-normal m-5">
                            bla bla bla
                        </div>
                    </div>
                    </form>
                    <div class="w-full"> 
                        <div class="font-normal m-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend quam a magna malesuada, at tincidunt nisi rhoncus. Cras ullamcorper metus in eros rhoncus tempus. Morbi dapibus commodo nulla eget feugiat. Morbi non nulla maximus, tincidunt dolor eu, gravida metus. Suspendisse id lacus magna. Morbi at aliquet dolor. Duis neque mi, feugiat ac dolor at, egestas auctor odio. Nullam lectus tellus, suscipit commodo finibus eu, dapibus a turpis. Nulla finibus orci sit amet justo tempus, eu tristique turpis lobortis. Nulla facilisi. Suspendisse pulvinar tortor et quam suscipit, ac gravida mi ornare. Etiam sem mauris, eleifend id eros eu, interdum egestas risus. Nunc aliquet faucibus nibh at vestibulum. Curabitur non elit non turpis sagittis rhoncus rutrum ut lacus. Quisque id turpis in nulla egestas congue ac vitae nunc.
                            Curabitur tincidunt sollicitudin libero, ut vehicula nibh convallis sit amet. Morbi accumsan, odio interdum interdum fringilla, urna lorem eleifend metus, eget fermentum sem elit eget sapien. Curabitur bibendum aliquet nunc, id scelerisque urna semper sed. Curabitur viverra sem id neque consequat, non posuere augue feugiat. Integer sit amet orci vitae metus faucibus porta sit amet ut nunc. Ut sed ultricies odio. Nulla volutpat neque non blandit venenatis. Curabitur ultricies tincidunt dapibus. Nulla facilisi. Etiam vel pretium tellus, quis maximus mi. Praesent commodo fringilla fringilla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet leo luctus magna tempus pharetra. Mauris accumsan arcu erat, vel venenatis libero feugiat vel.
                            Etiam accumsan semper lectus placerat pellentesque. Vivamus convallis leo eu orci scelerisque eleifend. Vestibulum imperdiet sed lacus eu vulputate. Quisque posuere nibh vel dolor sollicitudin ullamcorper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla eros lectus, convallis nec felis ac, gravida lacinia orci. In sagittis, magna id pulvinar pellentesque, nisi massa pellentesque est, eu sagittis diam purus sit amet dui. Vivamus euismod dictum porttitor. Curabitur urna erat, molestie eu consectetur a, suscipit ac sapien. Suspendisse dictum scelerisque eros, in suscipit lacus pulvinar ut. Morbi dictum sem massa.
                            Fusce vehicula tellus lorem, eu dictum augue efficitur feugiat. Nam accumsan sem mi, nec aliquam sem efficitur vitae. Integer nec arcu ullamcorper, blandit odio et, commodo purus. Phasellus interdum semper nulla, nec hendrerit neque ultricies ut. Duis tempor tellus et tortor dictum efficitur. Pellentesque sodales orci et varius lacinia. Sed accumsan lacus odio, quis cursus turpis pellentesque in.
                            Quisque mollis tempor purus nec fringilla. Phasellus varius justo nunc, non viverra neque sodales eu. Aenean nisi elit, convallis at imperdiet eget, maximus elementum justo. In hac habitasse platea dictumst. Ut sit amet luctus diam. Donec maximus ultrices urna, eu consequat magna laoreet sit amet. Sed vel aliquet mauris. Proin dignissim tellus iaculis interdum aliquam.
                        </div>
                    </div>
                    
                    <!-- Body -->
                </div>
            </div>
        </div>
   </div>
    </form>
@endsection
<style>
#textbox1{
    height: 100%;
    width: 100%;
}
#textbox2{
    height: 100%;
    width: 100%;
}
</style>