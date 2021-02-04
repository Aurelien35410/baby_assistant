@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')
    <h3 class="row justify-content-center">Modification de profil</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2">
                <form class="form-group" action="{{url('editprofil/'.$user->id)}}" method="post">
                    @csrf
                    <label class="mt-3" for="name">Nom</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">
                    <label class="mt-3" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">
                    <input class="form-control mt-3 btn btn-success" type="submit" value="Valider">
                </form>
                     <a href="{{ url('/')}}"><input class="form-control mt-3 mb-3 btn btn-warning" type="submit" value="Annuler"></a>
                    <a href="{{ url('/deleteprofil/'.$user->id)}}" onclick="return confirm('Etes vous sûr de supprimer votre profil? Toutes les données seront perdus')"><input class="form-control mt-3 btn btn-danger" type="submit" value="Supprimer mon profil"></a>
            </div>

        </div>
    </div>
@endsection
