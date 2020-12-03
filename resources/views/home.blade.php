@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div><h3>BIENVENIDO USUARIO</h3></div>
        <div class="col-md-12">
            <div class="row ">
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/drinkit.png" alt="marca1">
                    <h5>Drinkit</h5>
                </div>
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/marca1.jpg" alt="marca2">
                    <h5>Pepsi</h5>
                </div>
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/globalalimentos.jpg" alt="marca3">
                    <h5>Global Alimentos</h5>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/amp.png" alt="marca1">
                    <h5>AMP</h5>
                </div>
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/firenze_marca.jpg" alt="marca2">
                    <h5>Firenze Profesional</h5>
                </div>
                <div class="col-4 marca-cont justify-content-center">
                    <img class="img-circulo rounded-circle" src="/images/afp_crecer.png" alt="marca3">
                    <h5>AFP Crecer</h5>
                </div>
            </div>
        </div>
        <section id="ecommerce-pagination">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-2">
                            <li class="page-item prev-item"><a class="page-link" href="#">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item next-item"><a class="page-link" href="#">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
