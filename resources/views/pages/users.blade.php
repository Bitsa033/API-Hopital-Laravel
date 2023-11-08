@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-10" ng-app="">
            <h5 class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
            </h5>
            <div class="card-body">
                <div class="form-inline">
                    <!-- rechercher un élément dans la table-->
                    <form class="d-flex ">
                        <input class="form-control me-2" type="test" placeholder="Mot clé" aria-label="text">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    
                </div>
                <a href="/printUsers" target="_blank" rel="noopener noreferrer" class="btn btn-info"><i class="fa fa-print"> Imprimer la liste</i></a>
                <br>
                
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom et prenom </th>
                            <th>Type d'utilisateur</th>
                            <th>Option</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                           <td>
                                {{$user->name}}
                            </td> 
                            <td>
                                {{$user->type}}
                            </td> 
                            <td>
                                <a href="/showUser_{{$user->id}}" class="btn btn-info"><i class="fa fa-lock-open"></i> Profil</a>
                            </td> 
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
