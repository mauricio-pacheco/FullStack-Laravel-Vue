@extends('layouts.principal')

@section('conteudo_pagina')
    <div class="container" id="app_teste">

        <div class="row">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="col-sm-12">
                    <h3>Cadastro Usuário</h3>
                    <hr />
                </div>

                <!-- Usuário E-mail -->
                <div class="col-sm-12">
                    <input type="text" id="email" class="form-control" :value="old('email')" type="email"
                        name="email" placeholder="Usuário (E-mail)" autofocus autocomplete="username" required />
                    <div style="height: 3px"></div>
                </div>

                <!-- Senha -->
                <div class="col-sm-6">
                    <input id="password" class="form-control" :value="old('password')" type="password" name="password"
                        placeholder="Senha" autofocus autocomplete="current-password" required />
                    <div style="height: 3px"></div>
                </div>

                <!-- Confirmar Senha -->
                <div class="col-sm-6">
                    <input id="password_confirmation" class="form-control" :value="old('password_confirmation')"
                        type="password" name="password_confirmation" placeholder="Confirmar Senha" autofocus
                        autocomplete="new-password" required />
                    <div style="height: 3px"></div>
                </div>

                <!-- Nome Completo -->
                <div class="col-sm-12">
                    <input type="text" id="name" class="form-control" :value="old('name')" name="name"
                        placeholder="Nome Completo" required />
                    <div style="height: 3px"></div>
                </div>

                <!-- Telefone -->
                <div class="col-sm-6">
                    <div id="app_telefone">
                    <mascara_telefone></mascara_telefone>
                    </div>
                    <div style="height: 3px"></div>
                </div>

                 <!-- Celular -->
                <div class="col-sm-6">
                    <input type="text" id="celular" class="form-control" :value="old('celular')" name="celular"
                        placeholder="Celular" required />
                    <div style="height: 3px"></div>
                </div>

                 <!-- Data de Nascimento -->
                <div class="col-sm-6">
                    <div id="app_data">
                    <mascara_data></mascara_data>
                    </div>
                    <div style="height: 3px"></div>
                </div>

                 <!-- Cidade -->
                <div class="col-sm-6">
                    <input type="text" id="cidade" class="form-control" :value="old('cidade')" name="cidade"
                        placeholder="Cidade" />
                    <div style="height: 3px"></div>
                </div>

                <!-- Limpar Formulário -->
                <div class="col-md-6">
                    <button type="reset" class="btn btn-red btn-block btn-lg" style="width: 100%">LIMPAR
                        FORMULÁRIO</button>
                    <div style="height: 6px"></div>
                </div>

                <!-- Cadastrar Usuário -->
                <div class="col-md-6">
                    <button type="submit" class="btn btn-blue btn-block btn-lg" id="botao_racas_pequenas"
                        style="width: 100%">CADASTRAR USUÁRIO</button>
                    <div style="height: 6px"></div>
                </div>

                <div class="col-sm-12">
                    <hr />
                </div>

            </form>

        </div>

    </div>
@endsection
