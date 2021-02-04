@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

            <div class="col-3">
                <form class="form-group" action="{{url('newbottle')}}" method="post">
                    @csrf
                    <label for="quantity">Quantité</label>
                    <input class="form-control" type="number" name="quantity" id="quantity">
                    <label for="pipi">Y'a t'il de l'urine dans sa couche</label>
                    <select class="form-control" name="pipi">
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                    <label for="caca">Y'a t'il des selles dans sa couche</label>
                    <select class="form-control" name="caca">
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                    <input class="form-control mt-3 btn btn-success" type="submit" value="Valider">
                </form>
            </div>

    </div>
</div>
@endsection
