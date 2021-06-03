@extends('layout.main-layout')

@section('content')
    <main>
        
        <ul>
            
            @foreach ($cars as $car)
                
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
                
                <h4>
                    Piloti che hanno guidato questa macchina:
                </h4>

                <ul>

                    @foreach ($car -> pilots as $pilot)
                    
                       <li>
                           
                           <h6>
                               <a href="{{route('pilots', $pilot -> id)}}">
                               
                                   {{ $pilot -> name}} {{ $pilot -> lastname}}
                           
                               </a>
           
                           </h6>

                       </li>
                    @endforeach

                </ul>

            </li>
            @endforeach

        </ul>


    </main>
    
@endsection