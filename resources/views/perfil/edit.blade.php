@extends('layouts.default')
@section('titulo_pagina','Mascotas | Perfil')
@section('titulo','Mascotas')
@section('subtitulo','Perfil')
@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-dorder">
                <h3 class="box-title">Perfil</h3>
            </div>

            @if(Session::has('exito'))
                <div class="alert alert-success alert-dismissible" style="margin-top:20px;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success alert preview. This alert is dismissable.
                </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire
                    soul, like these sweet mornings of spring which I enjoy with my whole heart.
                </div>
                @endif

            <div class="box-body">
            <form class="POST" action="{{route('perfil.update', $usuario->id)}}">
            @csrf
            @method('PUT')
                Formulario
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="nombre" type="text" class="form-control" value="{{$usuario->name}}">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" value="{{$usuario->email}}">
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input name="password" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirmar Contraseña</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input name="foto" type="file" class="form-control">
                </div>
                <div class="form-group">
                @if($usuario->foto)
                    <img src="{{$usuario->foto}}" class="img-responsive" style="width:200px; height:auto"/>
                @endif
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection