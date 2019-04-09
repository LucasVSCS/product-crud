@extends('templates.home') 
@section('content')

<!-- CONTEUDO PRINCIPAL -->
<h1 class="text-center">Editar produto: {{$product->name}}</h1>

<div class="container">
    <form class="form" action="{{route('product.update', $product->id)}}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field()!!}
        <div class="form-group">
            <label for="name">Novo nome do produto</label>
            <input type="text" class="form-control" name="name" id="nome" required="" placeholder="Digite o nome do produto" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nova descrição do produto</label>
            <textarea class="form-control" name="description" id="descricao" required="" rows="3" placeholder="Digite a descrição do produto">{{$product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</div>

<!-- CONTEUDO PRINCIPAL -->
@endsection