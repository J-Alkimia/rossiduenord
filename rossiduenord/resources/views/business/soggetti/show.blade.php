@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')


     <ul class="nav nav-tabs" id="sectionSoggetti_pratiche" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="soggetti-tab" data-toggle="tab" href="#soggetti" role="tab" aria-controls="soggetti" aria-selected="true">Soggetti</a></li>
            <li class="nav-item"><a class="nav-link" id="responsabili-tab" data-toggle="tab" href="#responsabili" role="tab" aria-controls="responsabili" aria-selected="false">Responsabili</a></li>
        </ul>
        <div class="tab-content" id="content_sectionSoggetti_pratiche">
            <!-- TAB SOGGETTI -->
            <div class="tab-pane p-4 fade show active" id="soggetti" role="tabpanel" aria-labelledby="soggetti-tab">
                <!-- Pagina SOGGETTI  PRATICHE -->
            <div class="">
                <h6>Attori/Soggetti</h6>
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

                <div class="mt-5"> <!-- Contatti dei responsabili -->
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

                <div class="mt-5"> <!-- Dettaglio importi -->
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <input type="button" class="col-md-2 mb-3" value="Dettaglio importi" style="height:40px; border-radius:2px; box-shadow:0px 0px 10px 2px #DCDCDC; border:none; display:inline-block; background-color: white; color: gray; font-weight:bold; " /><br/>
                                <input type="checkbox" class="mr-1" /><label >Importi bloccati</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <!-- FINE Pagina SOGGETTI  PRATICHE -->

            </div>
            <!-- END TAB SOGGETTI -->

            <!-- TAB RESPONSABILI -->
            <div class="tab-pane p-4 fade" id="responsabili" role="tabpanel" aria-labelledby="responsabili-tab">
        
        <!-- Pagina RESPONSABILI   PRATICHE -->
        <div class="mt-5" >
            <h6 class="mb-3">Lista responsabili</h6>
            <div class="row">
            <div class="col-md"> <!-- Data table content -->
                    <table class="table_bonus" style="width: 100%">
            <thead>
                <tr>
                    <td class="text-center" style="width:5%;"><b>Utente</b></td>
                    <td style="width:20%;"><b>Ruolo</b></td>
                    <td style="width:13%;"><b>Email</b></td>
                    <td style="width:10%;"><b>Telefono </b></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left pl-3">A. Filippi</td>
                    <td class="text-left pl-3">Project Manager</td>
                    <td class="text-left pl-3">afilippi@italsoftspa.it</td>
                    <td class="text-left pl-3">3281000000</td>
                </tr>

                <tr>
                    <td class="text-left pl-3">L. Uccia</td>
                    <td class="text-left pl-3">Responsabile SAL 1 Bonus Facciate 90%</td>
                    <td class="text-left pl-3">luccia@italsoftspa.it</td>
                    <td class="text-left pl-3">3481800000</td>
                </tr>
                <tr>
                    <td class="text-left pl-3">L. Uccia</td>
                    <td class="text-left pl-3">Responsabile verifica conformità urbanistica</td>
                    <td class="text-left pl-3">luccia@italsoftspa.it</td>
                    <td class="text-left pl-3">3481800000</td>
                </tr>
            </tbody>
        </table>
            </div>
         </div>

         <div class="mt-5"> <!-- Contatti dei responsabili -->
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

         <div class="mt-5"> <!-- Dettaglio importi -->
             <div class="row">
                 <div class="col-md">
                     <div class="form-group">
                         <input type="button" class="col-md-2 mb-3" value="Dettaglio importi" style="height:40px; border-radius:2px; box-shadow:0px 0px 10px 2px #DCDCDC; border:none; display:inline-block; background-color: white; color: gray; font-weight:bold; " /><br/>
                         <input type="checkbox" class="mr-1" /><label >Importi bloccati</label>
                     </div>
                 </div>
             </div>
         </div>

        </div> <!-- FINE Pagina RESPONSABILI  PRATICHE -->

            </div>
    </div>

@endsection