@extends('bank.layouts.bank')

@section('content')
    <div class="content-main">
        <a href="{{route('bank.folder.create')}}" class="add-button">+ Aggiungi cartella</a>

        <div class="box">
            <span class="black text-md">Elenco cartelle</span>
            <hr class="bg-black">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="d-inline">
                        <span class="text-sm grey">Elementi visualizzati</span>
                        <input class="type-number" type="number" value="100" name="" id="">
                    </div>
                    <button id="select-all" class="btn-custom bg-black white">Seleziona tutto</button>
                    <button id="deselect-all" class="btn-custom bg-grey white">Deseleziona tutto</button>
                    <button id="visible-column" class="btn-custom bg-lighgrey black">Visibilità colonna</button>
                    <button id="select-delete" class="btn-custom bg-red white">Elimina selezionato</button>
                </div>
                <div class="position-relative w-25">
                    <input class="search" type="search" placeholder="Cerca" name="" id="">
                    <img class="img-search" src="{{ asset('/img/icon/ICONA-CERCA.svg')}}" alt="">
                </div>
            </div>

            <div class="table mt-2">
                <table>
                    <thead>
                        <tr style="border-top: 1px solid #707070">
                            <th style="width: 2%"></th>
                            <th style="width: 25%">Nome cartella</th>
                            <th style="width: 20%">Data creazione</th>
                            <th style="width: 15%">Tipologia</th>
                            <th style="width: 20%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($folders as $folder)
                        <tr>
                            <td style="border-left: 1px solid #707070">
                                <input class="ceck" type="checkbox" value="{{$folder->id}}" name="id" id="id">
                            </td>
                            <td>{{$folder->name}}</td>
                            <td>{{$folder->created_at}}</td>
                            <td>{{$folder->type}}</td>
                            <td class="">
                                <a href="{{route('bank.folder.show', $folder->id)}}" class="btn-custom white bg-green">
                                    Vedi
                                </a>
                                <a href="{{route('bank.folder.edit', $folder->id)}}" class="btn-custom white bg-black">
                                    Modifica
                                </a>
                                <form action="{{ Route('bank.folder.destroy', $folder->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="#" data-toggle="modal" data-targhet="#delete{{$folder->id}}" class="btn-custom white bg-red mr-0">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
