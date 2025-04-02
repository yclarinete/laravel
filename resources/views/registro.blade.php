@extends('_partials/main')

@section('conteudo')

    <div class="register-container">
      <h2 class="text-center">Registro</h2>
      <form action="{{route ('registro')}}" method="POST">
        @csrfphp
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" name="nome_completo" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <p class="text-center mt-3">
          Já tem uma conta? <a href="#" style="color: #56BFA1;">Faça login</a>
        </p>
      </form>
    </div>

@endsection