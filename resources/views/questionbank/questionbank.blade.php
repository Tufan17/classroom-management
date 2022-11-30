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

<div class="row">
    <div class=" d-flex justify-content-between">
        <h4 >
            Sorubankası
        </h4>
        <div>
            <button type="button" class="btn btn-success" ><a href="/questionbank/add" class="white_a">Ekle</a></button>
            <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>

        </div>
    </div>
    <div class="emptyContainer row">

        @foreach ($questionBanks as $questionBank)
            
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                
            <span style='font-size:100px;'>&#128203;</span>
              <h5 class="card-title">{{ $questionBank["name"] }}</h5>
              <p class="card-text">Bu soru bankasına soru ekleyebilirsiniz veya silebilirsiniz</p>
              <a href="/questionbank/addquestion/{{$questionBank["id"]}}" class="card-link btn btn-success">Soru Ekle</a>
              <a  href="/questionbank/addquestion/{{$questionBank["id"]}}" class="btn btn-warning">Görüntüle</a>
              <a href="/questionbank/delete/{{$questionBank["id"]}}" class="card-link btn btn-danger">Sil</a>
            </div>
          </div>
        @endforeach
        @if (count($questionBanks)==0)
        <div class="emptyContainer">
            <h5 class="emptyTitle">
                Herhangi bir soru bankası bulunamadı...
            </h5>
        </div>
        @endif
    </div>

</div>




<script type="text/javascript">
        function view(id){
            console.log(id);
        }

</script>
            
<style>

    .card{
        margin:3rem;
        max-height: 21rem; 
    }
    .btn{
        height: 2.5rem;
    }
    .row {
        margin-left: 10rem;
        margin-right: 10rem;
    }
    a {
        text-decoration: none;
        color:black;
    }
    .white_a{
        color: beige;
        padding: 5px;
        text-align: start;
    }
    .emptyContainer {
    width: 100rem;
    height: 50rem;
    text-align: center;
    /* background-color: blue; */
    }
    .emptyTitle{
        padding-top: 23rem;
    }

</style>

@endsection
