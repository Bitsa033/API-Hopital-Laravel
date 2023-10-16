@extends('layouts/admin')
@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="col-md-12" ng-app="">
            <h5 class="container">Audience n°{{ $audience->id }}: {{ $audience->nom_patient }} <a href="/printAudience" target="_blank" rel="noopener noreferrer"  class="btn btn-info"><i class="fa fa-print"> Imprimer</i></a></h5>
            <div class="card-body">

                <table class="table table-stripped table-bordered" *ngIf="produits">
                   
                    <tbody>
                        <tr>
                            <th>Qualité</th>
                            <td class="text-center"> {{ $audience->qualite }} </td>
                        </tr>
                        <tr>
                            <th>Type d'audience</th>
                            <td class="text-center"> {{ $audience->audience_type }} </td>
                        </tr>
                        <tr>
                            <th>Responsable d'audience</th>
                            <td class="text-center"> {{ $audience->nom_personnel }} </td>
                        </tr>
                        <tr>
                            <th>Objet</th>
                            <td class="text-center"> {{ $audience->objet }} </td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td class="text-center"> {{ $audience->message }} </td>
                        </tr>

                    </tbody>
                </table>
                <br>
               
                <form autocomplete="off" action="{{url('updateAudience',$audience->id)}}" method="POST" class="form-horizontal card card-body">
                    @csrf
                    <h4 class="card-title">Mise à jour</h4>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nom
                                Client</label>
                            <div class="col-sm-9">
                                <input type="text" name="nom_patient" value="{{$audience->nom_patient}}" class="form-control" id="fname" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="message">{{ $audience->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Responsable en
                                charge</label>
                            <div class="col-sm-9">
                                <select type="text" class="form-control" name="nom_personnel" >
                                    <option value="Directeur général">Directeur général</option>
                                    <option value="Généraliste">Généraliste</option>
                                    <option value="Ophtamologue">Ophtamologue</option>
                                    <option value="Immunologue">Immunologue</option>
                                    <option value="Immunologue">Immunologue</option>
                                    <option value="Neurologue">Neurologue</option>
                                    <option value="Pneumologue">Pneumologue</option>
                                    <option value="Cardiologue">Cardiologue</option>
                                    <option value="Ondologue">Ondologue</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Modifier
                            </button>
                            <button type="submit" class="btn btn-danger">
                                Supprimer
                            </button>
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
