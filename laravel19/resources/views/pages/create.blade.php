@extends('layout.main-layout')


@section('content')

    <h2>Aggiungi una nuova macchina:</h2>

    <form method="POST" action="{{route('store')}}" >

        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input type="text" name="name" >

        <label for="model">Modello</label>
        <input type="text" name="model" >

        <label for="kW">KW</label>
        <input type="number" name="kW" >

        <label for="brand_id">Brand</label>
        <select  name="brand_id" required>
            <option selected disabled>Brand</option>
            @foreach ($brands as $brand)
                <option value="{{$brand -> id}}">{{$brand -> name}} ({{$brand -> nationality}}</option>
            @endforeach

        </select>

        
          

        <button type="submit">Aggiungi</button>




    </form>
    
@endsection