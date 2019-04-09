@extends('templates.home') 
@section('content')

<!-- CONTEUDO PRINCIPAL -->
<h1 class="text-center">Cadastrar novo produto</h1>

<div class="container">
    <form class="form" action="{{route('product.store')}}" method="POST">
        {!! csrf_field()!!}
        <div class="form-group">
            <label for="name">Nome do produto</label>
            <input type="text" class="form-control" name="name" id="nome" required="" placeholder="Digite o nome do produto">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição do produto</label>
            <textarea class="form-control" name="description" id="descricao" required="" rows="3" placeholder="Digite a descrição do produto"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<!-- CONTEUDO PRINCIPAL -->
@endsection