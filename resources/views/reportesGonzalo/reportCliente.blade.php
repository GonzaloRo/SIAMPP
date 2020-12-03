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
              <p>Resumen de proyectos publicitarios del año por cliente</p>
            </div>
          </div>
          
            <div class="row justify-content-center h-100">
              <div class="col-sm-10 align-self-center text-center">
                <p id="date_filter">
                  <span id="date-label-from" class="date-label">Fecha Inicio: </span><input class="date_range_filter date"
                      type="text" id="datepicker_from" />
                  <span id="date-label-to" class="date-label">Fecha Fin:<input class="date_range_filter date" type="text"
                          id="datepicker_to" />
                      <span class="date-label">Id del cliente:<input class="date_range_filter date" type="number" />
              </p>
              </div>
            </div>

            <table id="datatable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id Usuario</th>
                        <th> Nombre Cliente</th>
                        <th>Fecha</th>
                        <th>Proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/04/2017
                        </td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Maria
                        </td>
                        <td>
                            03/05/2017
                        </td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Jose
                        </td>
                        <td>
                            03/07/2017
                        </td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/09/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/10/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/11/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/12/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/02/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2020
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2019
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Juan
                        </td>
                        <td>
                            03/06/2016
                        </td>
                        <td>17</td>
                    </tr>                    
                </tbody>
            </table>
            
          
            <div class="row justify-content-center">
                <div class="col-md-3">
                   
                        <div class="card-body">
                            <a href="{{ asset('reportes/reporte proyectos por cliente.xlsx') }}" download="Reporte proyectos por cliente.xlsx">
                                <button type="button" class="btn btn-primary">Descargar reporte</button>
                                </a>
                        </div>
               
            </div>
         
        </div>
        @endsection