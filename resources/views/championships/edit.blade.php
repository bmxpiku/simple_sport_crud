@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Rozgrywki / Edit #{{$championship->ID_ROZGRYWKI}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('championships.update', $championship->ID_ROZGRYWKI) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('NAZWA')) has-error @endif">
                       <label for="NAZWA-field">NAZWA</label>
                    <input type="text" id="NAZWA-field" name="NAZWA" class="form-control" value="{{ $championship->NAZWA }}"/>
                       @if($errors->has("NAZWA"))
                        <span class="help-block">{{ $errors->first("NAZWA") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ZA_ZWYCIESTWO')) has-error @endif">
                       <label for="za_zwyciestwo-field">ZA_ZWYCIESTWO</label>
                    <input type="text" id="za_zwyciestwo-field" name="ZA_ZWYCIESTWO" class="form-control" value="{{ $championship->ZA_ZWYCIESTWO }}"/>
                       @if($errors->has("ZA_ZWYCIESTWO"))
                        <span class="help-block">{{ $errors->first("ZA_ZWYCIESTWO") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ZA_REMIS')) has-error @endif">
                       <label for="za_remis-field">ZA_REMIS</label>
                    <input type="text" id="za_remis-field" name="ZA_REMIS" class="form-control" value="{{ $championship->ZA_REMIS }}"/>
                       @if($errors->has("ZA_REMIS"))
                        <span class="help-block">{{ $errors->first("ZA_REMIS") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                    <a class="btn btn-link pull-right" href="{{ route('championships.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection