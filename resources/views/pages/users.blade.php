@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-10" ng-app="">
            <h5 class="container">Liste des Utilisateurs!</h5>
            <div class="card-body">
                <div class="form-inline">
                    <!-- supprimer un élément-->
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="User ID" aria-label="test">
                        <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                    <!-- rechercher un élément dans la table-->
                    <form class="d-flex offset-1">
                        <input class="form-control me-2" type="test" placeholder="Mot clé" aria-label="text">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <a href="/user-add" class="btn btn-primary"><i class="fa fa-plus"> Nouveau User</i></a>
                    <a href="/user-add" class="btn btn-warning"><i class="fa fa-edit"> Modifier User</i></a>
                    <a href="/printUsers" target="_blank" rel="noopener noreferrer" class="btn btn-info"><i class="fa fa-print"> Imprimer tous les Users</i></a>
                </div>
                <br>
                
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom et prenom </th>
                            <th>Teléphone</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Type d'utilisateur</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr >
                                <td class="text-center">{{ $item->id}}  </td>
                                <td class="text-center"> {{$item->name}} </td>
                                <td class="text-center"> {{$item->phone}} </td>
                                <td class="text-center"> {{$item->adress}} </td>
                                <td class="text-center"> {{$item->email}} </td>
                                 <td class="text-center"> {{$item->type}} </td>
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
