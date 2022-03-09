@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')

    <div class="nav_bonus">
        <span>Dati di Progetto</span>
        <span>Interventi trainanti</span>
        <span>Interventi trainanti +</span>
        <span>Dati stato finale</span>
        <span>Tot. Spese e Dichiarazioni</span>
        <span>Varianti</span>
    </div>

    <h6>Dati di Progetto</h6>
    <hr style="margin-top: 5px; background-color: #211e16;">
    <div>
        <div class="d-flex">
            <p>È stata depositata la relazione tecnica prevista dall’art. 28 della legge 10/91 e dall’art. 8 comma 1 del D.lgs 192/05 e successive modificazioni</p>
            <label for="" style="margin-left: 20px">
                <input type="radio">
                N.D.
            </label>
            <label for="" style="margin-left: 20px">
                <input type="radio"> 
                No
            </label>
            <label for="" style="margin-left: 20px">
                <input type="radio">
                Si
            </label>
        </div>
        <div class="d-flex align-items-center">
            <p style="margin: 0">è stata depositata nell’ufficio competente del Comune di</p>
            <input type="text" value="Romano D'Ezzelino" style="margin-left: 20px;">
            <label for="" style="margin: 0; padding-left: 20px;">
                Prov.
                <input type="text" value="VI">
            </label>
            <label for="" style="margin: 0; padding-left: 20px;">
                in data
                <input type="text" value="16/09/2021">
            </label>
            <label for="" style="margin: 0; padding-left: 20px;">
                Protocollo n.
                <input type="text" value="SUPRO/0326491">
            </label>
        </div>
        <div class="d-flex align-items-center mt-5">
            <input type="checkbox" name="" id="">
            <p style="margin: 0">Non è stata depositata la relazione tecnica in quanto si ricade nei casi di esclusione previsti dal comma 1 dell’art. 8 del del D.lgs 192/05 e dal punto 2,
                paragrafo 2.2. dell’allegato 1 del decreto 26/06/2015</p>
        </div>

        <div class="mt-5">
            <label for="">
                - gli stessi lavori sono iniziati in data
                <input type="text" value="gg/mm/aaaa">
            </label>
            <label for="" style="padding-left: 20px;">
                e conclusi in data
                <input type="text" value="gg/mm/aaaa">
            </label>
        </div>
    </div>
@endsection