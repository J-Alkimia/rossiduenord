@extends('business.layouts.business')

@section('content')
    <div class="content-main">
        <div class="box">
            
            <span class="black text-md"><b>Modifica cartella:</b> {{ $folder->name }}</span>
            <hr class="bg-black">

            @include('business.layouts.partials.error')    

            <form action="{{ route('business.folder.update', $folder->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name" class="text">{{ __('Titolo') }}</label>
                    <div>
                        <input id="name" type="text" style="height: 47px!important" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $folder->name }}" required autocomplete="name" autofocus>

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
                        <option selected value="{{$folder->type}}">{{$folder->type}}</option>
                        <option value="documenti vari">documenti vari</option>
                        <option value="documenti fiscali">documenti fiscali</option>
                    </select>
                </div>
                <button type="submit" class="add-button position-relative">
                    {{ __('Salva modifiche') }}
                </button>
            </form>
        </div>
    </div>
@endsection