@extends('layouts.app')

@section('title', 'Acceuil')


@section('content')
<h1 class="row justify-content-center">Tableau de Bord</h1>
<div class="row ml-2">

    <div class="border border-dark col-5 m-4">
    <h3 class="row justify-content-center">Historique</h3>
    <div class="row justify-content-center">
        <table class="table table-striped">
            <thead>
            <tr>
            <th scope="col">Heure</th>
            <th scope="col">Quantité</th>
            <th scope="col">Urines</th>
            <th scope="col">Selles</th>
            <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                     @foreach($bottles as $bottle)
                         <tr>
                    <th scope="row">{{ $bottle->created_at->format('d/m/Y à H:i:s') }}</th>
                    <td>{{$bottle->quantity}}<span> ml</span></td>
                    <td>@if($bottle->pipi == 0)Non @elseif($bottle->pipi == 1) Oui @endif</td>
                    <td>@if($bottle->caca == 0)Non @elseif($bottle->caca == 1) Oui @endif</td>
                    <td>
                        <a href="{{ url('/editbottle/'.$bottle->id)}}"><input class="btn btn-secondary" type="submit" value="Modifier"></a>
                        <a href="{{url('/deletebottle/'.$bottle->id)}}" onclick="return confirm('Etes vous sûr de supprimer ce biberon?')"><input class="btn btn-secondary" type="submit" value="Supprimer"></a>
                    </td>
                 @endforeach
                </th>
            </tr>
            </tbody>
        </table>
        <div class="text-secondary">
        {!! $bottles->links() !!}
        </div>
    </div>
    </div>
    <div class="border border-dark col-6 m-4">
        <h3 class="row justify-content-center mt-4 mb-5">Chiffres clés</h3>
        <div class="row justify-content-center mb-5">

            <div class="card" style="width: 14rem;">
                <div class="card-body text-center text-light bg bg-dark">
                    <h5 class="card-title"><i class="fas fa-prescription-bottle"></i></h5>
                    <h5 class="card-text">{{ $quantity }} ml</h5>
                    <p class="card-text">Quantité de lait consommé aujourd'hui</p>
                </div>
            </div>
            <div class="card" style="width: 14rem;">
                <div class="card-body text-center text-light bg bg-dark">
                    <h5 class="card-title"><i class="fas fa-prescription-bottle"></i></h5>
                    <h5 class="card-text">{{ round($quantity/300*100) }} %</h5>
                    <p class="card-text">Quantité recommandé : 300ml</p>
                </div>
            </div>
            <div class="card" style="width: 14rem;">
                <div class="card-body text-center text-light bg bg-dark">
                    <h5 class="card-title"><i class="fas fa-tint"></i></h5>
                    <h5 class="card-text">@if ($lastpipitime == "NC") NC @elseif($lastpipitime != "NC"){{ $lastpipitime->format('d/m/Y H:i:s') }} @endif</h5>
                    <p class="card-text">Dernière urines</p>
                </div>
            </div>
            <div class="card" style="width: 14rem;">
                <div class="card-body text-center text-light bg bg-dark">
                    <h5 class="card-title"><i class="fas fa-poop"></i></h5>
                    <h5 class="card-text">@if ($lastcacatime == "NC") NC @elseif($lastcacatime != "NC"){{ $lastcacatime->format('d/m/Y H:i:s') }} @endif</h5>
                    <p class="card-text">Dernieres selles</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ml-2">
    <div class="border border-dark col-5 m-4">
        <h3 class="row justify-content-center">Notifications Récentes</h3>
        <div class="row justify-content-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Heure</th>
                    <th scope="col">Message</th>
                </tr>
                </thead>
                <tbody>
                @foreach($notifications as $notification)
                    <tr>
                        <th scope="row">{{ $notification->created_at->format('d/m/Y à H:i:s') }}</th>
                        <td>{{$notification->notification}}</td>
                    </tr>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
