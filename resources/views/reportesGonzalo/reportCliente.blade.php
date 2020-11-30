<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js" data-semver="2.0.3" data-require="jquery"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables_themeroller.css"
        rel="stylesheet" data-semver="1.9.4" data-require="datatables@*" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.css" rel="stylesheet"
        data-semver="1.9.4" data-require="datatables@*" />

    <link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
    <script data-require="jqueryui@*" data-semver="1.10.0"
        src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.js" data-semver="1.9.4"
        data-require="datatables@*"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <!-- Scripts -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <!--datables CSS básico-->

    <link href="{{ asset('datatables/datatables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!--datables estilo bootstrap 4 CSS-->
    <link href="{{ asset('datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
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
        </div>
    </main>
</div>

</body>

</html>
