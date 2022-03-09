@extends('business.layouts.business')

@section('content')
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('message')}}</strong>
        </div>
    @endif


    <div style="padding: 30px 165px 10px 50px; border-bottom: 2px solid #DBDCDB" class="d-flex align-items-center justify-content-between mb-2">
        <h2 class="light-grey">Pratiche</h2>
        <form class="position-relative" style="width: 600px" action="">
            <div>
                <input class="input_search" type="text" placeholder="Cerca">
                <img class="position-absolute" style="right: 25px; top: 15px;" src="{{ asset('/img/icon/ICONA-CERCA.svg') }}" alt="">
            </div>
        </form>
    </div>

    <div class="content-main" style="padding-top: 0px;">

        <div class="box">
            <span style="margin-right: 20px" class="black text-md"><b>Lista Pratiche</b></span>
            <span class="black text-md"><b>Scheda Pratica</b></span>
            <hr class="bg-black">

            <div>
                <div class="d-flex align-items-center" action="">
                    <a href="{{route('business.practice.create') }}" class="d-flex flex-column align-items-center justify-content-center mr-3">
                        <img src="{{ asset('/img/icon/icona_nuovo.svg') }}" alt="">
                        <p style="color: #818387">Nuovo</p>
                    </a>
                    {{--href="{{route('business.practice.edit', $practice->id) }}"  --}}
                    <a  class="d-flex flex-column align-items-center justify-content-center mr-3">
                        <img src="{{ asset('/img/icon/icona_modifica.svg') }}" alt="">
                        <p style="color: #818387">Modifica</p>
                    </a>
                    {{-- del{{$practice->id}} #del{{$practice->id}}   --}}
                    <button type="button" data-toggle="modal" data-target="" style="border: none; background-color: transparent;" class="d-flex flex-column align-items-center justify-content-center mr-3">
                        <img src="{{ asset('/img/icon/icona_cancella.svg') }}" alt="">
                        <p style="color: #818387">Cancella</p>
                    </button>

                    <div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Conferma elimina cartella</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro di volere eliminare e tutto il suo contenuto!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">indietro</button>
                                    {{-- {{ Route('business.practice.destroy', $practice->id) }} --}}
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-custom white bg-red mr-0">
                                            Conferma
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between menu">
                <a href="{{route('business.applicant.create') }}" class="{{Route::currentRouteName() == 'business.applicant.create' ? 'visited' : ''}}">
                    RICHIEDENTE
                </a>
                <a href="{{route('business.practice.create') }}" class="{{Route::currentRouteName() == 'business.practice.create' ? 'visited' : ''}}">
                    PRATICA
                </a>
                <a href="">SOGGETTI E IMPORTI</a>
                <a href="">IMMOBILE</a>
                <a href="">FOTO DA APP</a>
                <a href="">DOCUMENTI RICHIEST</a>
                <a href="">SUPERBONUS 110%</a>
                <a href="">CONTRATTI</a>
                <a href="">POLIZZE ASSICURATIVE</a>
                <a href="">BONUS CASA 50%</a>
                <a href="">AUDITOR</a>
            </div>

            <div class="submenu">
                <h6>Dati richiedente</h6>
            </div>

            <form action="{{ route('business.applicant.store') }}" method="POST">
                @csrf

                <div class="d-flex align-items-center">
                    <h6>Richiedente</h6>
                    <div style="margin-left: 30px">
                        <input type="radio" name="applicant" id="applicant" value="privato">
                        <label for="applicant">Privato/Proprietario</label>
                    </div>
                    <div style="margin-left: 50px">
                        <input type="radio" name="applicant" id="applicant" value="impresa">
                        <label for="applicant">Impresa/General Contractor</label>
                    </div>

                    @error('applicant')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <div style="width: 48%;" class="form-group">
                        <label for="name" class="text">{{ __('Nome') }}</label>
                        <div>
                            <input id="name" type="text" style="height: 47px!important" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div style="width: 50%;" class="form-group">
                        <label for="lastName" class="text">{{ __('Cognome') }}</label>
                        <div>
                            <input id="lastName" type="text" style="height: 47px!important" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                            
                            @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="c_f" class="text">{{ __('Codice Fiscale') }}</label>
                    <div>
                        <input id="c_f" type="text" style="height: 47px!important" class="form-control @error('c_f') is-invalid @enderror" name="c_f" value="{{ old('c_f') }}" required autocomplete="c_f" autofocus>

                        @error('c_f')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group" style="width: 48%;">
                        <label for="phone" class="text">{{ __('Telefono') }}</label>
                        <div>
                            <input id="phone" type="text" style="height: 47px!important" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 50%;">
                        <label for="mobile_phone" class="text">{{ __('Cellulare') }}</label>
                        <div>
                            <input id="mobile_phone" type="text" style="height: 47px!important" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone" value="{{ old('mobile_phone') }}" required autocomplete="mobile_phone" autofocus>
                            
                            @error('mobile_phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="text">{{ __('Email') }}</label>
                    <div>
                        <input id="email" type="text" style="height: 47px!important;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div style="width: 65%" class="d-flex align-items-center justify-content-between">
                    <h6>Ruolo nella pratica</h6>
                    <label class="checkbox-wrapper d-flex">
                        <span>Persona fisica</span>
                        <input type="radio" name="role" value="persona fisica">     
                        <span class="checkmark"></span> 
                    </label>
                    <label class="checkbox-wrapper d-flex">
                        <span>Amministratore di condominio</span>
                        <input type="radio" name="role" value="amministratore di condominio">     
                        <span class="checkmark"></span> 
                    </label>
                    <label class="checkbox-wrapper d-flex">
                        <span>Condominio incaricato</span>
                        <input type="radio" name="role" value="condominio incaricato">     
                        <span class="checkmark"></span> 
                    </label>
                    <label class="checkbox-wrapper d-flex">
                        <span>Unico proprietario di condominio</span>
                        <input type="radio" name="role" value="unico proprietario di condominio">     
                        <span class="checkmark"></span> 
                    </label>

                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex align-content-center justify-content-end">
                    <a href="{{ route('business.practice.index') }}" class="add-button" style="background-color: #818387" >
                        {{ __('Annulla')}}
                    </a>
                    <button type="submit" class="add-button position-relative ml-2">
                        {{ __('Conferma') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection