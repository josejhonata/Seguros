<style type="text/css">
.formulario{
    text-align: center;

}
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

@php
$Clientes=App\Models\User::where('tipo','cliente')->get();
@endphp
<table class="table-auto  border: 1px solid black">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Numero da carteira de motorista</th>
        <th>Cep</th>
    </tr>
</thead>
<tbody>
    
        
@foreach($Clientes as $cliente) 
<tr>
   <td>{{$cliente->id}}</td>
   <td>{{$cliente->name}}</td>
   <td>{{$cliente->cpf}}</td>
   <td>{{$cliente->numero_da_carteira}}</td>
   <td>{{$cliente->cep}}</td>
</tr>
@endforeach

</tbody>
</table>
        <div class="formulario">
        <h2>Cadastro de Carro</h2>
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('add-carro') }}">
            @csrf

            <b>
            <!-- Cor -->
            <div>
                <x-label for="cor" :value="__('Cor do carro:')" />

                <x-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" required/>
            </div>

            <!-- Modelo do carro -->
            <div>
                <x-label for="modelo" :value="__('Modelo do carro:')" />

                <x-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo')" required/>
            </div>

            <!-- Ano do carro -->
            <div>
                <x-label for="ano" :value="__('Ano do carro:')" />

                <x-input id="ano" class="block mt-1 w-full" type="text" name="ano" :value="old('ano')" required/>
            </div>

            <!-- user id-->
          
            <div class="mt-4">
                <x-label for="user_id" :value="__('Id do dono do carro:')" />

                <x-input id="user_id" class="block mt-1 w-full" type="user_id" name="user_id" :value="old('user_id')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
            </b>
        </form>
    </div>
    

    <div class="formulario">
        <h2>Cadastro de Registro</h2>
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('add-registro') }}">
            @csrf

            <b>
            <!-- Cor -->
            <div>
                <x-label for="local" :value="__('local do acidente:')" />

                <x-input id="local" class="block mt-1 w-full" type="text" name="local" :value="old('local')" required/>
            </div>

            <!-- Modelo do carro -->
            <div>
                <x-label for="data" :value="__('Data do acidente:')" />

                <x-input id="data" class="block mt-1 w-full" type="text" name="data" :value="old('data')" required/>
            </div>

            <!-- Ano do carro -->
            <div>
                <x-label for="valor" :value="__('Valor do acidente:')" />

                <x-input id="valor" class="block mt-1 w-full" type="text" name="valor" :value="old('valor')" required/>
            </div>

            <!-- user id-->
          
            <div class="mt-4">
                <x-label for="user_id" :value="__('Id do usuario que sofreu acidente:')" />

                <x-input id="user_id" class="block mt-1 w-full" type="user_id" name="user_id" :value="old('user_id')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
            </b>
        </form>
    </div>
    
