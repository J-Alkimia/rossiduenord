<h6>Dati stato finale</h6>
<hr style="margin-top: 5px; background-color: #211e16;">

<div class="scroll" style="font-weight: 500">
    <p class="font-500" style="text-decoration: underline;">Impianto termico esistente nella situazione ante intervento:</p>
    
    <div style="width: 80%">{{-- select pre intervento --}}
        <div class="form-group">
            <label for="" class="grey">Tipo di impianto</label>
            <div class="position-relative">
                <div class="select"></div>
                <select class="form-control px-3" style="background-color: #f2f2f2" name="" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="grey">Terminali di erogazione del calore</label>
            <div class="position-relative">
                <div class="select"></div>
                <select class="form-control px-3" style="background-color: #f2f2f2" name="" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="grey">Tipo di distribuzione</label>
            <div class="position-relative">
                <div class="select"></div>
                <select class="form-control px-3" style="background-color: #f2f2f2" name="" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="grey">Tipo di regolazione</label>
            <div class="position-relative">
                <div class="select"></div>
                <select class="form-control px-3" style="background-color: #f2f2f2" name="" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
    
    <div class=" mt-5">{{-- Tipo e numero di generatori presenti prima dell’intervento --}}
        <p class="ml-3"><b>Tipo e numero di generatori presenti prima dell’intervento</b></p>
        <div class="py-2 px-3" style="width: 80%; height: 150px; background-color: #f2f2f2; position: relative; ">
            <div class="d-flex">
                <span class="mr-2">1) Tipo</span>
                <select name="" id="" style="width: 200px; background-color: #dbdcdb; border: none;">
                    <option value=""></option>
                </select>
                <span class="ml-4">N° di generatori</span>
                <input type="text" class="border ml-2 px-2 text-right" style="width: 100px">
            </div>
            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div class="d-flex align-items-center">
                        <p class="m-0">Rendimento al 100% della potenza</p>
                        <label for="" class=" m-0 mr-4 black">
                            <input type="text" value="" style="width: 120px;" class="border ml-2 px-2 text-right">
                            %
                        </label>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 ml-4">
                    <div class="d-flex align-items-center">
                        <p class="m-0">Potenza utile nominale complessiva</p>
                        <label for="" class=" m-0 mr-4 black">
                            <input type="text" value="" style="width: 120px;" class="border ml-2 px-2 text-right">
                            kW
                        </label>
                    </div>
                </div>
            </div>
            <button class="btn-delete" style="position: absolute; bottom:10px; right:10px">Elimina</button>
        </div>
    </div>

    <div class="mt-5" style="width: 80%">{{-- Potenza nominale complessiva --}}
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <p class="m-0">Potenza nominale complessiva</p>
                <label for="" class=" m-0 mr-4 black">
                    <input type="text" value="" style="width: 120px;" class="border ml-2 px-2 text-right">
                    kW
                </label>
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="" class="grey">Vettore energetico prevalente</label>
            <div class="position-relative">
                <div class="select"></div>
                <select class="form-control px-3" style="background-color: #f2f2f2" name="" id="">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <label class="checkbox-wrapper d-flex">
            <input type="checkbox" name="" value="">     
            <span class="checkmark"></span> 
            <span class="black" >Presenza dell’impianto di condizionamento estivo</span>
        </label>
        <p class="m-0">Eventuali interventi di manutenzione straordinaria</p>
        <div style="width: 100%; height: 150px; border:#f2f2f2 1px solid; border-radius: 5px; ">

        </div>
    </div>

</div>

