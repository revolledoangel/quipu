<div class="login-box">

  <div class="login-logo">
    
    <img src="views/img/template/logoquipu.png" class="img-responsive" style="padding:5px" alt="">

  </div>
  <!-- /.login-logo -->

  <div class="login-box-body">
    <p class="login-box-msg">Inicia sesión</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

      $login = new ControllerUsers();
      $login -> ctrIngresoUsuario();

      ?>


    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->