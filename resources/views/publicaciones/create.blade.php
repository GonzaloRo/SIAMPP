@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="/css/style_publicidad.css">
@endsection
@section('content')
<div class="container">
    <section class="title-page filters">
        <h1>Seguimiento de publicaciones</h1>

        <button class="btn btn-primary form-control-sm btn-filter">Guardar</button>
        <button class="btn btn-secondary form-control-sm btn-filter">Cancelar</button>
    </section>
    <section class="container-publicaciones">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      No Aprobada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Aprobada
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nombre-publicacion mt-4"> 
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Nombre:</p>
                            </div>
                            <div class="col-8">
                                <input type="text" title="name-publicacion">
                            </div>
                        </div>
                    </div>
                    <div class="fecha-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Fecha de Publicacion:</p>
                            </div>
                            <div class="col-8">
                               <input type="date" value="2020-12-21">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox1" value="option1" checked>
                                    <label class="form-check-label" for="checkbox1">
                                        <i class="fa fa-youtube red-social" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="checkbox2">
                                        <i class="fa fa-twitter red-social" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox1" value="option3" checked>
                                    <label class="form-check-label" for="checkbox1">
                                        <i class="fa fa-instagram red-social" aria-hidden="true"></i>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="inlineCheckbox2" value="option4">
                                    <label class="form-check-label" for="checkbox2">
                                        <i class="fa fa-facebook red-social" aria-hidden="true"></i>
                                    </label>
                                </div>       
                            </div>
                        </div>
                    </div>
                    <div class="observaciones mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">observaciones:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome'>Todo esta bien, publicicacion aprobada</textarea>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="img-publicacion">
                            <div class="row">
                                <div class="col-4">
                                    <p class="title-imagen">Imagen:</p>
                                </div>
                            <div class="col-8">
                                <img src="/images/gatorade.jpg" alt="esta es una imagen" style="max-width: 100%;height: auto;">
                                <form>
                                    <div class="form-group">
                                      <label for="exampleFormControlFile1">Imagen</label>
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <div class="texto-publicacion mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p class="title-info">Texto Publicacion:</p>
                            </div>
                            <div class="col-8">
                                <textarea class="text-observacion" name='awesome'>🔷PROMO DÍA DE LA MADRE🔷 Sólo por hoy y mañana, celebraremos a las mamás con una súper promo de 50% DESCUENTO. ¡Para que tod@s tengamos salud haciendo lo que más nos gusta, y para que mamá esté orgullosa! Corré a inscribirte 🏃‍♀️🏃‍♂ *Válido 14 y 15 de Agosto.</textarea>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
