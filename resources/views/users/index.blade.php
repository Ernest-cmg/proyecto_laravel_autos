@extends('../layouts.app')

@section('content')

    @if(Session::has('eliminar_auto'))

        <div class="alert alert-danger alert-dismissible fade show container mt-5 mb-5" role="alert">
           <p class="text-center" style="font-size: 30px">{{session('eliminar_auto')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    @if(Session::has('actualizar_auto'))

        <div class="alert alert-success alert-dismissible fade show container mt-5 mb-5" role="alert">
            <p class="text-center" style="font-size: 30px">{{session('actualizar_auto')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

<div class="container">

    <h1 class="text-white text-center mt-5 mb-5">Mis publicaciones</h1>
    <p class="text-white" style="font-size: 20px;">Cantidad de publicaciones: {{$cantidad}}</p>

    @guest

        <h1>Ustud no tiene acceso a esta pagina, inicie seccion</h1>

    @else

        @foreach($publicaciones as $el)
            <div class="row">
                <div class="col-md-11 m-auto">
                    <div class="card mt-4 mb-4 bg-dark">
                        <div class="card-header encabezado">
                            <div class="encabezado_marca">
                                <p class="text-white">{{$el->marca}}-{{$el->anno}}</p>
                            </div>

                            <div class="encabezado_precio">
                                <p class="text-white">USD: {{$el->presio}}</p>
                            </div>
                        </div>

                        <div class="card-body contenedor_main">
                            <p class="text-white" style="font-size: 30px">Datos del Vendedor</p>
                            <hr>
                            <div class="datos_vendedor">

                                <div class="datos_vendedor_nombre">

                                    <div class="avatar_vendedor">
                                        <img src="images/{{$el->user->avatar}}" class="avatar_vendedor">
                                    </div>

                                    <p class="text-white mb-4 mt-4 nombre_vendedor" style="font-size: 30px">{{$el->user->name}}</p>

                                </div>
                                <div class="datos_vendedor_telefono">
                                    <p class="text-white mb-4 mt-4" style="font-size: 30px"> <i class="fas fa-phone-volume"></i> {{$el->user->telefono}}</p>
                                </div>

                                <div class="datos_vendedor_email">
                                    <p class="text-white mb-4 mt-4" style="font-size: 30px"><i class="fas fa-envelope"></i> {{$el->user->email}}</p>
                                </div>

                            </div>
                            <div class="contenedor_main_img">
                                <img src='images/{{$el->foto}}' class="">
                            </div>
                            <hr>
                            <div class="contenedor_carct">
                                <p class="text-white" style="font-size: 30px">Características del Coche</p>

                                <div class="contenedor_carct-detalles">

                                    <div class="contenedor_carct-detalles_items"><p> Departamento: {{$el->departamento}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Condición: {{$el->condicion}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Tipo de Combustible: {{$el->tipo_combustible}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Motor: {{$el->motor}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Kilometraje: {{$el->kilometraje}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Transmisión: {{$el->transmision}}</p></div>
                                    <div class="contenedor_carct-detalles_items"><p> Color: {{$el->color}}</p></div>
                                </div>

                                <hr>

                                <div class="contenedor_otras_cart">

                                    <p class="text-white" style="font-size: 30px">Cracterísticas Adiconales</p>

                                    <p class="text-white" style="font-size: 20px">{{$el->caracteristicas_adicionales}}</p>
                                </div>

                                <hr>


                                <div class="gestion float-right">

                                    <a class="btn btn-success" href="{{route('autos.edit', $el->id)}}">Actualizar</a>
                                    <a class="btn btn-danger" href="{{route('autos.edit', $el->id)}}">Eliminar</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        @endforeach


    @endguest






</div>



@endsection
