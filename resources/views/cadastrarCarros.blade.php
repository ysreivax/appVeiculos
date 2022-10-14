@extends('padrao')
@section('content')

<!-- --------------------------------------------- CALHA 1 -------------------------------------------------- -->

<footer class="cadastrofooter4">
  <div class="container px-1 text-center">
    <div class="row gx-5">
      <div class="col">
       <div class="p-2 border bg-red">Seja Bem-Vindo</div>
      </div>
      <div class="col">
        <div class="p-2 border bg-red">Nos Informe</div>
      </div>
    </div>
  </div>
</footer>

 <!-- -------------------------------------- FIM DA CALHA 1 -------------------------------------------------- -->


 <!-- --------------------------------------------- SPACING  ------------------------------------------------- -->

 <footer class="cadastrofooter5">
    <div class="d-grid gap-6">
      <div class="cadastrop3 p-3 bg-black border text-center">NOS INFORME SEU MODELO FAVORITO DE CARROS</div>
    </div>
    </footer>

 <!-- -------------------------------------- FIM DO SPACING  ----------------------------------------------- -->



 <!-- ---------------------------------------- VALIDAÇÃO ---------------------------------------------------- -->

<footer class="cadastrofooter1">
    <footer class="cadastrofooter2">

        <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

        <footer class="cadastrofooter3">
    <footer class="cadastrofooter4 text-center">
 <form class="cadastroform1 text-center" method="post" action="{{route('salvar-banco-carros')}}">

    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiboiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    
    @csrf

    <div class="row mb-3">
      <label class="cadastrotexto col-sm-2 col-form-label">Modelo</label>
      <div class="col-sm-5">
        <input  name="modelo" value="{{old('modelo')}}" class="email form-control bg-light" placeholder="Fusca">
        @error('modelo')
        <div class="text-sm-start text-alight" >Preencher o campo modelo.</div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-5">
          <input name="marca" value="{{old('marca')}}" class="email form-control bg-light" id="inputPassword3" placeholder="BMW">
          @error('marca')
        <div class="text-sm-start text-alight" >Preencher o campo marca.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Ano</label>
        <div class="col-sm-5">
          <input name="ano" value="{{old('ano')}}" class="email form-control bg-light"   placeholder="2000">
          @error('ano')
        <div class="text-sm-start text-alight" >Preencher o campo ano.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Cor</label>
        <div class="col-sm-5">
          <input name="cor" value="{{old('cor')}}" class="email form-control bg-light" placeholder="02569-9874">
          @error('cor')
        <div class="text-sm-start text-alight" >Preencher o campo cor.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-5">
          <input name="valor"  class="email form-control bg-light" placeholder="25.660,23">
        </div>
      </div>
    <div class="row mb-3">
      <div class="cadastroaceito col-sm-10 offset-sm-2">
        <div class="cadastroaceito form-check">
          <input class="cadastroaceito form-check-input bg-red" type="checkbox" id="gridCheck1">
          <label class="cadastronovidades form-check-label" for="gridCheck1">
           aceito os termos 
          </label>
        </div>
      </div>
    </div>

    <button type="submit" class="cadastrobotao btn btn-danger">Enviar</button>

    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiboiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiboiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

  </form>
</footer>
</footer>

<p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

</footer>
</footer>

 <!-- -------------------------------------- FIM DA VALIDAÇÃO ------------------------------------------------ -->


@endsection