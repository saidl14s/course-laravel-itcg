<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/') }}/pnotify.css">
<body>

<br><br>
@auth
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="users" class="table table-bordered table-striped" aria-describedby="Todos los alumnos registrados en la plataforma">
                    <thead>
                        <tr>
                            <th style="width: 45%">Usuario</th>
                            <th style="width: 45%">Correo</th>
                            <th style="width: 10%"># Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endauth

@guest
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Error, usted no esta autenticado</h3>
                <a href="/">Regresar al inicio</a>
            </div>
        </div>
    </div>
@endguest
    
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <script>
            new PNotify({
              title: 'Error',
              text: '{{ $error }}',
              type: 'error',
              styling: 'bootstrap3'
          });
        </script>
    @endforeach
@endif

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/') }}/jquery.dataTables.js"></script>
<script type="text/javascript" src="{{ asset('js/') }}/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="{{ asset('js/') }}/pnotify.js"></script>
    <script type="text/javascript" src="{{ asset('js/') }}/pnotify.buttons.js"></script>
    @include('laravelPnotify::notify')

<script type="text/javascript">
    $(document).ready(function() {
        oTable = $('#users').DataTable({
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('datatable.users') }}",
            "columns": [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'actions', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>

</body>
</html>