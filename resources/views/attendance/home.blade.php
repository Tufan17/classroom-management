<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@extends('layouts.app')

@section('content')
<div class=" d-flex justify-content-between tab_title">
    <h4 >
        Yoklama
    </h4>
    <div>
      
        <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>
    </div>
</div>
</div>
    <div class="row">
        @foreach ($lessons as $lesson)

        <a href="/attendance/lesson/{{ $lesson->id }}" class="card">
            <i class="fa fa-book" style='font-size:10rem;margin-left:7rem '></i>
            <div class="card-body">
            <p class="card-text text-center">{{ $lesson->name }}</p>
            </div>
        </a>
            
        @endforeach
        
    </div>


<style>
    .tab_title{
        margin-left: 10rem;
        margin-right: 10rem;        
    }
    .btn{
        height: 2.2rem;
        align-content: center;
    }
    .card{
        margin-right: 2%;
        margin-top: 3rem;
        width: 23%;
    }
    .row{
        margin-left : 2%;
        margin-right: 2%;


    }
    a{
        color: rgb(65, 65, 65);
        text-decoration: none;
 
    }
    
</style>
@endsection
