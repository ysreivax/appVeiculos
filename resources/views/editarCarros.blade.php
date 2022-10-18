@extends('padrao')
@section('content')

<!-- --------------------------------------------- SPACING  ------------------------------------------------- -->

<footer class="cadastrofooter5">
  <div class="d-grid gap-6">
    <div class="cadastrop3 p-3 bg-black border text-center">Veja as sugestões dos outros usuarios</div>
  </div>
  </footer>

<!-- -------------------------------------- FIM DO SPACING  ----------------------------------------------- -->


<!-- --------------------------------------------- LISTA  ------------------------------------------------- -->


  <footer class="cadastrofooter1">
    <footer class="cadastrofooter2">

        <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

        <footer class="cadastrofooter3">
    <footer class="cadastrofooter4 text-center">
        <footer class="Consultarfooter1">
        <form class="cadastroform1 text-center">
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
        <td> <a href="#!" class="listarbotao1 btn btn-primary bg-black"> Editar </a></td>
        <td> <a href="#!" class="listarbotao2 btn btn-primary bg-black"> Excluir </a></td>
        
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

</form>
</footer>
</footer>
</footer>

<p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

</footer>
</footer>






<!-- ---------------------------------------- FIM DA LISTA  ------------------------------------------------- -->

@endsection