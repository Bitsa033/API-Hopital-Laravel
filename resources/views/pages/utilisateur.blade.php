@include('layouts/link')
<body class="hold-transition register-page">
  
  <div class="login-box ">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="../../index2.html" class="h1"><b>Médico</b>APP</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Enregistez-vous pour démarrer votre session !</p>
    
          <form autocomplete="off" action="{{url('user-store')}}" method="POST" >
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Nom">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="adress" class="form-control" placeholder="Adresse">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-map"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="phone" class="form-control" placeholder="Téléphone">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-phone"></span>
                  </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-mail"></span>
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
            <div class="input-group mb-3">
                <select type="text" class="form-control" name="type">
                    <option value="Sécretaire">Sécretaire</option>
                    <option value="Directeur">Directeur</option>
                    <option value="Administrateur">Administrateur</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-6">
                <button type="submit" class="btn btn-primary btn-block">S'enregistrer</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <p class="mb-0">
            <a href="/" class="text-center">J'ai déja un compte</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->
</body>
 