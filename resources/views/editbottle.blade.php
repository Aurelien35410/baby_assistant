@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')
    <h3 class="row justify-content-center">Modification du biberon du {{ $bottle->created_at->format('d/m/Y H:i:s') }}</h3>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2">
                {{var_dump ($bottle->pipi)}}
                {{var_dump ($bottle->caca)}}
                <form class="form-group" action="{{url('editbottle/'.$bottle->id)}}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $bottle->id }}">
                    <label class="mt-3" for="created_at">Horaire</label>
                    <input class="form-control" type="text" name="created_at" id="created_at" value="{{ $bottle->created_at }}">
                    <label class="mt-3" for="quantity">Quantité</label>
                    <input class="form-control" type="number" name="quantity" id="quantity" value="{{ $bottle->quantity }}">
                    <label class="mt-3" for="pipi">Y'a t'il de l'urine dans sa couche?</label>
                    <select class="form-control" name="pipi" >
                        <option value="1" @if ($bottle->pipi == 1) selected @endif>Oui</option>
                        <option value="0" @if ($bottle->pipi == 0) selected @endif>Non</option>
                    </select>
                    <label class="mt-3" for="caca">Y'a t'il des selles dans sa couche?</label>
                    <select class="form-control" name="caca">
                        <option value="1" @if ($bottle->caca == 1) selected @endif>Oui</option>
                        <option value="0" @if ($bottle->caca == 0) selected @endif>Non</option>
                    </select>
                    <input class="form-control mt-3 btn btn-success" type="submit" value="Valider">
                    <a href="{{ url('/')}}"><input class="form-control mt-3 btn btn-warning" type="submit" value="Annuler"></a>
                </form>
            </div>

        </div>
    </div>
@endsection
