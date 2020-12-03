@extends('layouts.app')


@section('head') 
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables_themeroller.css"
        rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.css" rel="stylesheet"
        data-semver="1.9.4" data-require="datatables@*" />

    <link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
  
    <!-- Scripts -->
@endsection

@section('script') 
<script data-require="jqueryui@*" data-semver="1.10.0"
src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.js" data-semver="1.9.4"
data-require="datatables@*"></script>
<script src="{{ asset('js/script.js') }}" defer></script>
@endsection
@section('content')
        <div class="container">
            <div class="row justify-content-center h-100">
                <div class="col-sm-8 align-self-center text-center">
                    <P>Fabrica DBM </P>
                    <p>Reporte de diseños de proyectos publicitarios</p>
                </div>
            </div>

            <div class="row justify-content-center h-100">
                <div class="col-sm-10 align-self-center text-center">
                    <p id="date_filter">
                        <span id="date-label-from" class="date-label">Fecha Inicio: </span><input class="date_range_filter date"
                            type="text" id="datepicker_from" />
                        <span id="date-label-to" class="date-label">Fecha Fin:<input class="date_range_filter date" type="text"
                                id="datepicker_to" />
                            <span class="date-label">Id del Proyecto:<input class="date_range_filter date" type="number" />
                    </p>
                </div>
              </div>

            <table id="datatable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Cod. diseño</th>
                        <th>Version del diseño</th>
                        <th>Fecha de actualizacion</th>
                        <th>Proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            1.0
                        </td>
                        <td>
                            06/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            1.1
                        </td>
                        <td>
                            13/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            1.2
                        </td>
                        <td>
                            22/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                           1.3
                        </td>
                        <td>
                            03/02/2020
                        </td>
                        <td>5</td>
                    </tr>            
                    <tr>
                        <td>1</td>
                        <td>
                           1.4
                        </td>
                        <td>
                            07/02/2020
                        </td>
                        <td>5</td>
                    </tr>                
                    <tr>
                        <td>1</td>
                        <td>
                           1.5
                        </td>
                        <td>
                            15/02/2020
                        </td>
                        <td>5</td>
                    </tr>                
                    <tr>
                        <td>1</td>
                        <td>
                           1.6
                        </td>
                        <td>
                            22/02/2020
                        </td>
                        <td>5</td>
                    </tr>                
                    <tr>
                        <td>1</td>
                        <td>
                           1.7(final)
                        </td>
                        <td>
                            03/03/2020
                        </td>
                        <td>5</td>
                    </tr>                       
                </tbody>
            </table>
            
            <div class="row justify-content-center">
                <div class="col-md-3">
                   
                        <div class="card-body">
                            <a href="{{ asset('reportes/Reporte de diseños de proyectos publicitarios.xlsx') }}" download="Reporte de diseños de proyectos publicitarios.xlsx">
                                <button type="button" class="btn btn-primary">Descargar reporte</button>
                                </a>
                        </div>
               
            </div>
        </div>
        @endsection