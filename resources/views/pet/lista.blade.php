@extends('layouts.master')
@section('titulo', 'Tabela de pets')
@section('conteudo')
    <section id="section" style="margin-top: 200px">

    </section>
    <button id="btn-submit">trazer</button>

    <body>
        <div>
            <label for="">todos</label>
            <input type="checkbox" id="all" name="all" />
           
        </div>
        <div>
            <label for="">opcoes</label>
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
            <input type="checkbox" class="campos"id="opcoes" name="permission[]" />
        </div>

    </body>



    </html>
