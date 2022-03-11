@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')

    <h6><b>Dati Immobile</b></h6>
    <hr style="margin-top: 5px; background-color: #211e16;">
    <div>

        <form style="margin-bottom:20px;" >
            <div class="form-group">
             <label style="display:inline-block;" >Nome intervento</label>
             <input type="text" class="col-md" value="Condominio Camedia" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
            </div>

            <div class="form-group">
             <label style="display:inline-block;" >Ruolo dell'impresa</label>
             <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
              <option value="">Ruolo corrente</option>
              <option value="">Altro ruolo</option>
             </select>
            </div>
       </form>
        


       <div class="row" style="margin-bottom:25px;" >
            <div class="col-md-2" style="text-align:left;">
             <p>Tipologia Intervento:</p>
            </div>
             <div class="col-md-10">
                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Ecobonus 50%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Bonus Ristrutturazione edilizia 50%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Ecobonus 65%</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">70% Sismabonus (Miglioramento 1 classe sismica)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">75% Sismabonus (Miglioramento 1 classe sismica per Condominio)</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">80% Sismabonus (Miglioramento 2 classi sismiche)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">85% Sismabonus (Miglioramento 2 classi sismiche per Condominio)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Ecobonus 50%</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Bonus facciate 90%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Cappotto 90%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Super SismaBonus 110%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Super Ecobonus 110%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px; color: #818387; font-weight:bold;" for="eb">Acquisto di case antisismiche 110%</span>
                    </div>
                    
                </div> 
                

            </div>
        </div>




        
            <div class="row" style="margin-top:30px;">
                
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
                            <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                            <option value=""> </option>
                            <option value="">Altro ruolo</option>
                        </select>
                    </div>
                </div>


                <div class="col-md">
                    <div class="form-group"> 
                        <div class="row"> 
                            <div class="col-md"> 
                                <label >N.</label><br/>
                                <input class="col-md" value="15" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="col-md">
                                <label>Comune</label><br/>
                                <input class="col-md" value="Romano D’ Ezzelino" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="col-md">
                                <label>Provincia</label><br/>
                                <input class="col-md" value="VI" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                            </div>
                            <div class="col-md">
                                <label>Regione</label>
                                <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                                    <option value=""> </option>
                                    <option value="">Altro ruolo</option>
                                </select>
                            </div>
                            <div class="col-md"> 
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
                            <select id="companyRole" class="col-md" name="roles" style="height:40px; border-radius:2px; border:1px solid #DBDCDB; background-color: #F2F2F2;" disabled>
                            <option value=""> </option>
                            <option value="">Altro ruolo</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row"> 
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
            <div class="row"> 
                <div class="col-md" > 
                    <label>Note</label>
                    <input class="col-md" type="text" width="100%" style="height:40px; border-radius:2px; border:1px solid #DBDCDB;" />
                </div>
            </div>


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



























































































































        <div class="container" style="margin-bottom:20px;">
         <div class="row">
            <div class="col-md">
                 
            </div>
            <div class="col-md">
             
            </div>
         </div>
        </div>


         
         
        <div class="container"> 
            <h6>Lista condomini</h6>
        <div class="col-md-12">
        <table id="dataTable_businessData" class="col-md-12 display" style="width:100% border:none !important;">
        <thead>
            <tr>
                <th>N.</th>
                <th>Nome/Ragione soc…</th>
                <th>Cognome</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Codice fiscale/Pa…</th>

                <th>Mille…</th>
                <th>Foglio</th>
                <th>Part.</th>
                <th>Sub</th>
                <th>Cate…</th>
                <th>Sup…</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Enkeleida</td>
                <td>Metushi</td>
                <td>349 0000000</td>
                <td>Enkeleida.metushi@gmail.com</td>
                <td>MTSNLD71H57Z100W</td>
                <td>60,240</td>
                <td>18</td>
                <td>1217</td>
                <td>28</td>
                <td>A/3</td>
                <td>0,00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Enkeleida</td>
                <td>Metushi</td>
                <td>349 0000000</td>
                <td>Enkeleida.metushi@gmail.com</td>
                <td>MTSNLD71H57Z100W</td>
                <td>60,240</td>
                <td>18</td>
                <td>1217</td>
                <td>28</td>
                <td>A/3</td>
                <td>0,00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Enkeleida</td>
                <td>Metushi</td>
                <td>349 0000000</td>
                <td>Enkeleida.metushi@gmail.com</td>
                <td>MTSNLD71H57Z100W</td>
                <td>60,240</td>
                <td>18</td>
                <td>1217</td>
                <td>28</td>
                <td>A/3</td>
                <td>0,00</td>
            </tr>
      
        </tbody>
  
        </table>
        </div>
        </div>




         <div class="row">
            <div class="form-group">
                 
            </div>
         </div>

         <div class="row">
            <div class="form-group">
                 
            </div>
         </div>


        </div>

        
    </div>

    <!-- Ultima Sezione: Dati Amministrazione -->
    <div class="" style="background-color: white; padding:30px; margin-top:-50px;" >
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



    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="box-fixed">
        <button class="back-button mr-2">Annulla</button>
        <button class="add-button">Conferma</button>
    </div>

@endsection