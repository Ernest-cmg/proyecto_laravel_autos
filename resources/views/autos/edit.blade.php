@extends('../layouts.app')


@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark mt-5 mb-5 text-white">
                    <div class="card-header header_contenedor">

                        <div class="header_contenedor_titulo">
                            <p class="text-white text-center" style="font-size: 40px;">Detalles del Coche</p>
                        </div>

                        <div class="header_contenedor_eliminar">

                            <form method="post" action="{{url('/autos/' . $auto->id)}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger " name="eliminar" id="eliminar" ><i class="fas fa-trash-alt"></i>Eliminar</button>

                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <form class="from" action="{{url('/autos/' . $auto->id)}}" method="post" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <select class="custom-select" name="marca">

                                            <option selected>{{$auto->marca}}</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Renault">Renault</option>
                                            <option value="BMW">BMW</option>
                                        </select>
                                        <input type="hidden" name="user_id" value={{$user->id}}>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="condicion">
                                            <option selected>{{$auto->condicion}}</option>
                                            <option value="Nuevo">Nuevo</option>
                                            <option value="Usado">Usado</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="anno">
                                            <option selected>{{$auto->anno}}</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="departamento">
                                            <option selected>{{$auto->departamento}}</option>
                                            <option value="Montevideo">Montevideo</option>
                                            <option value="Maldonado">Maldonado</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="tipo_combustible">
                                            <option selected>{{$auto->tipo_combustible}}</option>
                                            <option value="Diesel">Diesel</option>
                                            <option value="Fuel">Fuel</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="motor" placeholder="Motor" value={{$auto->motor}}>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="kilometraje" placeholder="Kilometrage" value={{$auto->kilometraje}}>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="transmision">
                                            <option selected>{{$auto->transmision}}</option>
                                            <option value="Automatica">Automatica</option>
                                            <option value="Manual">Manual</option>

                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="form-row ">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <select class="custom-select" name="color">
                                            <option selected>{{$auto->color}}</option>
                                            <option value="Blanco">Blanco</option>
                                            <option value="Negro">Negro</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-9 mb-3">
                                    <div class="form-group">
                                        <textarea class="form-control" name="caracteristicas_adicionales" placeholder="Características Adicionales">{{$auto->caracteristicas_adicionales}}</textarea>
                                    </div>

                                </div>

                            </div>

                            <hr>

                            <div class="form-row mt-4 mb-5">
                                <div class="col-md-3">
                                    <input type="number" name="presio" class="form-control" placeholder="Precio" value={{$auto->presio}}>

                                </div>

                            </div>


                            <div class="form-row mt-4">
                                <div class="col-md-12">
                                    <input type="file" id="slect_img" class="d-none" name="foto">

                                    <div id="contenedor_img" class="contenedor_img">
                                        <p><i class="fas fa-file-image" ></i> Escoger imagen...</p>
                                        <img id="img" class="imagen" >
                                    </div>

                                </div>
                            </div>

                            <div class="form-row mt-5 mb-5">
                                <div class="col-md-6 m-auto">

                                    <button type="submit" class="btn btn-success btn-block" name="publicar" id="publicar" style="font-size: 20px; padding: 10px"><i class="fas fa-thumbs-up" style="padding: 10px"></i> Actualizar Datos</button>

                                </div>
                            </div>

                        </form>



                    </div>

                </div>


            </div>


        </div>


    </div>




@endsection
