@extends('bank.layouts.bank')

@section('content')
    <div class="content-main">
        <a href="{{route('bank.file.create')}}" class="add-button">+ Aggiungi file</a>

        <div class="box">
            <div style="margin-bottom: 20px">
                <img src="{{ asset('/img/icon/arrow-left.svg')}}" alt="">
                <a href="{{ route('bank.folder.index') }}">Torna indietro</a>
            </div>

            <span class="black text-md">Elenco file cartella: {{$folder->name}}</span>
            <hr class="bg-black">


            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <div class="d-inline">
                        <span class="text-sm grey">Elementi visualizzati</span>
                        <input class="type-number" type="number" value="100" name="" id="">
                    </div>
                    <button id="select-all" class="btn-custom bg-black white">Seleziona tutto</button>
                    <button id="deselect-all" class="btn-custom bg-grey white">Deseleziona tutto</buttonhref=>
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
                            <th style="width: 5%">Titolo</th>
                            <th style="width: 25%">Data creazione</th>
                            <th style="width: 25%">File</th>
                            <th style="width: 22%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $file)
                        <tr>
                            <td style="border-left: 1px solid #707070">
                                <input value="{{$file->id}}" class="ceck" type="checkbox" name="id" id="id">
                            </td>
                            <td>{{$file->title}}</td>
                            <td>{{$file->created_at}}</td>
                            <td>
                                <a href="{{ asset('storage/' . $file->file)}}" download="{{$file->title}}.pdf">scarica</a>
                            </td> 
                            <td class="">
                                <a href="{{route('bank.file.show', $file)}}" class="btn-custom white bg-green">
                                    Vedi
                                </a>
                                <a href="{{route('bank.file.edit', $file)}}" class="btn-custom white bg-black">
                                    Modifica
                                </a>
                                <form action="{{ Route('bank.file.destroy', $file->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" href="#" data-toggle="modal" data-targhet="#delete{{$file->id}}" class="btn-custom white bg-red mr-0">
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
