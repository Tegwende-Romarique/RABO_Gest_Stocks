@extends('home')
 @extends('layouts/include')
 @section('conten')
 <div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produit</th>
            <th>Quantité</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($stocks as $stock)
            <tr>
                <td>{{$stock->id}}</td>
                <td>{{$stock->Produit_id}}</td>
                <td>{{$stock->qte}}</td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>
 @endsection