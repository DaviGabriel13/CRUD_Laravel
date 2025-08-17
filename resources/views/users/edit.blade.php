@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            <h2 class="text-center">Editar Usuário</h2>
            <span class="ms-auto d-sm-flex flex-row gap-1">
                <a href="/" class="btn btn-info btn-sm">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">Visualizar</a>
               
            </span>
        </div>


        <div class="card-body">


            <x-alert />

         

           


            <form action="{{ route('user-update', ['user' => $user->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-12">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo"
                        value="{{ old('name', $user->name) }}">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="email"
                        placeholder="Melhor e-mail do usuário" value="{{ old('email', $user->email) }}">
                </div>


                <div class="col-md-6">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Senha com 6 caracteres" value="{{ old('password') }}">
                </div>


               <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                </div>

                
            </form>
        </div>
    </div>

@endsection
