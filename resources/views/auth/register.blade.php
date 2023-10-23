@extends('sistema.layout')
@section('content')


<div class="containerCadastro">
    <div class="col-sm-12" style="background-color: #fffff" style="width: auto; height: 400px">
        <div class="container">
            <p class="h4 text-center" style="color: #2B1998; margin-top: 20px; font-size: 60px"><b>Cadastre-se </b></p>
<form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/boneco.svg')}}" />
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="Nome" value="" required>
            </div>

            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/boneco.svg')}}" />
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="Sobrenome" value="" required>
            </div>
            </div>
            <div class="row g-3">
            <div class="col-sm-12">
              <label for="username" class="form-label">Nome de usuário</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              </div>
                <br>
              <div class="col-12">
              <img src="{{asset('storage/imagens/email.svg')}}" />
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
            </div>
        </div>
            <br>
              <div class="col-sm-6">
              <img src="{{asset('storage/imagens/cpf.png')}}" />
              <label for="firstName" class="form-label">CPF</label>
              <input type="text" class="form-control" id="firstName" placeholder="999.999.999-99" value="" required>
            </div>
            <br>
            <div class="col-sm-6">
            <img src="{{asset('storage/imagens/telefone.png')}}" />
              <label for="lastName" class="form-label">Telefone/Celular</label>
              <input type="text" class="form-control" id="lastName" placeholder="+99(99)99999-9999" value="" required>
            </div>
            <br>
            <div class="col-6">
            <img src="{{asset('storage/imagens/chaves.png')}}" />
              <label for="address" class="form-label">Senha</label>
              <input type="text" class="form-control" id="address" placeholder="Senha" required>
            </div>
            <br>
            <div class="col-6">
            <img src="{{asset('storage/imagens/chaves.png')}}" />
              <label for="address2" class="form-label">Confirmar Senha</label>
              <input type="text" class="form-control" id="address2" placeholder="Confirmar Senha">
            </div>
            <br>
            <br>
            <div class="col-6">
            <td><button class="btn btn-primary my-2 my-sm-0"; id="botaocad" type="submit" style="margin-right: 15px">Cadastrar</button></td>
            </div>

@endsection
@section('script')
    <script type="module">
        $().ready(function() {
            let numberMask = new Inputmask('+99(99)99999-9999')
            numberMask.mask('#telefone')
            let cpfMask = new Inputmask('999.999.999-99')
            cpfMask.mask('#CPF')
        });
    </script>
@endsection


