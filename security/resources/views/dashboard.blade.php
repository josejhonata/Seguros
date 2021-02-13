<style type="text/css">
    
    table{
         border-collapse: collapse;
         text-align: center;
    }
    table td{
         border: 1px solid black;
    }
    table th{
        border: 1px solid black;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seguros') }}
        </h2>
    </x-slot>

    <div class="py-12 flex items-center" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="block text-center text-xl pb-3">     
                        <h2>Carro</h2>
                   
                    @php
                    $carros =App\Models\Carro::where('user_id',Auth::user()->id)->get();
                    $registros= App\Models\Registro::where('user_id',Auth::user()->id)->get();
                    @endphp
                    
                      <table class="table-auto  border: 1px solid black">
                      <thead>
                      <tr>                      
                         <th>Cor do carro</th>
                         <th>Modelo do carro</th>
                         <th>Ano do carro</th>
                         <th>Opções</th>
                     </tr>

                     </thead>

                     <tbody>
                    
                    @foreach($carros as $carro)
                    <tr>
                        <td>{{$carro->cor}}</td>
                        <td>{{$carro->modelo}}</td>
                        <td>{{$carro->ano}}</td>
                        <td><td><a class="bg-red-200 rounded hover:bg-red-300" href="{{ route('rm-carro', $carro ?? '')}}">Excluir</a></td></td>
                    </tr>
                    @endforeach
                    </tbody>
                     
                    </table>
                    </div> 
                </div>

                <div class=" block text-center text-xl pb-3">
                    <h2>Registros</h2>
                <table class="table-auto bordes:1px solid black">
                    <thead>
                        <tr>
                            <th>Local do acidente</th>
                            <th>Data do acidente</th>
                            <th>Valor do prejuizo</th>
                            <th>Opçṍes</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{$registro->local}}</td>
                            <td>{{$registro->data}}</td>
                            <td>{{$registro->valor}}</td>
                            <td><a class="bg-red-200 rounded hover:bg-red-300" href="{{ route('rm-registro', $registro ?? '')}}">Excluir</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
