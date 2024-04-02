@extends('layout')
@section('content')
<div class =" jumbotron">
    <p class =" h3 text-center py-4 "> <STRONG>Quiz Voleibol</STRONG>  </p >
</div >

<div class =" row">
    <div class =" col-md-6 col-sm-6 text-center imagem ">
        <a href ="# " class =" img-thumbnail logo ">
            <img class =" img-fluid " src =" {{ asset ('storage/imagem/teste.webp') }}" />
        </a >
    </div >
    <div class =" col -md -6 col -sm -6 text - center py -4 ">
        <p class =" texto ">
            <h4> Este quiz é para saber seu conhecimento sobre
                <strong> VÔLEI! </strong> </h4 >
        </p >
        <div class =" card-footer py-4 text-center " >
            <a href ="/iniciar" class =" btn btn-primary" role =" button ">Iniciar Quiz</a >

        </div>
    </div>
</div>
@endsection