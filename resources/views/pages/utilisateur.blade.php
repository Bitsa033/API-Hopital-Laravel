@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="offset-2 col-md-7" ng-app="">
            <h5 class="container">Nouvel Utilisateur!</h5>
            <form autocomplete="off" action="{{url('user-store')}}" method="POST" class="form-horizontal card card-body" >
                @csrf
                <h4 class="card-title">Informations Personnelles</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                            </label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Adresse</label>
                        <div class="col-sm-9">
                            <input type="text" name="adress" class="form-control" id="lname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Teléphone</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Mot de passe</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Type utilisateur</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" name="type_utilisateur">
                                <option value="s">Sécretaire</option>
                                <option value="d">Directeur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                        <br><br>

                    </div>
                </div>
            </form>
        </div>
        
        <!--/col-->

    </div>
    <!--/row-->
    
@endsection
