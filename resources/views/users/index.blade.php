@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            <h2 class="text-center">Listar usuários</h2>
        </div>


        <div class="card-body">

        
       <x-alert />


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>



                @forelse ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center"><a href="{{ route('user.show', ['user' => $user->id]) }}"
                                class="btn btn-primary btn-sm">Visualizar</a>
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit"
                                    onclick="return confirm('Tem certeza que deseja apagar o usuário ?')">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
    </div>

@endsection
