@extends('business.layouts.business')

@section('content')
    <div class="content-main">
        <div class="box px-20 pt-20 pb-20">
            <span class="black text-md"><b>Completa il tuo Profilo</b></span>
            <hr class="bg-black">

            @include('business.layouts.partials.error')    

            <form action="{{ route('business.update.data', $business->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="type" class="text">{{ __('Ragione sociale') }}</label>
                    <div>
                        <input id="type" type="text" style="height: 47px!important" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="p_iva" class="text">{{ __('Partita IVA') }}</label>
                    <div>
                        <input id="p_iva" type="text" style="height: 47px!important" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ old('p_iva') }}" required autocomplete="p_iva" autofocus>

                        @error('p_iva')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="c_f" class="text">{{ __('Codice Fiscale') }}</label>
                    <div>
                        <input id="c_f" type="text" style="height: 47px!important" class="form-control @error('c_f') is-invalid @enderror" name="c_f" value="{{ old('c_f') }}" required autocomplete="c_f" autofocus>

                        @error('c_f')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="legal_form" class="text">{{ __('Forma legale') }}</label>
                    <div>
                        <input id="legal_form" type="text" style="height: 47px!important" class="form-control @error('legal_form') is-invalid @enderror" name="legal_form" value="{{ old('legal_form') }}" required autocomplete="legal_form" autofocus>

                        @error('legal_form')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="rea" class="text">{{ __('CCIAA+REA') }}</label>
                    <div>
                        <input id="rea" type="text" style="height: 47px!important" class="form-control @error('rea') is-invalid @enderror" name="rea" value="{{ old('rea') }}" required autocomplete="rea" autofocus>

                        @error('rea')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="c_ateco" class="text">{{ __('Codice Ateco') }}</label>
                    <div>
                        <input id="c_ateco" type="text" style="height: 47px!important" class="form-control @error('c_ateco') is-invalid @enderror" name="c_ateco" value="{{ old('c_ateco') }}" required autocomplete="c_ateco" autofocus>

                        @error('c_ateco')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="reg_date" class="text">{{ __('Dati registrazione') }}</label>
                    <div>
                        <input id="reg_date" type="text" style="height: 47px!important" class="form-control @error('reg_date') is-invalid @enderror" name="reg_date" value="{{ old('reg_date') }}" required autocomplete="reg_date" autofocus>

                        @error('reg_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="add-button position-relative">
                    {{ __('Salva') }}
                </button>
            </form>
        </div>
    </div>
@endsection
