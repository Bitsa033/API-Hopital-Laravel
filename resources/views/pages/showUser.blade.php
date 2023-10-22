@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12" ng-app="">
            <h5 class="container">Utilisateur n°{{ $user->id }}: {{ $user->name }} <a href="/printUser" target="_blank" rel="noopener noreferrer"  class="btn btn-info"><i class="fa fa-print"> Imprimer</i></a></h5>
            <div class="card-body">

                <table class="table table-stripped table-bordered" *ngIf="produits">
                   
                    <tbody>
                        <tr>
                            <th>Email</th>
                            <td class="text-center"> {{ $user->email }} </td>
                        </tr>
                        <tr>
                            <th>Téléphone</th>
                            <td class="text-center"> {{ $user->phone }} </td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td class="text-center"> {{ $user->adress }} </td>
                        </tr>
                        <tr>
                            <th>Statut</th>
                            <td class="text-center"> {{ $user->type }} </td>
                        </tr>

                    </tbody>
                </table>
                <br>
               
                <form autocomplete="off" action="{{url('updateUser',$user->id)}}" method="POST" class="form-horizontal card card-body">
                    @csrf
                    <h4 class="card-title">Mise à jour</h4>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                                Nom</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$user->name}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="{{$user->email}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 text-end control-label col-form-label">Téléphone</label>
                            <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="fname" />
                        </div>
                        <div class="form-group row">
                            <label for="objet" class="col-sm-3 text-end control-label col-form-label">Adresse</label>
                            <input type="text" name="adress" value="{{$user->adress}}" class="form-control" id="fname" />
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Mot de passe</label>
                            <div class="col-sm-9">
                                {{-- <input class="form-control" type="password" name="password" value="{{ $user->password }}"> --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Statut</label>
                            <div class="col-sm-9">
                                <select type="text" class="form-control" name="type">
                                    <option value="Sécretaire">Sécretaire</option>
                                    <option value="Directeur">Directeur</option>
                                    <option value="Administrateur">Administrateur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                            <a href="{{url('deleteUser',$user->id)}}" class="btn btn-danger">
                                Supprimer
                            </a>
                            <br><br>
    
                        </div>
                    </div>
                </form>
            </div>
            <!--/card-body-->
        </div>

        <!--/col-->

    </div>
    <!--/row-->
@endsection
