@extends('templates.home') 
@section('content')

<!-- CONTEUDO PRINCIPAL -->
<h1 class="text-center">Produtos cadastrados</h1>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td> <a href="{{route('product.edit', $product->id)}}"> <button type="button" class="btn btn-warning">Editar</button> </a></td>
                <td>
                <form action="product/{{ $product->id }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="name" value="Deletar" class="btn btn-danger">
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {!! $products->links() !!}
        </ul>
    </nav>




</div>
<!-- CONTEUDO PRINCIPAL -->
@endsection