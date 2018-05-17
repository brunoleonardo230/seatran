@extends('layouts.master')
@section('content')
<style type="text/css">
    #scroll {
        width:900px;
        height:370px;
        background-color:#F2F2F2;
        overflow:auto;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <h1>{{ $title }}</h1>
        <hr>
    </div>
</div>
@include('layouts.msg')
@include('layouts.erros')

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="municipio">Municipio</label>
                    <select class="form-control" name="municipio" id="municipio">
                        @foreach($municipio as $row)
                            <option value="{{$row->cod_municipio}}">{{$row->nome_municipio}}</option>
                        @endforeach      
                    </select>
                </div>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="ano" id="ano1" value="2015"> 2015
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ano" id="ano2" value="2016"> 2016
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ano" id="ano3" value="2016"> 2017
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="ano" id="ano4" value="2018"> 2018
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="scroll">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Resenha</th>
                                    <th>Objeto</th>
                                    <th>Pares</th>
                                    <th>Valor</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                @foreach($convenio as $value)
                                <tr>
                                    <td>{{ substr($value->resenha,0,40) }}</td>
                                    <td>{{ substr($value->objeto,0,40) }}...</td>
                                    <td>{{ substr($value->partes,0,40) }}...</td>
                                    <td>R$ {{ $value->valor_real }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                        
                    </div>
                </div>
                <h1>Totais Anos</h1>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ano</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                </tr>                                
                            </thead>
                            <tbody>
                                @foreach($soma as $value)
                                <tr>
                                    <td>{{ $value->ano }}</td>
                                    <td>{{ $value->quantidade }}...</td>
                                    <td>{{ $value->total }}...</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('body').scrollspy({ target: '#navbar-example' });
            $('[data-spy="scroll"]').each(function () {
                var $spy = $(this).scrollspy('refresh')
            })
        </script>

@endsection
