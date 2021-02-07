@extends('layouts.layout')

@section('content')
    <div class="feature-section"> 
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VshvuYyh7a8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <div class="watch-section-2">
                        <h5 class="watch">WATCH THIS<br><span class="watch2">Let your money work for you</span></h5> 
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat. Proin ornare nisi in lorem blandit suscipit. Nam at lobortis mauris, vitae dignissim eros. lobortis mauris, vitae dignissim eros.</p>  
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat. Proin ornare nisi in lorem blandit suscipit. Nam at lobortis mauris, vitae dignissim eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat. Proin ornare nisi in lorem blandit suscipit. Nam at lobortis mauris, vitae dignissim eros. consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat.</p>  
                    </div>
                </div>
            </div> 
        </div>
    </div>

     <div id="feature-section2" class="feature-dark"> 
        <div class="container">
            <div class="row">
                <div class="col-md-6 feature-caption">
                    <div class="feature-content">
                        <h5 style="padding-top: 70px; color: #ccc;" class="watch">What we provide<br><span class="watch2">Earn more money with Fixed Deposits</span></h5> 
                        <p style="color: #ccc;">Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat Proin ornare nisi in lorem blandit suscipit. Nam at lobortis mauris, vitae dignissim eros. Lorem ipsum dolor sit amet</p>  
                        <p style="color: #ccc;">Lorem ipsum dolor sit amet consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat. Proin ornare nisi in lorem blandit suscipit. Nam at lobortis mauris, vitae dignissim eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam sed justo a volutpat.</p>  
                        <a style="margin-bottom: 50px" href="" class="mybtn">CONTACT US</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="money-img" src="/img/money.png" alt="Company Logo">  
                </div>  
            </div> 
        </div>
    </div> 




<!-- Contenedor -->
	<div  style="background-color: #ccc; margin-bottom: 50px; padding-bottom: 50px; color: #fff; font-size: 62.5%; font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;" class="pricing-section">
	<div class="pricing-wrapper clearfix">
		<!-- Titulo -->
		<h1 style="text-align: center; color: #232323; padding-top: 30px" class="pricing-table-title">The best investment plan</h1>
        <p style="text-align: center; color: #232323; font-size: 15px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium lectus non tristique consectetur. <br> Proin ac dapibus elit, sit amet suscipit ante.</p>

		<div class="pricing-table">
			<h3 class="pricing-title">Gold Plan</h3>
			<div class="price">₦10,000,000<sup>/ Month</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li> <i style="color: green" class="fas fa-check"></i> 10 GB <span>De almacenamiento</span></li>
				<li><i style="color: green" class="fas fa-check"></i> 1 Dominio <span>incluido</span></li>
				<li><i style="color: green" class="fas fa-check"></i> 25 GB <span>De transferencia mensual</span></li>
				<li><i style="color: green" class="fas fa-check"></i> Base de datos <span class="unlimited">ilimitadas</span></li>
				<li><i style="color: green" class="fas fa-check"></i> Cuentas de correo <span class="unlimited">ilimitadas</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>25%<sup>/ Monthly</sup></p>
				<a href="/login" class="pricing-action">INVEST NOW</a>
			</div>
		</div>
		
		<div class="pricing-table recommended">
			<h3 class="pricing-title">Silver Plan</h3>
			<div class="price">₦5,000,000<sup>/ Month</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li> <i style="color: green" class="fas fa-check"></i> 35 GB <span>De almacenamiento</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> 5 Dominios <span>incluidos</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> 100 GB <span>De transferencia mensual</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> Base de datos <span class="unlimited">ilimitadas</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> Cuentas de correo <span class="unlimited">ilimitadas</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>20%<sup>/ Monthly</sup></p>
				<a href="/login" class="pricing-action">INVEST NOW</a>
			</div>
		</div>

		<div class="pricing-table">
			<h3 class="pricing-title">Bronze Plan</h3>
			<div class="price">₦1,000,000<sup>/ Month</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li> <i style="color: green" class="fas fa-check"></i> 100 GB <span>De almacenamiento</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> 8 Dominios <span>incluidos</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> 200 GB <span>De transferencia mensual</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> Base de datos <span class="unlimited">ilimitadas</span></li>
				<li> <i style="color: green" class="fas fa-check"></i> Cuentas de correo <span class="unlimited">ilimitadas</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>10%<sup>/ Monthly</sup></p>
				<a href="/login" class="pricing-action">INVEST NOW</a>
			</div>
		</div>
	</div>
	</div>
     
@endsection 