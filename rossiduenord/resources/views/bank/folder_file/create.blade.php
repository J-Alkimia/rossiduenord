@extends('bank.layouts.bank')

@section('content')
    <div class="content-main">
        <div class="box">
            <span class="black text-md"><b>Crea cartella</b></span>
            <hr class="bg-black">

            @include('bank.layouts.partials.error')    

            <form action="{{ route('bank.folder.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name" class="text">{{ __('Nome') }}</label>
                    <div>
                        <input id="name" type="text" style="height: 47px!important" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="type" class="text">Cartella</label>
                    <select style="height: 47px!important" class="form-control" name="type" id="type">
                        <option disabled selected value="">Seleziona</option>
                        <option value="documenti vari">documenti vari</option>
                        <option value="documenti fiscali">documenti fiscali</option>
                    </select>
                </div>
                <button type="submit" class="add-button position-relative">
                    {{ __('Salva file') }}
                </button>
            </form>
        </div>
    </div>
@endsection