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
                        <th>Cod. Publicacion</th>
                        <th> Red social realizada</th>
                        <th>Fecha</th>
                        <th>Proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            facebook
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>                          
                    <tr>
                        <td>2</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            09/11/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            twitter
                        </td>
                        <td>
                            23/07/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>
                            facebook
                        </td>
                        <td>
                            13/04/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            03/08/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>
                            twitter
                        </td>
                        <td>
                            02/07/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>
                            facebook
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>
                            twitter
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>
                            facebook
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>
                            twitter
                        </td>
                        <td>
                            03/01/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>
                            facebook
                        </td>
                        <td>
                            15/02/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>
                            Instagram
                        </td>
                        <td>
                            07/02/2020
                        </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>
                            twitter
                        </td>
                        <td>
                            03/02/2020
                        </td>
                        <td>5</td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        @endsection
