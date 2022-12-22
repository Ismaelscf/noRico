@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="position: relative; left: 0px; top: 0px;">
                    <div class="card-header ui-sortable-handle bg-gray-dark" style="cursor: move;">
                        <h3 class="card-title">Cadastrar Usuário</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                                                    
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                    </div>

                    <div class="card-body">
                        <form action="/admin/newUser" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo" required>
                        </div>
                        
                        <div class="row form-group" div class="col-sm-12">
                            <div class="col-sm-6">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                            </div>
                        </div>

                        <div class="row form-group" div class="col-sm-12">
                            <div class="col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="phone">Telefone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" required>
                            </div>
                        </div>

                        <div class="row form-group" div class="col-sm-12">
                            
                            <div class="col-sm-6">
                                <label for="photo">Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="from-control-file" id="photo" name="photo">
                                        <label class="custom-file-label" for="photo">Escolha uma foto</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label>Função</label>
                                <select class="form-control" id="function" name="function">
                                    <option value="cliente">Cliente</option>
                                    <option value="vendedor">Vendedor</option>
                                    <option value="lojista">Lojista</option>
                                    <option value="gerente">Gerente</option>
                                </select>
                            </div>

                        </div>

                        <div class="row form-group" div class="col-sm-12">
                            <div class="col-sm-6">
                                <label for="state">Estado</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
                            </div>

                            <div class="col-sm-6">
                                <label for="city">Cidade</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
                            </div>
                        </div>

                        <div class="row form-group" div class="col-sm-12">
                            <div class="col-sm-4">
                                <label for="district">Bairro</label>
                                <input type="text" class="form-control" id="district" name="district" placeholder="Bairro">
                            </div>

                            <div class="col-sm-4">
                                <label for="street">Rua</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Rua" required>
                            </div>

                            <div class="col-sm-4">
                                <label for="number">Número</label>
                                <input type="text" class="form-control" id="number" name="number" placeholder="Número" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="complet">Complemento</label>
                            <input type="text" class="form-control" id="complet" name="complet" placeholder="Complemento (Ponto de Referência)">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="position: relative; left: 0px; top: 0px;">
                    <div class="card-header ui-sortable-handle bg-gray-dark" style="cursor: move;">
                        <h3 class="card-title">Cadastrar Usuário</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                                                    
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                    </div>

                    <div class="card-body">
                    </div>

                    <div class="card-footer">
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>
@stop