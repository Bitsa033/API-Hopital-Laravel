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
                        @foreach ($users as $item)
                            <tr >
                                <td class="text-center"> {{$item->name}} </td>
                                 <td class="text-center"> {{$item->type}} </td>
                                 <td class="text-center">
                                    @if ($item->id == Auth::user()->id)
                                        <a href="/showUser_{{ $item->id }}" class="btn btn-primary"><i class="fa fa-lock-open"></i> Profil</a> 
                                    @else
                                    <a class="btn btn-dark"><i class="fa fa-lock"></i> Bloqué</a> 
                                    @endif
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
