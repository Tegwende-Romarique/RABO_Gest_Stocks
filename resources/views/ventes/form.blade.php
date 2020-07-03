@extends('home')
@extends('layouts/include')
@section('conten')
 <!DOCTYPE html>
 <html>
 <head>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Produit</title>
 
 </head>
               <div class="container">
           <div class="container" style="font-weight:800;">
      <h1 class="armelle"> VENTES </h1>
      <form action=" {{url('ajouter_vente')}}" method="post">
      @csrf
                       <div class="form-row">                        
                         <div class="form-group col-md-11">
                           <label for="inputPassword4">Produit</label>
                           <select id="" name="produit_id" class="form-control">
                           @foreach($produits as $prod)
                           <option value="{{$prod->id}}">{{$prod->nom}}</option>
                           @endforeach
                           </select>                         
                         </div>
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-11">
                           <label for="inputCity">Quantité</label>
                           <input type="number" name="qte" class="form-control" id="inputtext" required>
                         </div>
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-11">
                           <label for="inputCity">Nom client</label>
                           <input type="text" name="nom_client" class="form-control" id="inputtext" required>
                         </div>
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-11">
                           <label for="inputCity">Téléphone</label>
                           <input type="number" name="contact_client" class="form-control" id="inputtext" required>
                         </div>
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-11">
                           <label for="inputCity">Date vente</label>
                           <input type="date" name="date_vente" class="form-control" id="inputtext" required>
                         </div>
                       </div>
                       
                     <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                     <button class="btn btn-primary2" id="coleur" type="reset">Annuler</button>
                   </div>
                 </form> 
               </div> <br> <br>
               
               </html>
              @endsection