@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')

            <div class="scroll">
                <div class="px-20">
                    <h6><b>Dati Immobile</b></h6>
                    <hr style="margin-top: 5px; background-color: #211e16;">
                </div>
                
                <div class="px-20 pb-20">{{-- form di compilazione --}}
                    <div style="margin-bottom:20px;" >
                        <div class="form-group">
                        <label style="display:inline-block;" >Nome intervento</label>
                        <input type="text" class="col-md" value="Condominio Camedia" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>

                        <div class="form-group">
                            <label style="display:inline-block;" >Ruolo dell'impresa</label>
                            <div class="position-relative">
                                <div class="select"></div>
                                <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;">
                                    <option value="">Ruolo corrente</option>
                                    <option value="">Altro ruolo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-bottom:25px;" >{{-- Tipologia Intervento: --}}
                        <div class="col-md-2" style="text-align:left;">
                            <p>Tipologia Intervento:</p>
                        </div>
                        <div class="col-md-10">
                            <div class="row sec2checkbelements">
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Ecobonus 50%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Bonus Ristrutturazione edilizia 50%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Ecobonus 65%</span>
                                    </label>
                                </div>
                            </div> 

                            <div class="row sec2checkbelements">
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">70% Sismabonus (Miglioramento 1 classe sismica)</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">75% Sismabonus (Miglioramento 1 classe sismica per Condominio)</span>
                                    </label>
                                </div>
                            </div> 

                            <div class="row sec2checkbelements">
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">80% Sismabonus (Miglioramento 2 classi sismiche)</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey"> 85% Sismabonus (Miglioramento 2 classi sismiche per Condominio)</span>
                                    </label>
                                </div>                    
                            </div> 

                            <div class="row sec2checkbelements">
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Bonus facciate 90%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Cappotto 90%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Super SismaBonus 110%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Super Ecobonus 110%</span>
                                    </label>
                                </div>
                                <div class="form-group m-0" style="display:inline-block;" >
                                    <label class="checkbox-wrapper d-flex mr-3">
                                        <input type="checkbox" name="" value="">     
                                        <span class="checkmark"></span> 
                                        <span class="grey">Acquisto di case antisismiche 110%</span>
                                    </label>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="row" style="margin-top:30px;">{{-- section form description 1 --}}
                        
                        <div class="col-md">
                            <div class="form-group"> 
                                <label>Indirizzo</label><br/>
                                <input class="col-md" type="text" value="Via Piave" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="form-group"> 
                                <label>Codice fiscale</label><br/>
                                <input class="col-md" type="text" value="91012380241" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="form-group"> 
                                <label style="display:inline-block;" >Tipo condominio</label>
                                <div class="position-relative">
                                    <div class="select"></div>
                                    <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                                        <option value=""> </option>
                                        <option value="">Altro ruolo</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-md">
                            <div class="form-group"> 
                                <div class="d-flex justify-content-between" style="column-gap: 10px;"> 
                                    <div style="width: 50px"> 
                                        <label >N.</label><br/>
                                        <input class="col-md" value="15" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                    <div style="width: 200px">
                                        <label>Comune</label><br/>
                                        <input class="col-md" value="Romano D’ Ezzelino" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                    <div style="width: 50px">
                                        <label>Provincia</label><br/>
                                        <input class="col-md" value="VI" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                    <div style="width: 200px">
                                        <label>Regione</label>
                                        <div class="position-relative">
                                            <div class="select"></div>
                                            <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                                                <option value=""> </option>
                                                <option value="">Altro ruolo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="width: 150px"> 
                                        <label>CAP</label>
                                        <input class="col-md" value="36060" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label>IBAN</label><br/>
                                <input class="col-md" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="form-group"> 
                                <label style="display:inline-block;" >Zona</label>
                                <div class="position-relative">
                                    <div class="select"></div>
                                        <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                                        <option value=""> </option>
                                        <option value="">Altro ruolo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">{{-- section form description 2 --}} 
                        <div class="col-md" >
                            <div class="row" > 
                                <div class="col-md"> 
                                    <label>Sezione</label><br/>
                                    <input class="col-md" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>Foglio</label><br/>
                                    <input class="col-md" value="18" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>Particella</label><br/>
                                    <input class="col-md" value="1217" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>Subalterno</label><br/>
                                    <input class="col-md" value="Da 25" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>N. unità immobiliari</label><br/>
                                    <input class="col-md" value="12" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>N. pertinenze</label><br/>
                                    <input class="col-md" value="14" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md"> 
                                    <label>Scale per delibere..</label><br/>
                                    <input class="col-md" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                
                            </div>   
                        </div>
                    </div>

                    <div class="row">{{-- note --}} 
                        <div class="col-md" > 
                            <label>Note</label>
                            <input class="col-md" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                    </div>

                    <div>{{-- section input radio --}}
                        <div class="row" style="margin-top:5%;">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L'edificio è sottoposto a vincoli previsti dal codice dei beni culturali e del paesaggio</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">Interventi trainanti al 110% sono vietati dai regolamenti edilizi, urbanistici e ambientali</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L’edificio è situato in un comune montano</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L’edificio è situato in un comune interessato da procedura di infrazione comunitaria</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L’edificio è in una zona colpita da eventi sismici</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L’edificio è in fase di ristrutturazione Art. 3, Com. 1, lettere d), e), f), del D.P.R. 380/2001</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-7">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">L’edificio è in un’area non metanizzata</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">No</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Sì</label>
                                </form>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-3">
                            <p style="display:inline-block; margin-right:25px; font-weight:500;">Autorizzazione edilizia</p> 
                            </div>
                            <div class="col-md">
                                <form style="display:inline-block; ">
                                    <input type="radio" id="html" name="action" value="notDefine">
                                    <label style="margin-right:15px;" for="">N.D.</label>
                                    <input type="radio" id="css" name="action" value="no">
                                    <label style="margin-right:15px;" for="">Licenza/Titolo edilizio</label>
                                    <input type="radio" id="javascript" name="action" value="yes">
                                    <label style="margin-right:15px;" for="">Concessione in sanatoria</label>
                                    <input type="radio" id="javascript" name="action" value="edificio">
                                    <label style="margin-right:15px;" for="">Edificio storico senza tit. edilizio</label>
                                </form>
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-md">
                                <div class="row"> 
                                    <div class="col-md">
                                        <label>Num. licenza/titolo</label><br/>
                                        <input class="col-md" value="16061/7372" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                    <div class="col-md">
                                        <label>Data licenza/titolo</label><br/>
                                        <input class="col-md" value="19/12/1994" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                    <div class="col-md">
                                        <label>Anno costruzione</label><br/>
                                        <input class="col-md" value="1995" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md"></div>
                        </div>
                    </div> 

                    <div class="mt-5">{{-- table list condomini --}} 
                        <h6>Lista condomini</h6>
                        <div class="row">
                            <div class="col-md"> <!-- Data table content -->
                                <table class="table_bonus" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <td class="text-center" style="width:5%;"><b>N.</b></td>
                                            <td style="width:20%;"><b>Nome/Ragione soc…</b></td>
                                            <td style="width:13%;"><b>Cognome</b></td>
                                            <td style="width:10%;"><b>Telefono </b></td>
                                            <td style="width:10%;"><b>Email</b></td>
                                            <td style="width:15%;"><b>Codice fiscale/Pa…</b></td>
                                            <td style="width:15%;"><b>Mille…</b></td>
                                            <td style="width:15%;"><b>Foglio</b></td>
                                            <td style="width:10%;"><b>Part.</b></td>
                                            <td style="width:15%;"><b>sub</b></td>
                                            <td style="width:15%;"><b>Cate…</b></td>
                                            <td style="width:15%;"><b>sub…</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Company test</td>
                                            <td class="text-right">Mario</td>
                                            <td class="text-right">3281000000</td>
                                            <td class="text-right">mario.rossi@gmail.com</td>
                                            <td class="text-right">HHTOKD9836UEHEOKS</td>
                                            <td class="text-center">60,240</td>
                                            <td class="text-center">18</td>
                                            <td class="text-right">1212</td>
                                            <td class="text-right">28</td>
                                            <td class="text-center">A/3</td>
                                            <td class="text-center">0,00</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center">Company test2</td>
                                            <td class="text-right">Mario</td>
                                            <td class="text-right">3281000000</td>
                                            <td class="text-right">mario.rossi@gmail.com</td>
                                            <td class="text-right">HHTOKD9836UEHEOKS</td>
                                            <td class="text-center">60,240</td>
                                            <td class="text-center">18</td>
                                            <td class="text-right">1212</td>
                                            <td class="text-right">28</td>
                                            <td class="text-center">A/3</td>
                                            <td class="text-center">0,00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">{{-- img licenza --}}
                        <div class="col-md">
                            <h6>Num. licenza/titolo</h6>
                            <a class="col-md-3 mb-3" href="" style="display:block; border-radius:3px; height:218px; width:326px; border:1px solid #DBDCDB; background-color:#F2F2F2;" ><img src="../resources/img/image_rectangle.png" alt="" title="none" /></a>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="pl-3 pr-3" type="button" value="Esporta lista condomini" style="color:white; background-color:#383D3F; border:1px solid none; height:27px; width:189px; font-size:13px; font-weight:bold;" />
                                </div>
                                <div class="col-md-3" >
                                    <label >Tot. millesimi</label>
                                    <input type="text" value="1.000,00" style="border:1px solid #DBDCDB; border-radius:3px;" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="background-color: #f2f2f2; height:20px; border:none;">

                
                <div style="padding:20px;" ><!-- Dati Amministrazione -->
                    <h6>Dati Amministrazione</h6>
                    <div class="row"> 
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Nominativo</label><br/>
                            <input type="text" class="col-md-12" value="Crystal D’Antonio" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled />
                        </div>
                    </div> 
                    <div class="row">  
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Cognome</label><br/>
                            <input type="text" class="col-md" value="D’Antonio" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Nome</label><br/>
                            <input type="text" class="col-md" value="Giovanni Marco" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Codice fiscale</label><br/>
                            <input type="text" class="col-md" value="DNTGNN73R29D157T" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                    </div>
    
                    <div class="row">  
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Indirizzo</label><br/>
                            <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md form-group">
                                    <label style="display:inline-block;" >Città</label><br/>
                                    <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md form-group">
                                    <label style="display:inline-block;" >Provincia</label><br/>
                                    <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                                <div class="col-md form-group">
                                    <label style="display:inline-block;" >CAP</label><br/>
                                    <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row"> 
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Telefono</label><br/>
                            <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Cellulare</label><br/>
                            <input type="text" class="col-md" value="" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                        <div class="col-md form-group">
                            <label style="display:inline-block;" >Email</label><br/>
                            <input type="text" class="col-md" value="info.dantonio@gmail.com" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- chiusura div box praticeNav -->

    </div>{{-- chiusura div content-main praticeNav --}}

    <div class="box-fixed">
        <button class="back-button mr-2">Annulla</button>
        <button class="add-button">Conferma</button>
    </div>

@endsection