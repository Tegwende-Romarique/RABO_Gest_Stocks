@extends('layouts.app') 
@extends('layouts/include') 

@section('content')

<div class="div1" >
  <div class="div2">
      </header>
      <div class="main">
        <aside>
          <div class="sidebar left le-dashboard-de-l-admin">
            <!-- <div class="user-panel">
              <div class="pull-left image">
                <img src="{{asset('pictures/ID.jpg')}}" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Zagre Romarique</p>
                <p>Admin</p>
              </div>
            </div> -->
            <ul class="list-sidebar bg-defoult">
            <li> <a href="{{ url('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Accueil</span></a> </li>
            </ul>
          </li> 
            <li> <a href="" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li><a href="{{ url('login') }}">Liste des admin</a></li>
                <li><a href="{{ url('login') }}">Ajouter un admin</a></li>
                <li><a href="{{ url('login') }}">Caissier</a></li>
              </ul>
            </li>
            <li> <a href="" data-toggle="collapse" data-target="#produit" class="collapsed active" ><i class="fa fa-product-hunt"></i><span class="nav-label">Produits</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="produit" >
          <li><a href="{{ url('produit_list') }}"> Liste des produits</a></li>
          <li><a href="{{ url('creer_produit') }}">Enregistrer un produit</a></li>
        </ul>
      </li>
      <li> <a href="" data-toggle="collapse" data-target="#categories" class="collapsed active" ><i class="fa fa-th-large"></i> <span class="nav-label">Catégories</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="categories" >
          <li><a href="{{ url('lot_list') }}"> Liste des catégories</a></li>
          <li><a href="{{ url('lot_form') }}">Enregistrer une catégorie</a></li>
        </ul>
      </li>
        <li> <a href="" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">Vente</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
        <li><a href="{{ url('list_vente') }}">Liste des ventes</a></li>
        <li><a href="{{ url('form_vente') }}">Effectuer une vente</a></li>
        </ul>
      </li>

      <li> <a href="" data-toggle="collapse" data-target="#user" class="collapsed active" ><i class="fa fa-user"></i> <span class="nav-label">Utilisateurs</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="user" >
          <li><a href="{{ url('login') }}">Liste des Utilisateurs</a></li>
          <li><a href="{{ url('register') }}">Enregistrer un Utilisateurs</a></li>
        </ul>
      </li>


      <li> <a href="" data-toggle="collapse" data-target="#stock" class="collapsed active" ><i class="fa fa-user"></i> <span class="nav-label">Stock</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="stock" >
          <li><a href="{{ url('list_stock') }}">Liste des stocks</a></li>
          <li><a href="{{ url('form_stock') }}">Ajouter Stock</a></li>
        </ul>
      </li>

    </ul>
    </div>
    </aside>
    <div class="sidebar-content">
    </div>
    </div>
    </div>
    <div class="div3">
      @yield('conten')
 </div>
@endsection
