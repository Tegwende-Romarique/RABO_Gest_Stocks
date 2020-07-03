
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
     <h1 class="armelle"> ENREGISTREMENT D'UN PRODUIT</h1>
     <form action=" {{url('ajouter_produit')}}" method="post">
     @csrf
                    <div class="form-row">
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Nom</label>
                          <input type="text" name="nom" class="form-control" id="inputnom" required>
                        </div>
                        <div class="form-group col-md-11">
                          <label for="inputPassword4">Catégorie</label>
                          <select id="" name="categorie" class="form-control">
                          @foreach($lots as $lot)
                          <option value="{{$lot->id}}">{{$lot->libelle}}</option>
                          @endforeach
                          </select>
                         
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-11">
                          <label for="inputCity">Prix unitaire</label>
                          <input type="number" name="prix_unitaire" class="form-control" id="inputtext" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-11">
                          <input type="texte" name="qte" value="0" hidden class="form-control" id="inputtext">
                        </div>
                      </div>
                    <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                    <button class="btn btn-primary2" id="coleur" type="reset">Annuler</button>
                  </div>
                </form> 
              </div> <br> <br>
              
              </html>
              @endsection