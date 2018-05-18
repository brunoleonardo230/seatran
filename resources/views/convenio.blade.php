<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">

<style type="text/css">
    .scroll {
        width:900px;
        height:500px;
        background-color:#F2F2F2;
        overflow:auto;
    }
</style>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $title }}</h1>
        <hr>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="scroll">
            <table id="minhaTabela" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Municipio</th>
                        <th>Ano</th>
                        <th>Resenha</th>
                        <th>Objeto</th>
                        <th>Pares</th>
                        <th>Valor</th>
                    </tr>                                
                </thead>
                <tbody>
                    @foreach($convenio as $value)
                    <tr>
                        <td>{{ $value->nome_municipio }}</td>
                        <td>{{ $value->ano }}</td>
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
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Totais Anos</h1>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="scroll">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Municipio</th>
                        <th>Ano</th>                        
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>                                
                </thead>
                <tbody>
                    @foreach($soma as $value)
                    <tr>
                        <td>{{ $value->municipio }}</td>
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


<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
    });
</script>