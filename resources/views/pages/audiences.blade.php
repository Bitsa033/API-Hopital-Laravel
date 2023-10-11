@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-10" ng-app="">
            <h5 class="container">Liste des Audience!</h5>
            <div class="card-body">
                <div class="form-inline">
                    <!-- supprimer un élément-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Ticket ID" aria-label="test">
                        <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                    <!-- rechercher un élément dans la table-->
                    <form class="d-flex offset-1">
                        <input class="form-control me-2" type="test" placeholder="Mot clé" aria-label="text">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <a href="/audience-add" class="btn btn-primary"><i class="fa fa-plus"> Nouveau Ticket</i></a>
                    <a href="/audience-add" class="btn btn-warning"><i class="fa fa-edit"> Modifier Ticket</i></a>
                    <a href="/printAudiences" target="_blank" rel="noopener noreferrer"  class="btn btn-info"><i class="fa fa-print"> Imprimer tous les Tickets</i></a>
                    
                </div>
                <br>

                <table class="table table-stripped table-bordered" *ngIf="produits">
                    <thead>
                        <tr>
                            <th>Ticket ID</th>
                            <th>Nom patient</th>
                            <th>Qualité</th>
                            <th>Type d'audience</th>
                            <th>Objet</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($audiences as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }} </td>
                                <td class="text-center"> {{ $item->nom_patient }} </td>
                                <td class="text-center"> {{ $item->qualite }} </td>
                                <td class="text-center"> {{ $item->audience_type }} </td>
                                <td class="text-center"> {{ $item->objet }} </td>
                                <td class="text-center"> {{ $item->message }} </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!--/card-body-->
        </div>

        <!--/col-->

    </div>
    <!--/row-->
@endsection
