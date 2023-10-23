@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="offset-2 col-md-7" ng-app="">
            <h5 class="container">
            @if (!$erreur)
                Nouvel Employé!
                
            @else
                <div class="alert alert-danger">
                    {{$erreur}}
                </div>
            @endif
           
            </h5>
            <form autocomplete="off" action="{{url('storeEmploye')}}" method="POST" class="form-horizontal card card-body">
                @csrf
                <h4 class="card-title">Informations Personnelles</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                            Employé</label>
                        <div class="col-sm-9">
                            <input type="text" name="nom" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Téléphone
                            </label>
                        <div class="col-sm-9">
                            <input type="text" name="telephone" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="objet" class="col-sm-3 text-end control-label col-form-label">Adresse</label>
                        <div class="col-sm-9">
                            <input type="text" name="adresse" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Fonction</label>
                        <div class="col-sm-9">
                            <input type="text" name="fonction" class="form-control" id="fname" />
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