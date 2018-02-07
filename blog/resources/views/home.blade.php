@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <painel titulo="Dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="50" titulo="Contatos" url="#" cor="#0E99DA" icone="ion ion-person-add"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="100" titulo="Artigos" url="#" cor="#FF003F" icone="ion ion-ios-paper"></caixa>
                        </div>
                        <div class="col-md-4">
                        <caixa qtd="30" titulo="Comentários" url="#" cor="#C000FF" icone="fa fa-comments"></caixa>
                        </div>
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
