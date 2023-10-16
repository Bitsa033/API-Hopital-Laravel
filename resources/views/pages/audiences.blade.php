@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12" ng-app="">
            <h5 class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
            </h5>
            <div class="card-body">
                <div class="form-inline">
                    <!-- rechercher un élément dans la table-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="test" placeholder="Mot clé" aria-label="text">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- supprimer un élément-->
                    <form class="d-flex offset-1">
                        <input class="form-control me-2" type="text" placeholder="User ID" aria-label="test">
                        <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>

                </div>
                <a href="/createAudience" class="btn btn-primary"><i class="fa fa-plus"> Nouveau Ticket</i></a>
                <a href="/printAudiences" target="_blank" rel="noopener noreferrer" class="btn btn-info"><i
                        class="fa fa-print"> Imprimer tous les Tickets</i></a>
                <br>

                <table class="table table-stripped table-bordered" *ngIf="produits">
                    <thead>
                        <tr>
                            <th>Nom patient</th>
                            <th>Type d'audience</th>
                            <th>Responsable d'audience</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($audiences as $item)
                            <tr>
                                <td class="text-center"> {{ $item->nom_patient }} </td>
                                <td class="text-center"> {{ $item->audience_type }} </td>
                                <td class="text-center"> {{ $item->nom_personnel }} </td>
                                <td class="text-center">
                                    <a href="/showAudience_{{ $item->id }}" class="btn btn-primary">Détails</a>
                                </td>
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
