@extends('bank.layouts.bank')

@section('content')
    <div class="content-main">
        <div class="box">
            <span class="black text-md">Mostra utente</span>
            <hr class="bg-black">

            <div>
                <img src="{{ asset('/img/icon/arrow-left.svg')}}" alt="">
                <a href="{{ route('bank.users.index') }}">Torna indietro</a>
            </div>
            
            <table style="width: 100%; margin-top: 20px;">
                <tbody class="table">
                    <tr style="border-top: 1px solid">
                        <td class="w-25" style="border-left: 1px solid">ID</td>
                        <td>{{ $user->id}}</td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Nome</td>
                        <td>{{ $user->name}}</td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Email</td>
                        <td>{{ $user->email}}</td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Tipologia Profilo</td>
                        <td>{{ $user->role}}</td>
                    </tr>
                </tbody>
            </table>

            <table style="width: 100%; margin-top: 50px;">
                <tbody>
                    <tr style="border-top: 1px solid">
                        <td class="w-25" style="border-left: 1px solid">Ragione sociale</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Partita IVA</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Codice Fiscale</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Forma Legale</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">CCIAA+REA</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Codice Ateco</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="w-25" style="border-left: 1px solid">Data registrazione</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection