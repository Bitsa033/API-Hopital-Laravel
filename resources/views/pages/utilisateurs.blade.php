@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-10" ng-app="">
            <h5 class="container">Liste des Utilisateurs!</h5>
            <div class="card-body">
                <div class="">
                    <a href="/user-add" class="btn btn-primary"> <i class="fa fa-plus"></i></a>
                    <button class="btn btn-danger del-1"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-success edit-1"><i class="fa fa-pen"></i></button>
                    <br><br>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Mot clé" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    
                </div>
                
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
