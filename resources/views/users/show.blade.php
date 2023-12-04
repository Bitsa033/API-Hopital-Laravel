@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-md-12" ng-app="">
            <h5 class="container">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
            </h5>
            <div class="card-body" style="background: blueviolet;">
                <div class="form-inline">
                    <!-- rechercher un élément dans la table-->
                    <form class="d-flex ">
                        <input class="form-control me-2" type="test" placeholder="Mot clé" aria-label="text">
                        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    
                    <a href="/printUsers" target="_blank" class="offset-1 btn btn-info"><i class="fa fa-print"> Imprimer la liste</i></a>
                </div>
                
                <div class="row">
                    @foreach ($users as $user)
                    <div class="col-6">

                        <div class="card">
                            <table class="table">
                                <tr>
                                    <th>Nom</th>
                                    <td>{{$user->name}}</p></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$user->email}}</p></td>
                                </tr>
                                <tr>
                                    <th>Téléphone</th>
                                    <td>{{$user->phone}}</p></td>
                                </tr>
                                <tr>
                                    <th>Adresse</th>
                                    <td>{{$user->adress}}</p></td>
                                </tr>
                                <tr>
                                    <th>Code</th>
                                    <td>{{'************'}}</p></td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{$user->type}}</p></td>
                                </tr>
                                <div class="form-inline">
                                    <a href="/showUser_{{ $user->id }}" target="_blank" class=" offset-4 btn btn-light">Editer</a>
                                    <a href="" target="_blank" class="btn btn-light">Imprimer</a>
        
                                </div>
                            </table>
                        
                        </div>
                    </div>
                    {{-- col --}}
                    @endforeach
                </div>
                {{-- row --}}
            </div>
            <!--/card-body-->
        </div>
        
        <!--/col-->

    </div>
    <!--/row-->
    
@endsection
