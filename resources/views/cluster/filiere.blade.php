@extends('Layouts.header')
@section('filiere')
    {{-- Formulaire debut --}}
    <div class="container ">
        <section class="section register  d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="">
                        <!--Debut titre-->
                        <div class="d-flex justify-content-center py-4">
                            <span class="d-none d-lg-block align-items-center h3"> Enregistrement Filière</span>
                        </div>
                        <!--Fin titre-->
                        <div class="card mb-5">
                            <div class="card-body">

                                <div class="container">
                                    <form action="{{ route('filieres.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="">Nom filière</label>
                                                <div class="input-group input-group-lg mb-3">
                                                    <input type="text"
                                                        class="form-control"aria-label="Sizing example input" name="filiere"
                                                        aria-describedby="inputGroup-sizing-lg"required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-auto mt-4">
                                            <div class="col">
                                                <input class="btn btn-primary" type="submit"></input>
                                            </div>
                                            <div class="col">
                                                <input class="btn btn-warning" value="Annuler" type="reset"></input>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
    </div>
    </section>
    </div>
    {{-- Formulaire fin --}}
@endsection
