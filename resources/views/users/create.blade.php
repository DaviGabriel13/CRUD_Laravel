@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            <h2 class="text-center">Cadastrar usuário</h2>
            <span class="ms-auto d-sm-flex flex-row gap-1">
                <a href="/" class="btn btn-info btn-sm">Listar</a>

            </span>
        </div>


        <div class="card-body">


            <x-alert />






            <form action="/store-user" method="POST" class="row g-3">
                @csrf
                @method('POST')


                <div class="col-md-12">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo"
                        value="{{ old('name') }}">
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="text" name="email" class="form-control" id="email"
                        placeholder="Melhor e-mail do usuário" value="{{ old('email') }}">
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Senha com 6 caracteres" value="{{ old('password') }}">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
        @endsection
