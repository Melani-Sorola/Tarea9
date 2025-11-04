@extends('layouts.admin')
@section('title', 'Contact')

@section('content')
  <h1>Contact Information</h1>
  <ul>
    <li><strong>Address:</strong> Av. Benito Juárez #2500, Guadalupe, Nuevo León</li>
    <li><strong>Phone:</strong> +52 (81) 1234 5678</li>
    <li><strong>Email:</strong> contact@menusproject.mx</li>
  </ul>

  <h3>Location Map</h3>
  <iframe 
    src="https://www.google.com/maps?q=Guadalupe,+Nuevo+Le%C3%B3n,+M%C3%A9xico&output=embed"
    width="100%" height="300" style="border:0; border-radius:8px;" loading="lazy">
  </iframe>
@endsection
