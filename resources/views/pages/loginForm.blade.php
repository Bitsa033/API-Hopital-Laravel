@include('layouts/link')
<body class="hold-transition login-page">
  
  <div class="login-box ">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="../../index2.html" class="h1"><b>Médico</b>APP</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Connectez-vous pour démarrer votre session !</p>
    
          <form autocomplete="off" action="{{url('login')}}" method="POST" >
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="name2" class="form-control" placeholder="Nom">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mb-1">
            <a href="/forgot-password">J'ai oublié mon mot de passe</a>
          </p>
          <p class="mb-0">
            <a href="/user-add" class="text-center">Je n'ai pas de compte</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
 