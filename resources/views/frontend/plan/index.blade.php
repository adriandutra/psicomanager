@extends('frontend.layouts.app')

@section('htmlheader_title')
   Planes

@endsection

@section('content')

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg_2 bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Planes</h3>
                        <p><a href="{{url('/')}}">Inicio /</a> Planes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

        <!-- offers_area_start -->
        <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Nuestros Planes</h3>
                        <p>Precios bajos y accesibles. <br>
                            Realice una prueba gratis de nuestra APP. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_content text-center">
                            <h3><a href="#">Plan estudiante</a></h3><br><br>
                            <h1><a href="#">Gratis</a></h1><br><br>
                            <p>Ideal para estudiantes.</p>
                        </div>
                        <div class="department_content text-center">
                            <ul>
                               <li class="experts_name">Cuenta para un profesional.</li><br>
                               <li class="experts_name">Tres pacientes.</li><br>
                               <li class="experts_name">Agenda Parcial.</li><br>
                               <li class="experts_name">Notificaciones vía email.</li><br><br>
                            </ul>
                            <a href="#" class="genric-btn success">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_content text-center">
                            <h3><a href="#">Plan Individual</a></h3><br><br>
                            <h1><sup>$</sup><a href="#">150</a></h1><br><br>
                            <p>Ideal para autónomos.</p>
                        </div>
                        <div class="department_content text-center">
                            <ul>
                               <li class="experts_name">Cuenta para un profesional.</li><br>
                               <li class="experts_name">Veinte pacientes.</li><br>
                               <li class="experts_name">Agenda Parcial.</li><br>
                               <li class="experts_name">Notificaciones vía email.</li><br><br>
                               <li class="experts_name">Control Financiero.</li><br><br>
                               <li class="experts_name">Pago Automático.</li><br><br>
                            </ul>
                            <a href="#" class="genric-btn success">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_content experts_name text-center">
                            <h3><a href="#">Plan Profesional</a></h3><br><br>
                            <h1><sup>$</sup><a href="#">250</a></h1><br><br>
                            <p>Ideal para profesionales.</p>
                        </div>
                        <div class="department_content text-center">
                            <ul>
                               <li class="experts_name">Cuenta para un profesional.</li><br>
                               <li class="experts_name">Pacientes ilimitados.</li><br>
                               <li class="experts_name">Agenda Completa.</li><br>
                               <li class="experts_name">Notificaciones vía email y Whatsapp.</li><br><br>
                               <li class="experts_name">Control Financiero.</li><br><br>
                               <li class="experts_name">Pago Automático.</li><br><br>
                            </ul>
                            <a href="#" class="genric-btn success">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->

@endsection
@section('custom-scripts')

@endsection
