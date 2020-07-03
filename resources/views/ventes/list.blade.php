@extends('home')
 @extends('layouts/include')
 @section('conten')



 <div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab table-bordered">
    <thead>
    <a href="{{ url('creer_produit') }}" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b> Ajouter un produit</a>

        <tr>
            <th>ID</th>
            <th>Nom client</th>
            <th>Quantité</th>
            <th>Telephone</th>
            <th>Date Vente</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($vents as $vente)
            <tr>
                <td>{{$vente->id}}</td>
                <td>{{$vente->nom_client}}</td>
                <td>{{$vente->qte}}</td>
                <td>{{$vente->contact_client}}</td>
                
                <td>{{$vente->date_vente}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection