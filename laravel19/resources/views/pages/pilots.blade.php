@extends('layout.main-layout')

@section('content')
    
    <main class="pilot">

        <h2>
            {{ $pilot -> name}} {{ $pilot -> lastname}}
        </h2>

        <h4>
            Provenienza: {{ $pilot -> nationality}}
        </h4>
        <h4>
            Data di nascita: {{ $pilot -> date_of_birth}}
        </h4>

        <h3>Ecco tutte le macchine guidate da {{ $pilot -> name}} {{ $pilot -> lastname}}</h3>
        <ul>

            @foreach ($pilot -> cars as $car)
                
                <li>
                    <h4>
                        Casa costruttrice:
                    </h4>
    
                    <h5>
                        {{$car -> brand -> name}},  
                         <br>
                        {{$car -> brand -> nationality}}
                    </h5>
    
    
                    <h4>
                        Dettagli auto:
                    </h4>
                     <h5>  
                        {{ $car -> name}} -
                        {{ $car -> model}}
                    </h5>
                </li>
            @endforeach
        </ul>

 


    </main>

@endsection