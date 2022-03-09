@extends('business.layouts.business')

@section('content')
    @include('business.layouts.partials.error')
    @include('business.layouts.partials.message')
    @include('business.layouts.partials.practiceNav')

    <table class="table_bonus">
        <thead>
            <tr>
                <td style="width:50%;"><b>Immobile</b></td>
                <td style="width:50%;"><b>Data inserimento</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="{{route('business.test') }}">Condominio Camelia Via Piave 15, 36060 Romano D'ezzelino VI</a>
                </td>
                <td><a href="{{route('business.test') }}">09/08/2021</a></td>
            </tr>
        </tbody>
    </table>
@endsection