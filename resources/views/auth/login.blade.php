@extends('layouts.master')

@section('conteudo')
    <section class="container container--login">
        <form>
            <div class="d-flex flex-column align-items-center ">
                <div class="col-4">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" />
                </div>
                <div class="col-4">
                    <label class="form-label">Senha:</label>
                    <input type="password" name="email" class="form-control" />
                </div>
                <div class=" mt-4" >
                    <button class="btn btn-outline-primary" type="submit">Entrar</button>
                </div>
            </div>


        </form>
    </section>
@endsection
