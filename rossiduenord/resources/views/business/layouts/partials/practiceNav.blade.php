
<div style="padding: 10px 165px 10px 30px; border-bottom: 2px solid #DBDCDB" class="d-flex align-items-center justify-content-between mb-2">
    <h2 class="light-grey">Pratiche</h2>
    <form class="position-relative" style="width: 600px" action="">
        <div>
            <input class="input_search" type="text">
            <img class="position-absolute" style="right: 25px; top: 15px;" src="{{ asset('/img/icon/ICONA-CERCA.svg') }}" alt="">
        </div>
    </form>
</div>

<div class="content-main" style="padding-top: 0px;">
    <div class="box">
        <span style="margin-right: 20px" class="black text-md {{Route::currentRouteName() == 'business.practice.index' ? 'bold' : ''}}">
            Lista Pratiche
        </span>
        <span class="black text-md {{Route::currentRouteName() != 'business.practice.index' ? 'bold' : ''}}">
            Scheda pratica
        </span>
        <hr class="bg-black" style="margin-top: 5px;">

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

        <div class="d-flex justify-content-between menu mb-4">
            <a href="{{route('business.applicant.create') }}" class="{{Route::currentRouteName() == 'business.applicant.create' ? 'visited' : ''}}">
                RICHIEDENTE
            </a>
            <a href="{{route('business.practice.create') }}" class="{{Route::currentRouteName() == 'business.practice.create' ? 'visited' : ''}}">
                PRATICA
            </a>
            <a href="">SOGGETTI E IMPORTI</a>
            <a href="{{route('business.test2') }}" >IMMOBILE</a>
            <a href="">FOTO DA APP</a>
            <a href="">DOCUMENTI RICHIEST</a>
            <a href="{{route('business.superbonus.index') }}" class="{{Route::currentRouteName() == 'business.superbonus.index' ? 'visited' : ''}}">
                SUPERBONUS 110%
            </a>
            <a href="">CONTRATTI</a>
            <a href="">POLIZZE ASSICURATIVE</a>
            <a href="">BONUS CASA 50%</a>
            <a href="">AUDITOR</a>
        </div>

        @if (Route::currentRouteName() == 'business.applicant.create')
        <div class="submenu">
            <h6>Dati richiedente</h6>
        </div>    
        @endif
        @if (Route::currentRouteName() == 'business.practice.create')
        <div class="submenu">
            <h6>Dati pratica</h6>
        </div>   
        @endif
        @if (Route::currentRouteName() == 'business.superbonus.index')
        <div class="submenu">
            <h6>Lista dati progetto</h6>
        </div>    
        @endif
