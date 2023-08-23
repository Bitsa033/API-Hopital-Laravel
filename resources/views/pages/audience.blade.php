@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="offset-2 col-md-7" ng-app="">
            <h5 class="container">Nouvel Audience!</h5>
            <form autocomplete="off" {{ route('saveAudience') }} class="form-horizontal card card-body">
                @csrf
                #registerForm="ngForm">
                <h4 class="card-title">Informations Personnelles</h4>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                            visiteur</label>
                        <div class="col-sm-9">
                            <input type="text" name="nom_patient" class="form-control" id="fname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Qualité</label>
                        <div class="col-sm-9">
                            <input type="text" name="qualite" class="form-control" id="lname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Type
                            d'audience</label>
                        <div class="col-sm-9">
                            <input type="text" [(ngModel)]="audience.audience_type" name="audience_type"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Objet</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="objet" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="message"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Responsable en
                            charge</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nom_personnel" />
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
