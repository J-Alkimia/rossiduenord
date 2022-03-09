@extends('business.layouts.business')

@section('content')
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{session('message')}}</strong>
        </div>
    @endif


    <div style="padding: 30px 165px 10px 50px; border-bottom: 2px solid #DBDCDB" class="d-flex align-items-center justify-content-between mb-2">
        <h2 class="light-grey">pratiche</h2>
        <form class="position-relative" style="width: 600px" action="">
            <div>
                <input class="input_search" type="text">
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
                    <a href="" class="d-flex flex-column align-items-center justify-content-center mr-3">
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
                                    Sei sicuro di volere eliminare tutto il suo contenuto!
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

            <form action="{{ route('business.practice.store') }}" method="POST">
                @csrf
                
{{--                  <div class="d-flex">
                    <div style="width: 10%; margin-right: 20px;" class="form-group ">
                        <label for="id" class="text">{{ __('Numero pratica') }}</label>
                        <div>
                            <input id="id" type="text" style="height: 47px!important" class="form-control bg-body @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
                            
                            @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div style="width: 15%;" class="form-group">
                        <label for="created_at" class="text">{{ __('Data pratica') }}</label>
                        <div>
                            <input id="created_at" type="text" style="height: 47px!important" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ old('created_at') }}" required autocomplete="created_at" autofocus>
                            
                            @error('created_at')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
 --}}
                <div class="d-flex justify-content-between">
                    <h6>Richiesta polizza:</h6>

                    <div class="form-group" style="width: 15%;">
                        <label for="role" class="text">Mese</label>
                        <select style="height: 47px!important" class="form-control bg-body" name="role" id="role">
                            <optgroup label="seleziona mese">
                                <option value="gennaio">gennaio</option>
                                <option value="febbraio">febbraio</option>
                                <option value="marzo">marzo</option>
                                <option value="aprile">aprile</option>
                                <option value="maggio">maggio</option>
                                <option value="giugno">giugno</option>
                                <option value="luglio">luglio</option>
                                <option value="agosto">agosto</option>
                                <option value="settembre">settembre</option>
                                <option value="ottobre">ottobre</option>
                                <option value="novembre">novembre</option>
                                <option value="dicembre">dicembre</option>
                            </optgroup>
                        </select>
                    </div>
            
                    <div class="form-group" style="width: 10%;">
                        <label for="year" class="text">{{ __('Anno') }}</label>
                        <div>
                            <input id="year" type="text" style="height: 47px!important" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                            
                            @error('year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                                        
                    <div class="form-group" style="width: 65%;">
                        <label for="policy_name" class="text">{{ __('Denominazione') }}</label>
                        <div>
                            <input id="policy_name" type="text" style="height: 47px!important" class="form-control @error('policy_name') is-invalid @enderror" name="policy_name" value="{{ old('policy_name') }}" required autocomplete="policy_name" autofocus>
                            
                            @error('policy_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group" style="width: 45%;">
                        <label for="address" class="text">{{ __('Indirizzo') }}</label>
                        <div>
                            <input id="address" type="text" style="height: 47px!important" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 5%;">
                        <label for="civic" class="text">{{ __('N.') }}</label>
                        <div>
                            <input id="civic" type="text" style="height: 47px!important" class="form-control @error('civic') is-invalid @enderror" name="civic" value="{{ old('civic') }}" required autocomplete="civic" autofocus>

                            @error('civic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 15%;">
                        <label for="common" class="text">{{ __('Comune') }}</label>
                        <div>
                            <input id="common" type="text" style="height: 47px!important" class="form-control @error('common') is-invalid @enderror" name="common" value="{{ old('common') }}" required autocomplete="common" autofocus>

                            @error('common')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 5%;">
                        <label for="province" class="text">{{ __('Provincia') }}</label>
                        <div>
                            <input id="province" type="text" style="height: 47px!important" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>

                            @error('province')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 15%;">
                        <label for="region" class="text">Regione</label>
                        <select style="height: 47px!important" class="form-control bg-body" name="region" id="region">
                        <optgroup label="seleziona SAL">
                            <option value="sicilia">Sicilia</option>
                        </optgroup>
                        </select>
                    </div>

                    <div class="form-group" style="width: 10%;">
                        <label for="cap" class="text">{{ __('CAP') }}</label>
                        <div>
                            <input id="cap" type="text" style="height: 47px!important" class="form-control @error('cap') is-invalid @enderror" name="cap" value="{{ old('cap') }}" required autocomplete="cap" autofocus>

                            @error('cap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="form-group" style="width: 10%; margin-right: 20px;">
                        <label for="work_start" class="text">{{ __('Inizio lavori') }}</label>
                        <div>
                            <input id="work_start" type="text" style="height: 47px!important" class="form-control @error('work_start') is-invalid @enderror" name="work_start" value="{{ old('work_start') }}" required autocomplete="work_start" autofocus>

                            @error('work_start')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 20%; margin-right: 20px;">
                        <label for="c_m" class="text">{{ __('Importo C.M') }}</label>
                        <div>
                            <input id="c_m" type="text" style="height: 47px!important" class="form-control @error('c_m') is-invalid @enderror" name="c_m" value="{{ old('c_m') }}" required autocomplete="c_m" autofocus>

                            @error('c_m')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 20%;">
                        <label for="assev_tecnica" class="text">{{ __('Assev. Tecnica(no IVA)') }}</label>
                        <div>
                            <input id="assev_tecnica" type="text" style="height: 47px!important" class="form-control @error('assev_tecnica') is-invalid @enderror" name="assev_tecnica" value="{{ old('assev_tecnica') }}" required autocomplete="assev_tecnica" autofocus>

                            @error('assev_tecnica')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="form-group" style="width: 45%;">
                        <label for="nominative" class="text">{{ __('Nominativo') }}</label>
                        <div>
                            <input id="nominative" type="text" style="height: 47px!important" class="form-control bg-body @error('nominative') is-invalid @enderror" name="nominative" value="{{ old('nominative') }}" required autocomplete="nominative" autofocus>

                            @error('nominative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 26%;">
                        <label for="lastName" class="text">{{ __('Cognome') }}</label>
                        <div>
                            <input id="lastName" type="text" style="height: 47px!important" class="form-control bg-body @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                            @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group" style="width: 26%;">
                        <label for="name" class="text">{{ __('Nome') }}</label>
                        <div>
                            <input id="name" type="text" style="height: 47px!important" class="form-control bg-body @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="d-flex align-items-center" style="margin-right: 20px;">
                        <div>
                            <input type="checkbox" name="policy" id="policy" value="privato">
                            <label for="policy">Richiedi polizza</label>
                        </div>
                    </div>

                    <div class="form-group" style="width: 30%; margin-right: 20px;">
                        <label for="request_policy" class="text">{{ __('Richiesta da') }}</label>
                        <div>
                            <input id="request_policy" type="text" style="height: 47px!important" class="form-control bg-body @error('request_policy') is-invalid @enderror" name="request_policy" value="{{ old('request_policy') }}" required autocomplete="request_policy" autofocus>

                            @error('request_policy')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="text">{{ __('Descrizione') }}</label>
                    <div>
                        <input id="description" type="text" style="height: 47px!important" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex">
                    <h6 style="margin-right: 20px;">Tipo di operazione:</h6>
                    <label class="checkbox-wrapper d-flex">
                        <input type="checkbox" name="bounus" value="110%">     
                        <span class="checkmark"></span> 
                        <span>Super Bonus 110%</span>
                    </label>
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