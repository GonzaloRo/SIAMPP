@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="/css/style_publicidad.css">
@endsection
@section('content')
<div class="container">
    <section class="title-page filters">
        <h3>Seguimiento de publicaciones</h3>
        <select class="form-control-sm select-marcas" name="marcas" id="marcas">
            <option value="0" disabled>Selecciones una marca</option>
            <option value="1">AMP</option>
            <option value="2">Firenze</option>
            <option value="3">Gatorade</option>
        </select>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Periodos
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Hoy</a>
              <a class="dropdown-item" href="#">Hace una semana</a>
              <a class="dropdown-item" href="#">Hace quince dias</a>
              <a class="dropdown-item" href="#">Hace un mes</a>
              <a class="dropdown-item" href="#">Hace tres meses</a>
              <a class="dropdown-item" href="#">Hace seis meses</a>
            </div>
          </div>
        <button class="btn btn-primary form-control-sm btn-filter">Filtrar</button>
        <button class="btn btn-primary form-control-sm btn-filter">Generar Reporte <i class="fa fa-file-text-o" aria-hidden="true"></i></button>
    </section>
    <section class="container-publicaciones">
        {{-- Primera Publicaicion --}}
        <hr>
        <div class="publicacion">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div>
                        <h4>Publicacion 1</h4>
                    </div>
                    <div class="aprobacion">
                        <div class="row">
                            <div class="col-4">
                                <p class="text-aprobada title-info">Estado aprobación:</p>
                            </div>
                            <div class="col-8">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="nombre-publicacion mt-4"> 
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Nombre:</p>
                            </div>
                            <div class="col-8">
                                <h5>Dia de la Madre</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fecha-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Fecha de Publicacion:</p>
                            </div>
                            <div class="col-8">
                               <input type="date" value="2020-12-21" disabled>
                               <i class="fa fa-calendar" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <div class="redes-sociales mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Redes Sociales:</p>
                            </div>
                            <div class="col-8">
                                <i class="fa fa-facebook red-social" aria-hidden="true"></i>
                                <i class="fa fa-instagram red-social" aria-hidden="true"></i>
                                <i class="fa fa-twitter red-social" aria-hidden="true"></i>
                                <i class="fa fa-youtube red-social" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="observaciones mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">observaciones:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome' disabled>Todo esta bien, publicicacion aprobada</textarea>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="img-publicacion">
                            <div class="row">
                                <div class="col-4">
                                    <p class="title-imagen">Imagen</p>
                                </div>
                            <div class="col-8">
                                <img src="/images/gatorade.jpg" alt="esta es una imagen" style="max-width: 100%;height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="texto-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Texto Publicacion:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome' disabled>🔷PROMO DÍA DE LA MADRE🔷 Sólo por hoy y mañana, celebraremos a las mamás con una súper promo de 50% DESCUENTO. ¡Para que tod@s tengamos salud haciendo lo que más nos gusta, y para que mamá esté orgullosa! Corré a inscribirte 🏃‍♀️🏃‍♂ *Válido 14 y 15 de Agosto.</textarea>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
            
                </div>
                <div class="col-2">
                    <button class="btn btn-primary form-control btn-filter">Editar</button>
                </div>
                <div class="col-2">
                    <button class="btn btn-secondary form-control btn-filter">Archivar</button>
                </div>
            </div>
        </div>
        {{-- Segunda Publicacion --}}
        <hr>
        <div class="publicacion">
            <div class="row">
                <div class="col-6 col-md-6">
                    <div>
                        <h4>Publicacion 2</h4>
                    </div>
                    <div class="aprobacion">
                        <div class="row">
                            <div class="col-4">
                                <p class="text-aprobada title-info">Estado aprobación:</p>
                            </div>
                            <div class="col-8">
                                <i class="fa fa-thumbs-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="nombre-publicacion mt-4"> 
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Nombre:</p>
                            </div>
                            <div class="col-8">
                                <h5>Serie Navideña</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fecha-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Fecha de Publicacion:</p>
                            </div>
                            <div class="col-8">
                               <input type="date" value="2020-12-01" disabled>
                               <i class="fa fa-calendar" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                    <div class="redes-sociales mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Redes Sociales:</p>
                            </div>
                            <div class="col-8">
                                <i class="fa fa-facebook red-social" aria-hidden="true"></i>
                                <i class="fa fa-instagram red-social" aria-hidden="true"></i>
                                <i class="fa fa-twitter red-social" aria-hidden="true"></i>
                                <i class="fa fa-youtube red-social" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="observaciones mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">observaciones:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome' disabled>Cambiar texto de publicacion, y no se hara publicacion en YouTube</textarea>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="img-publicacion">
                            <div class="row">
                                <div class="col-4">
                                    <p class="title-imagen">Imagen</p>
                                </div>
                            <div class="col-8">
                                <img src="/images/firenze.jpg" alt="esta es una imagen" style="max-width: 100%;height: auto;">
                            </div>
                        </div>
                    </div>
                    <div class="texto-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Texto Publicacion:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome' disabled>¡Consiente a todos con lo mejor! … Y eso es: ¡Argan Potion! 🥰 Una línea especializada que funciona para todo tipo de cabello ya que nutre, restaura y fortalece la hebra. #alwaystogether #alwaysstrong #alwaysfirenze</textarea>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
            
                </div>
                <div class="col-2">
                    <button class="btn btn-primary form-control btn-filter">Editar</button>
                </div>
                <div class="col-2">
                    <button class="btn btn-secondary form-control btn-filter">Archivar</button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
