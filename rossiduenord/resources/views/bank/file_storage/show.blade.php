@extends('bank.layouts.bank')

@section('content')
    <div class="content-main">
        <div class="box">
            <span class="black text-md"><b>File:</b> {{ $file->title}}</span>
            <hr class="bg-black">

            <div>
                <img src="{{ asset('/img/icon/arrow-left.svg')}}" alt="">
                <a href="{{ route('bank.folder.index') }}">Torna indietro</a>
            </div>

            <table style="width: 100%; margin-top: 20px;">
                <tbody class="table">
                    <tr style="border-top: 1px solid">
                        <td class="w-25" style="border-left: 1px solid">ID</td>
                        <td>{{ $file->id}}</td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Titolo</td>
                        <td>{{ $file->title}}</td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Cartella</td>
                        <td>{{ $file->folder->name}}</td>
                    </tr>
                </tbody>
            </table>

            <div style="margin-top: 50px">
                <embed src="{{ asset('storage/' . $file->file) }}" style="width: 100%; height: 1000px;" alt="pdf" />
            </div>
        </div>
    </div>
@endsection
