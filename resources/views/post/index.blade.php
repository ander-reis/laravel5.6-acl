@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>POST</h1>


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Conteudo</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>

                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>

                            @can('update', 1)
                                <button class="btn btn-danger">Excluir</button>
                            @endcan
                            @cannot('update', 1)
                                <button class="btn btn-danger" disabled>Excluir</button>
                            @endcannot

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
