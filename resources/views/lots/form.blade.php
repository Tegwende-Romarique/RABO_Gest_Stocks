@extends('home')
 @extends('layouts/include')
 @section('conten')
       <div class="container">
          <div class="container" style="font-weight:800;">
     <h1 class="armelle"> ENREGISTREMENT D'UNE CATEGORIE</h1>
     <form action=" {{url('ajouter_lot')}}" method="post">
     @csrf
                    <div class="form-row">
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Libellé</label>
                          <input type="text"name="libelle" class="form-control" required>
                        </div>
                <div>
                    <button class="btn btn-primary1" id="coleur" type="submit">Valider</button>
                    <button class="btn btn-primary2" id="coleur" type="submit">Annuler</button>
                  </div>
                </form> 
              </div> <br> <br>
              
              </html>
              @endsection