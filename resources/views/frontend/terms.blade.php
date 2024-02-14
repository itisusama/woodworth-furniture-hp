@extends('frontend.layout.master')
@section('website-content')
@include('frontend.components.banner',[
  'mainText' => 'terms and services',
])
  
  <div class="container mb-5">
    <h2 class="mt-4 mb-4">Terms and Services</h2>

    <p>
        Welcome to Pound Kingdom! These terms and conditions outline the rules and regulations for the use of
        poundkingdom.co.uk.
    </p>

    <p>
        By accessing this website, we assume you accept these terms and conditions. Do not continue to use poundkingdom.co.uk
        if you do not agree to take all of the terms and conditions stated on this page.
    </p>

    <h2>License</h2>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut temporibus, ipsa nisi id ducimus necessitatibus
        aperiam sint dolore voluptates fuga.
    </p>

    <h2>Disclaimer</h2>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut temporibus, ipsa nisi id ducimus necessitatibus
        aperiam sint dolore voluptates fuga.
    </p>

    <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, sequi.</li>
    </ul>

    <h2>Lorem, ipsum dolor.</h2>

    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut iste incidunt quo. Iste, possimus sapiente.
    </p>

</div>

@endsection