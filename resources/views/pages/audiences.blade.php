@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-10" ng-app="">
            <h5 class="container">Liste des Audience!</h5>
            <div class="card-body">
                <div class="">
                    <a href="/audience" class="btn btn-primary"> <i class="fa fa-plus"></i></a>
                    <button class="btn btn-danger del-1"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-success edit-1"><i class="fa fa-pen"></i></button>
                    <br><br>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Mot clé" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    
                </div>
                
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
                        <tr >
                            <td colspan="6" class="text-center">Votre Tableau est vide pour le moment ...</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <!--/card-body-->
        </div>
        
        <!--/col-->

    </div>
    <!--/row-->
    
@endsection
