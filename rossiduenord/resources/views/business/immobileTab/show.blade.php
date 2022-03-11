@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')


    <h6>Dati Immobile</h6>
    <hr style="margin-top: 5px; background-color: #211e16;">
    <div>
        <p>Nome intervento</p>
        <form style="margin-bottom:20px;" >

            <div class="form-group">
             <label style="display:inline-block;" >Nome intervento</label>
             <input type="text" class="col-md" value="Condominio Camedia" />
            </div>

            <div class="form-group">
             <label style="display:inline-block;" >Ruolo dell'impresa</label>
             <select id="companyRole" class="col-md" name="roles" disabled>
              <option value="">Ruolo corrente</option>
              <option value="">Altro ruolo</option>
             </select>
            </div>
       </form>
        

       <div class="container" style="margin-bottom:25px;">
        <div class="row">
            <div class="col-md-2" style="text-align:left;">
             <p>Tipologia Intervento:</p>
            </div>
             <div class="col-md-10">
                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Ecobonus 50%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Bonus Ristrutturazione edilizia 50%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Ecobonus 65%</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">70% Sismabonus (Miglioramento 1 classe sismica)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">75% Sismabonus (Miglioramento 1 classe sismica per Condominio)</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">80% Sismabonus (Miglioramento 2 classi sismiche)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">85% Sismabonus (Miglioramento 2 classi sismiche per Condominio)</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Ecobonus 50%</span>
                    </div>
                    
                </div> 

                <div class="row sec2checkbelements">
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Bonus facciate 90%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Cappotto 90%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Super SismaBonus 110%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Super Ecobonus 110%</span>
                    </div>
                    <div class="form-group" style="display:inline-block;" >
                        <input type="checkbox" id="eb1" na me="eb1" value="eb"> <span style="margin-right:12px;" for="eb">Acquisto di case antisismiche 110%</span>
                    </div>
                    
                </div> 
                

            </div>
        </div>
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
         <div class="row">
            <div class="row">
                <div class="col-md-9"><p style="display:inline-block; margin-right:25px;">L'edificio è sottoposto a vincoli previsti dal codice dei beni culturali e del paesaggio</p> </div>
                <div class="col-md">
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
                </div>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">Interventi trainanti al 110% sono vietati dai regolamenti edilizi, urbanistici e ambientali</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">L’edificio è situato in un comune montano</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">L’edificio è situato in un comune interessato da procedura di infrazione comunitaria</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">L’edificio è in una zona colpita da eventi sismici</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">L’edificio è in fase di ristrutturazione Art. 3, Com. 1, lettere d), e), f), del D.P.R. 380/2001</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
            </div>

            <div class="">
                <p style="display:inline-block; margin-right:25px;">L’edificio è in un’area non metanizzata</p>
                <form style="display:inline-block; ">
                    <input type="radio" id="html" name="nd_val" value="notDefine">
                    <label style="margin-right:15px;" for="">N.D.</label>
                    <input type="radio" id="css" name="no_val" value="no">
                    <label style="margin-right:15px;" for="">No</label>
                    <input type="radio" id="javascript" name="si_val" value="yes">
                    <label style="margin-right:15px;" for="">Sì</label>
                </form>
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
@endsection