@extends('../layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 ml-auto">
                <form class="form-inline my-2 my-lg-0" action="{{url('/busqueda')}}" method="get">
                    <input class="form-control mr-sm-2" type="text" name="marca" placeholder="Buscar por marca" aria-label="Search">
                    {{csrf_field()}}
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </div>

    </div>


        <div class="container">

             <p class="text-white" style="font-size: 20px;">Cantidad de publicaciones: {{$cantidad}}</p>
             <p class="text-white text-center mt-5" style="font-size: 40px">Autos a la Venta</p>





            @guest
                @foreach($autos as $el)
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

                                            <p class="text-white" style="font-size: 20px"> {{$el->caracteristicas_adicionales}}</p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach


                   @else


                @foreach($autos as $el)
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
                                            <div class="contenedor_carct-detalles_items"><p> Tipo de Combustible: {{$el->tipo_combustible}}</p></div>
                                            <div class="contenedor_carct-detalles_items"><p> Motor: {{$el->motor}}</p></div>
                                            <div class="contenedor_carct-detalles_items"><p> Kilometraje: {{$el->kilometraje}}</p></div>
                                            <div class="contenedor_carct-detalles_items"><p> Transmisión: {{$el->transmision}}</p></div>
                                            <div class="contenedor_carct-detalles_items"><p> Color: {{$el->color}}</p></div>
                                        </div>

                                        <hr>

                                        <div class="contenedor_otras_cart">

                                            <p class="text-white" style="font-size: 30px">Cracterísticas Adiconales</p>

                                            <b class="text-white" style="font-size: 20px"> {{$el->caracteristicas_adicionales}}</b>
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
