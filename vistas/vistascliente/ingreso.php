<?php
 include("header.php");
?>

<p class="login-box-msg">Ingrese sus datos de acceso</p>
    
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
      <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    

  </header>

  <form method="post" id="frmAcceso">
      <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="email" class="form-control" id="cliente" name="cliente" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Ingresar</button>
  </form>




<?php
 include("footer.php");
?>
