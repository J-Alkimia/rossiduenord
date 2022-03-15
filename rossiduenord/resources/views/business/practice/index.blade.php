@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')

    <div style="padding: 10px 165px 10px 30px; border-bottom: 2px solid #DBDCDB" class="d-flex align-items-center justify-content-between mb-2">
        <h2 class="light-grey">Pratiche</h2>
        <form class="position-relative" style="width: 600px" action="">
            <div>
                <input class="input_search" type="text" placeholder="Cerca">
                <img class="position-absolute" style="right: 25px; top: 15px;" src="{{ asset('/img/icon/ICONA-CERCA.svg') }}" alt="">
            </div>
        </form>
    </div>

    <div class="content-main" style="padding-top: 0px;">

        <div class="box px-20 pt-20" >
            <span style="margin-right: 20px" class="black text-md {{Route::currentRouteName() == 'business.practice.index' ? 'bold' : ''}}">
                Lista Pratiche
            </span>
            <span class="black text-md {{Route::currentRouteName() != 'business.practice.index' ? 'bold' : ''}}">
                Scheda pratica
            </span>
            <hr class="bg-black" style="margin-top: 5px;">
    
            <div>
                <form action="" method="POST">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <div style="width: 10%">
                            <span class="text-sm grey">Mese</span>
                            <select style="width: 70%"  name="" id="">
                                <option value="">Gennaio</option>
                                <option value="">Febbario</option>
                                <option value="">Marzo</option>
                                <option value="">Aprile</option>
                                <option value="">Maggio</option>
                                <option value="">Giugno</option>
                                <option value="">Luglio</option>
                                <option value="">Agosto</option>
                                <option value="">Settembre</option>
                                <option value="">Ottobre</option>
                                <option value="">Novembre</option>
                                <option value="">Dicembre</option>
                            </select>
                        </div>
                        <div style="width: 20%">
                            <span class="text-sm grey">Fase pratica</span>
                            <select style="width: 70%" name="" id="">
                                <option value="">Tutti</option>
                            </select>
                        </div>
                        <div style="width: 60%">
                            <span class="text-sm grey">Descrizione</span>
                            <input style="width: 90%" type="text">
                        </div>
                        <img class="icon-search" src="{{ asset('/img/icon/CERCA.svg') }}" alt="">
                    </div>
        
                    <div class="d-flex align-items-center mb-2">
                        <div style="width: 10%">
                            <span class="text-sm grey">N. Pratica</span>
                            <input style="width: 50%"type="number">
                        </div>
                
                        <div style="width: 15%; margin-left: 35px;">
                            <span class="text-sm grey">Ruolo</span>
                            <select style="width: 80%" name="" id="">
                                <option value="">Tutti</option>
                            </select>
                        </div>                        
                    </div>        
                </form>

                <div class="mt-4">
                    <div class="d-flex align-items-center" action="">
                        <a href="{{route('business.applicant.create') }}" class="d-flex flex-column align-items-center justify-content-center mr-3">
                            <img src="{{ asset('/img/icon/icona_nuovo.svg') }}" alt="">
                            <p style="color: #818387">Nuovo</p>
                        </a>
                        {{--href="{{route('business.practice.edit', $practice->id) }}"  --}}
                        <a class="d-flex flex-column align-items-center justify-content-center mr-3">
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
            </div>
        </div>

        <div class="box">
            <div class="table mt-2">
                <table style="width: 100%">
                    <thead>
                        <tr style="border-top: 1px solid #707070">
                            <th style="width: 10%">Piattaforma</th>
                            <th style="width: 10%">Pratica</th>
                            <th style="width: 10%">Data Pratica</th>
                            <th style="width: 10%">Descrizione</th>
                            <th style="width: 10%">Fase</th>
                            <th style="width: 10%">Mese lav.110%</th>
                            <th style="width: 10%">Lista incentivi</th>
                            <th style="width: 10%">Richiedente</th>
                            <th style="width: 10%">Proprietario</th>
                            <th style="width: 10%">Notifiche</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($practices as $practice)
                            <tr>
                                <td style="border-left: 1px solid #707070">
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

