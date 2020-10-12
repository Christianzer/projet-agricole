@extends('admin.layout')

@section('pages-admin')
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <center><h4 class="m-0 font-weight-bold text-primary">DOSSIER NUMERO {{$dossier[0]->dossier}}</h4></center>
            </div>
        </div>

        <form action="{{route('dossier.etat')}}" method="post">
            <input type="hidden" name="codeDossier" value="{{$dossier[0]->dossier}}">
            @csrf
            <div align="center">
                <button  class="btn btn-primary" type="submit" name="etat" value="1">Valider</button>
                <button  class="btn btn-danger" type="submit" name="etat" value="2">Rejeter</button>
            </div>
        </form>
    </div>
@endsection
