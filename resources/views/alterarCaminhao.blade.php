@extends('padrao')
@section('content')

<link rel="stylesheet" href="css/estilo.css">
<!-- --------------------------------------------- CALHA 1 -------------------------------------------------- -->
<body class="bodyeditar">
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
      <div class="cadastrop3 p-3 bg-black border text-center">NOS INFORME SEU MODELO FAVORITO DE CAMINHÃO</div>
    </div>
    </footer>

 <!-- -------------------------------------- FIM DO SPACING  ----------------------------------------------- -->



 <!-- ---------------------------------------- VALIDAÇÃO ---------------------------------------------------- -->

<footer class="cadastrofooter1">
    <footer class="cadastrofooter2">

        <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>

        <footer class="cadastrofooter3">
    <footer class="cadastrofooter4 text-center">
 <form class="cadastroform1 text-center" method="post" action="{{route('alterar-banco-caminhao',$registrosCaminhoes->id)}}">

    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    <p class="cadastrop1">oiiiiiiiiiiiiiiiiiii</p>
    
    @csrf
    @method('put')

    <div class="row mb-3">
      <label class="cadastrotexto col-sm-2 col-form-label">Modelo</label>
      <div class="col-sm-5">
        <input  name="modelo" value="{{old('modelo', $registrosCaminhoes->modelo)}}" class="email form-control bg-light" id="inputModelo" placeholder="V8">
        @error('modelo')
        <div class="text-sm-start text-alight" >Preencher o campo modelo.</div>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-5">
          <input name="marca" value="{{old('marca', $registrosCaminhoes->marca)}}" class="email form-control bg-light" id="inputMarca" placeholder="Scania">
          @error('marca')
        <div class="text-sm-start text-alight" >Preencher o campo marca.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Ano</label>
        <div class="col-sm-5">
          <input name="ano" value="{{old('ano', $registrosCaminhoes->ano)}}" class="email form-control bg-light" id="inputAno" placeholder="2021">
          @error('ano')
        <div class="text-sm-start text-alight" >Preencher o campo ano.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Cor</label>
        <div class="col-sm-5">
          <input name="cor" value="{{old('cor', $registrosCaminhoes->cor)}}" class="email form-control bg-light" id="inputCor" placeholder="vermelho">
          @error('cor')
        <div class="text-sm-start text-alight" >Preencher o campo cor.</div>
        @enderror
        </div>
      </div>
      <div class="row mb-3">
        <label class="cadastrotexto col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-5">
          <input name="valor"  value="{{old('valor', $registrosCaminhoes->valor)}}"class="email form-control bg-light" id="inputValor" placeholder="700.660,23">
          @error('valor')
        <div class="text-sm-start text-alight" >Preencher o campo valor.</div>
        @enderror
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

    <button type="submit" class="cadastrobotao btn btn-danger">Atualizar</button>

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

<style>
  
/* <><><><><><><><><><><><><><><><><><><><><><><> HOME <><><><><><><><><><><><><><><><><><><><><><><><><><><> */


.bodyhome{
    background-color: black;
}

/* -------------------------------------- CSS DA CALHA 1 e 2 ----------------------------------------------- */

.homefooter1{
background-color: black;
}

.row{
    background-color: black;
}

.col{
    margin-top: 6cm;
    margin-bottom: 1cm; 
}

.p-2{
    margin-top: 1cm;
    color: brown;

}

/* -------------------------------------- FIM DO CSS DA CALHA 1 e 2 ----------------------------------------- */


/* -------------------------------------- CSS DO SPACING 1 e 2 ---------------------------------------------- */

.homefooter2{
    background-color: black;
    }

.homep3{
    margin-top: 2cm;
    margin-bottom: 2cm;
    margin-left: 2cm;
    margin-right: 2cm;
    color: brown;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
}


/* -------------------------------------- FIM DO CSS DO SPACING 1 e 2 ------------------------------------- */





/* ----------------------------------------- CSS DO CLEARFIX 1 e 2 ----------------------------------------- */

.homep4{
    color: brown;
    margin-left: 0.1cm;
    margin-top: 0.3cm;
    margin-right: 0.1cm;
}

/* ------------------------------------- FIM CSS DO CLEARFIX 1 e 2 ---------------------------------------- */


/* ----------------------------------------- CSS DO CARD 1 e 2 -------------------------------------------- */

.homefooter4{
    background-color: black;
    border-color: aliceblue;
}

.card-title{
    margin-bottom: 2cm;
    color: brown;
    font-size: 35px;
    margin-top: 1cm;
    
}

.card-text{
    color: aliceblue;
    margin-top: 0.5cm;
    font-size: 20px;
}

/* --------------------------------------- FIM CSS DO CARD 1 e 2 --------------------------------------- */


/* -------------------------------------- CSS DO SEPARADOR 1,2,3 e 4 ----------------------------------- */

.homep5{
    font-size: 30px;
    color: transparent;
}

/* ---------------------------------- FIM CSS DO SEPARADOR 1,2,3 e 4 ---------------------------------- */


/* ---------------------------------- CSS DO AGRADECIMENTO 1  ----------------------------------------- */


.homefooter5{
    background-color: black;
}

.homep6{
    color: transparent;
}

.homefooter7{
    margin-top: 0.2cm;
    margin-bottom: 0.2cm;
    margin-left: 0.2cm;
    margin-right: 0.2cm;
    background-color: black;
   
}

.homep7{
    font-size: 18px;
    color: brown;
    font-family: arial;
}

.homefooter6{
    background-color:aliceblue;
    margin-top: 1cm;
    margin-bottom: 1cm;
    margin-left: 1cm;
    margin-right: 1cm;
    font-size: 0.5px;
    color: transparent;

}

.homefooter8{
    margin-top: 0.1cm;
    margin-bottom: 0.1cm;
    margin-left: 0.3cm;
    margin-right: 0.3cm; 
    background-color: black;
    color: transparent;
}

/* ---------------------------------- FIM CSS DO AGRADECIMENTO 1 ------------------------------------------- */



/* <><><><><><><><><><><><><><><><><><><><><><><> FIM DA HOME <><><><><><><><><><><><><><><><><><><><><><><> */







/* <><><><><><><><><><><><><><><><><><><><><> CADASTRO DE CAMINHOES <><><><><><><><><><><><><><><><><><><><><><> */

.bodycadastrocaminhoes{
    background-color:  black;
}

/* -------------------------------------- CSS DA CALHA 1 e 2 ----------------------------------------------- */

.cadastrofooter4{
    background-color: black;
    }
    
    .row{
        background-color: black;
    }
    
    .col{
        margin-top: 6cm;
        margin-bottom: 1cm; 
    }
    
    .p-2{
        margin-top: 1cm;
        color: brown;
    
    }
    
/* -------------------------------------- FIM DO CSS DA CALHA 1 e 2 ----------------------------------------- */


/* -------------------------------------- CSS DO SPACING  --------------------------------------------------- */

.cadastrofooter5{
    background-color: black;
    }

.cadastrop3{
    margin-top: 1cm;
    margin-bottom: 1cm;
    margin-left: 1cm;
    margin-right: 1cm;
    color: brown;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
}


/* -------------------------------------- FIM DO CSS DO SPACING --------------------------------------------- */


/* ----------------------------------------- CSS DE VALIDAÇÃO ----------------------------------------------- */

.cadastrofooter1{
    background-color: black;
}

.cadastrofooter2{
    background-color: aliceblue;
    margin-top: 4cm;
    margin-bottom: 4cm;
    margin-left: 6cm;
    margin-right: 6cm;
    font-size: 20px;
    color: aliceblue;
}

.cadastrofooter3{
    background-color: black;
    margin-top: 0.5cm;
    margin-bottom: 0.5cm;
    margin-left: 0.5cm;
    margin-right: 0.5cm;
}

.cadastroform1{
    margin-top: 0.5cm;
    margin-bottom: 0.5cm;
    margin-left: 0.5cm;
    margin-right: 0.5cm;
}

.cadastrop1{
    font-size: 1px;
    color: transparent;
}

.cadastrotexto{
    margin-left: 5cm;
    color: brown;
    font-family: arial;

}

.cadastrobotao{
    margin-left: 11.8cm;
    background-color: brown;
}

.cadastroaceito{
    margin-left: 2cm;
}

.cadastronovidades{
    margin-right: 12cm;
    color: brown;
    font-family: arial;
}

/* -------------------------------------- FIM DO CSS DE VALIDAÇÃO ------------------------------------------- */

/* <><><><><><><><><><><><><><><><><><><><> FIM DO CADASTRO DE CAMINHOES <><><><><><><><><><><><><><><><><><><><> */



</style>

 <!-- -------------------------------------- FIM DA VALIDAÇÃO ------------------------------------------------ -->
 </body>
@endsection
