@extends('../layouts.app')

@section('content')


    @if($autos->count()>0)


        @foreach($autos as $auto)

            <h1>{{$auto->marca}}</h1>

        @endforeach
    @else

        <p>No hay nadass</p>

    @endif




@endsection
