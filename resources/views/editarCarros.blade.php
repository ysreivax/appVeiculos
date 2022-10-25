@extends('padrao')
@section('content')

<!-- --------------------------------------------- SPACING  ------------------------------------------------- -->

<div class="cadastrofooter5">
  <div class="d-grid gap-6">
    <div class="cadastrop3 p-3 bg-black border text-center">Veja as sugestões dos outros usuarios</div>
  </div>
  </div>

<!-- -------------------------------------- FIM DO SPACING  ----------------------------------------------- -->


<div class="divbuscar">
<form method="get" action="/editar-carros">
  <div class="pesquisar center">
   <div class="input-group mb-1">
    <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca do Caminhão" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-danger" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />      </svg></button>
   </div>
  </div>
 </form>
 </div>


<!-- --------------------------------------------- LISTA  ------------------------------------------------- -->


  <div class="cadastrofooter1">
    <div class="cadastrofooter2">

        <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

        <div class="cadastrofooter3">
    <div class="cadastrofooter4 text-center">
        <div class="Consultarfooter1">
        <div class="cadastroform1 text-center">
  <table class="Consultartable">
    <thead class="table-dark">
    <table class="table">
    <thead>
      <tr class="consultartr1">
        <th scope="col">User</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Ano</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registrosCarros as $registrosCarros)
      <tr class="consultartr2">
        <th scope="row">{{$registrosCarros->id}}</th>
        <td>{{$registrosCarros->modelo}}</td>
        <td>{{$registrosCarros->marca}}</td>
        <td>{{$registrosCarros->ano}}</td>
        <td>
        <a href="{{route('alterar-carro', $registrosCarros->id)}}"><button type="submit" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>
            </button>
        </a>
           </td>
          

          <td>
            <form method="Post" action="{{route('apagar-carros', $registrosCarros->id)}}">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg>
              </button>
            </form>
          </td>
        
      </tr>

      @endforeach

    </tbody>

    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
  </table>
  
  <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
  <p class="cadastrop1">oiiiboiiiiiiiiiiiiiiii</p>
  <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
  <p class="cadastrop1">oiiiboiiiiiiiiiiiiiiii</p>
  <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>


</div>
</div>
</div>
</div>

<p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

</div>
</div>






<!-- ---------------------------------------- FIM DA LISTA  ------------------------------------------------- -->

@endsection