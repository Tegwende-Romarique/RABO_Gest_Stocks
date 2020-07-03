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
            <th>Libellé</th>
            <th>Categorie</th>
            <th>Prix Unitaire</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($produits as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->libelle}}</td>
                <td>{{$prod->categorie}}</td>
                <td>{{$prod->prix_unitaire}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection