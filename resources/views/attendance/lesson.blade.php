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
        {{ $lesson->name }} Dersi Yoklama
    </h4>
    <div>
        <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>
    </div>    
</div>
<div class=" d-flex justify-content-between tab_title">
    <div></div>
    <form class="row" action="/attendance/lesson/{{ $lesson->id }}">
        <input class="card" type="text" name="day" value="{{ $day }}"/>
        <select class="card" name="month" value="" class="form-select" aria-label="Default select example" required>
            @foreach ($months as $month)
            <option class="card" name="month" value='{{ $month }}' >{{$month }}</option>                   
            @endforeach
          </select>
        <input class="card" type="text" name="year" value="{{ $year }}"/>
        
            <button class="btn btn-warning btn-send"     type="submit">Gönder</button>
    </form>
</div>

<div class="container-table">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">İd</th> --}}
                <th scope="col">Öğrencinin Adı</th>
                {{-- <th scope="col">Tarihi</th> --}}


            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <td scope="row"> 
                {{$user["sequence"]}}</td>
                {{-- <td>{{$subject["id"]}}</td> --}}
                <td>{{$user["name"]}}</td>
                {{-- <td>{{$subject["created_at"]}}</td> --}}


            </tr>
        
            @endforeach
            
        </tbody>
    </table>


</div>



<style>
    .card{
        float: left;
    }
    .container-table{
        margin-left: 10rem;
        margin-right: 10rem;
    }
    .btn-send{
        color:white;
        float: left;
        width: 5rem;
    }
    .tab_title{
        margin-left: 10rem;
        margin-right: 10rem;        
    }
    .card{
        margin-right: 2%;
        width: 20%;
    }
    .row{
        margin-left : 2%;
        margin-right: 2%;
    }

    
</style>
@endsection
