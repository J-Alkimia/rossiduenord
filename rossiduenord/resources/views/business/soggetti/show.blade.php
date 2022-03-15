@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')

            <div class="px-20">
                <ul class="nav nav-tabs pl-4" id="sectionSoggetti_pratiche" role="tablist">
                    <li class="nav-item">
                        <span class="nav-link active" id="soggetti-tab" data-toggle="tab" href="#soggetti" role="tab" aria-controls="soggetti" aria-selected="true" style="color: #BBBCBC; font-weight:500; cursor: pointer;">
                            Soggetti
                        </span>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" id="responsabili-tab" data-toggle="tab" href="#responsabili" role="tab" aria-controls="responsabili" aria-selected="false" style="color: #BBBCBC; font-weight:500; cursor: pointer;">
                            Responsabili
                        </span>
                    </li>
                </ul>
            </div>

            <div class="scroll">
                <div class="tab-content px-20" id="content_sectionSoggetti_pratiche">
                    <!-- TAB SOGGETTI -->
                    <div class="tab-pane fade show active" id="soggetti" role="tabpanel" aria-labelledby="soggetti-tab">
                        <h6 class="mb-3 mt-3">Attori/Soggetti</h6>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label style="display:inline-block;" >General Contractor</label><br/>
                                    <input type="text" class="col-md-12" value="Rossidue Nord Rossidue Nord" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="" >Azienda edile</label>
                                    <span class="ml-2">
                                        <input type="checkbox" class="mr-1" checked /><label >Pratica in regola</label>
                                    </span><br/>
                                    <input type="text" class="col-md-12" value="Rossidue Nord" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Azienda imp. idrotermosanitari</label><br/>
                                    <input type="text" class="col-md-12" value="Campesan F.lli snc di Campesan Davide & Luca" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Azienda imp. elettrici/fotovoltaici</label><br/>
                                    <input type="text" class="col-md-12" value="Lunardon Impianti di Fabio Lunardon" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Termotecnico APE Ante</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Termotecnico efficient. energetico</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Termotecnico APE Post</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >strutturista</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Tecnico Computo Metrico</label><br/>
                                    <input type="text" class="col-md-12" value="Campesan F.lli snc di Campesan Davide & Luca" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Direttore lavori</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Asseveratore tecnico</label><br/>
                                    <input type="text" class="col-md-12" value="Italsoft Group SRL" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Asseveratore fiscale</label><br/>
                                    <input type="text" class="col-md-12" value="Studio Salvini - Aglaia" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Cessionario credito fiscale</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Banca finaziatrice</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="form-group">
                                    <label style="display:inline-block;" >Assicuratore</label><br/>
                                    <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
    
                                <div class="form group">
                                <label style="display:inline-block;" >Consulente</label><br/>
                                <div class="row">
                                <div class="col-md form-group">
                                    <input type="text" class="col-md-12" value="Ferrazzi Igor" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                <div class="col-md form-group">
                                    <input type="text" class="col-md-12" value="Segnalatore" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
                                </div>
                                </div>
    
                                <div class="form-group">
                                    <label style="display:inline-block;" >Area Manager</label><br/>
                                    <input type="text" class="col-md-6" value="Framyx" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                                </div>
    
                            </div>
                        </div>
                    </div>
    
                    <!-- TAB RESPONSABILI -->
                    <div class="tab-pane fade" id="responsabili" role="tabpanel" aria-labelledby="responsabili-tab">
                        <h6 class="mb-3 mt-3">Lista responsabili</h6>
                        <div class="row">
                            <div class="col-md"> <!-- Data table content -->
                                <table class="table_bonus" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <td class="pl-3" style="width:10%;"><b>Utente</b></td>
                                            <td class="pl-3" style="width:40%;"><b>Ruolo</b></td>
                                            <td class="pl-3" style="width:25%;"><b>Email</b></td>
                                            <td class="pl-3" style="width:25%;"><b>Telefono </b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in 4" :key="item">
                                            <td class="text-left pl-3">A. Filippi</td>
                                            <td class="text-left px-3">
                                                <div class="d-flex justify-content-between position-relative">
                                                    <span class="mt-2">Project Manager</span>
                                                    <div class="select" style="background-color: transparent"/>
                                                </div>
                                            </td>
                                            <td class="text-left pl-3">afilippi@italsoftspa.it</td>
                                            <td class="text-left pl-3">3281000000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div> 
                
                <hr style="background-color: #f2f2f2; height:20px; border:none;">
    
                <div class="px-20"> <!-- Contatti dei responsabili -->
                    <h6>Contatti dei responsabili</h6>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label style="display:inline-block;" >Project Manager</label><br/>
                                <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                            </div>
                            <div class="form-group">
                                <label style="display:inline-block;" >Tecnico responsabile</label><br/>
                                <input type="text" class="col-md-12" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                            </div>
                        </div>
                    </div>
                </div>
    
                <hr style="background-color: #f2f2f2; height:20px; border:none;">
    
                <div class="px-20"> <!-- Dettaglio importi -->
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <input type="button" class="col-md-2 mb-3" value="Dettaglio importi" style="height:40px; width: 150px; border-radius:2px; box-shadow:0px 0px 10px 2px #DCDCDC; border:none; display:inline-block; background-color: white; color: gray; font-weight:bold; " /><br/>
                                <input type="checkbox" class="mr-1" /><label >Importi bloccati</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>{{-- chiusura div box praticeNav --}}

    </div>{{-- chiusura div content-main praticeNav --}}

    <div class="box-fixed">
        <button class="back-button mr-2">Annulla</button>
        <button class="add-button">Conferma</button>
    </div>

@endsection