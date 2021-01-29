@extends('layouts.layout')

@section('content')
    <form id="contact-us" style="margin-top: 50px" method="POST" action="https://formspree.io/patrickasu@gmail.com">
      <div class="contactus-container">
        <div class="head">
          <h2 style="">GET IN TOUCH WITH US</h2>
          <p style="padding-bottom: 10px">Fill the form below to reach us ASAP. You can reach us via 08182256436.</p>
        </div>
        <input type="text" name="name" placeholder="Enter your Name" /><br />
        <input  type="email" name="email" placeholder="Email Address" /><br />
        <input  type="text" name="subject" placeholder="Subject" /><br />
        <textarea type="text" name="message" placeholder="Your Message"></textarea><br />
        <div class="message">Message Sent</div>
        <button id="submit" type="submit">
          Send Message!
        </button>
      </div>
</form>
@endsection