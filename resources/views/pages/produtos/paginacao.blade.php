{{--EXTENDER DA INDEX--}}
@extends('index')

@section('content')
{{--TITULO--}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">PRODUTOS</h1>
<!--     <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
        <svg class="bi"><use xlink : href="#calendar3"/></svg>
        This week
      </button>
    </div> -->
</div>
    <!--GRAFICO-->
    <!--
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    -->
  {{--<h2>Section title</h2>--}}
{{--FIM TITULO--}}
{{--conteudo--}}
<div>
    <form action="" method="get"> 
        <input type="text" name="pesquisar" placeholder="Digite o nome"/>
        <button> PESQUISAR </button>
        <a type="button" href="" class="btn btn-success float-end">
            INCLUIR PRODUTO
        </a>
    </form>   
    
    <div class="table-responsive mt-4">
        <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">NOME</th>
                  <th scope="col">VALOR</th>
                  <th scope="col">AÇÕES</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($findProduto as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ 'R$'.''.number_format( $produto->valor,2,',','.') }}</td>
                    <td>
                      <a href="" class="btn btn-light btn-sm">
                          EDITAR
                      </a>
                      <a href="" class="btn btn-danger btn-sm">
                          EXCLUIR
                      </a>
                    </td>
                  </tr>   
                @endforeach
              </tbody>
            </table> 
          </div>

</div>
{{--fim conteudo--}}
@endsection  
