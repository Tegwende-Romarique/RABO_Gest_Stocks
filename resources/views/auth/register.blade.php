@extends('layouts.app')

@extends('layouts/include')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-titre text-center card-header">Créer un Compte</div> 
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <!--<i class="fa fa-tasks"> <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label> -->

                            <div class="col-md-6">
                          
                                <input id="name" type="text" class="champ @error('name') is-invalid @enderror" placeholder="Nom" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label> -->

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="champ @error('prenom') is-invalid @enderror" placeholder="Prenom" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-md-6">
                                <input id="email" type="email" class="champ @error('email') is-invalid @enderror" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-md-6">
                                <input id="password" type="password" class="champ @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="champ" placeholder="Confirmer mot de passe" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->
                             <div class="col-md-6">
                                <select id="role" type="text" class="champ" name="role" required autocomplete="role">
                                <option>Role</option>  
                                <option value="admin">Admin</option>
                                    <option value="caissier">Caissière</option>
                                </select>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
