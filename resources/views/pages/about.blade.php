@extends('layouts.layout')

@section('content')
<div class="about-section">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-md-6">    
                <div class="d-flex flex-column">
                    <h2 class="about">About Us</h2>
                    <p class="profile-dsc">PEA Technology is Nigeria’s foremost creative web design company based in Lagos Nigeria, focused on delivering quality web development that is result oriented and customer satisfaction guaranteed.</p>
                    <p class="profile-dsc">We are a group of talented, trained, motivated and dedicated web design professionals; we place our clients’ needs and expectations above and beyond everything else, while maintaining diligence and integrity in all our dealings.</p>
                </div>   
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column">
                    <img style="height: 360px;" src="/img/about.jpeg" class="img-fluid abt-darken" alt="PEA Technology">
                </div> 
            </div>
        </div> 
    </div>  
</div>
@endsection