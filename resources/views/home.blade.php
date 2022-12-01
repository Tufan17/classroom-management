<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@extends('layouts.app')

@section('content')
<div class="row mx-md-n5">
<a class="col px-md-5" href="lesson">
      <div class="p-3 border bg-light title"><h5>Dersler</h5></div>
      <div class="p-3 border bg-light ders"></div>
  </a>
    <a class="col px-md-5" href="exam">
      <div class="p-3 border bg-light title"><h5>Sınav</h5></div>
      <div class="p-3 border bg-light sınav"></div>
  </a>
</div>
<br/>
<br/>

<div class="row mx-md-n5">
  <a class="col px-md-5" href="questionbank">
    <div class="p-3 border bg-light title"><h5>Sorubankası</h5></div>
    <div class="p-3 border bg-light sorubankası"></div>

  </a>
  <a class="col px-md-5">
    <div class="p-3 border bg-light title"><h5>Yoklama</h5></div>
    <div class="p-3 border bg-light yoklama"></div>

  </a>
</div>

<style>
   a {
     text-decoration: none;
     color:black;
    }
  .title{
    text-align: center;
  }
  .ders{
        width: 100%;
        height:300;
        background-size:cover;
        background-image: url("https://firebasestorage.googleapis.com/v0/b/classroom-management-7af8e.appspot.com/o/laravel%2Fdersler.png?alt=media&token=54012b5d-33b1-494c-9d95-d46be93c9bf4");
    }
    .sınav{
        width: 100%;
        height:300;
        background-size:cover;  
        background-image: url("https://firebasestorage.googleapis.com/v0/b/classroom-management-7af8e.appspot.com/o/laravel%2Fshutterstock_2053107446-141220211227.png?alt=media&token=2edccab1-3b26-4d0d-ab3e-d3d83af2e101");
    }
    .sorubankası{
        width: 100%;
        height:300;
        background-size:cover;
        background-image: url("https://firebasestorage.googleapis.com/v0/b/classroom-management-7af8e.appspot.com/o/laravel%2Fsoru-bankasi-32.png?alt=media&token=904d7bbe-8b3a-4660-a4dc-f657f11c4477");
    }
    .yoklama{
        width: 100%;
        height:300;
        background-size:cover;
        background-image: url("https://firebasestorage.googleapis.com/v0/b/classroom-management-7af8e.appspot.com/o/laravel%2Fistockphoto-824226950-170667a.jpg?alt=media&token=6f4a5148-711e-4748-9c8a-f71ac6767348");
    }
</style>
@endsection
