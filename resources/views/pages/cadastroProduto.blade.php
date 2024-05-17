@extends('components.masterPage')

@section('conteudo')
    <form action="" method="post">
        <input type="text" name="nome">
        <input type="text" name="idade">
        <input type="text" name="cpf">
        <input type="text" name="email">

        <input type="submit" value="Cadastrar">
    </form>
@endsection