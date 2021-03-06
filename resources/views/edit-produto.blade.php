<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Loja online
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ url('material-dashboard-master/assets/css/material-dashboard.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <div class="logo">
        <a href="index.html" class="simple-text logo-mini">
          LOJA ONLINE
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a  class="nav-link" href="{{route('dashboard')}}">
              <i class="material-icons">home</i>
              <p>Página Inicial</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a  class="nav-link" href="{{route('produto')}}">
              <i class="material-icons">shopping_bag</i>
              <p>Produtos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="{{route('fornecedor')}}">
              <i class="material-icons">shopping_cart</i>
              <p>Fornecedores</p>
            </a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="{{route('venda')}}">
              <i class="material-icons">request_page</i>
              <p>Vendas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="#" onclick="event.preventDefault(); getElementById('form-sair').submit()">Sair
              <i class="material-icons">shopping_bag</i>
            </a>
          </li>
          <form method="POST" action="{{ route('logout') }}" id="form-sair">
            @csrf
          </form>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Produtos</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edite seu produto</h4>
                  <p class="card-category">Preencha corretamente</p>
                </div>
                <div class="card-body">
                  <form action="{{route('update-produto', ['id' => $produtos->id])}}" method="POST">
                   @csrf
                   <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="{{$produtos->PRO_NOME}}">
                      </div>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="form-group"> 
                        <label class="bmd-label-floating">Fornecedor</label>
                        <select name="for" class="form-control" required id="for">
                          @foreach ($fornecedor as $for)
                          <option value="{{$for->id}}"
                            <?php 
                            if($for->id==$produtos->PRO_FOR_CODIGO){
                              echo "selected='selected'";
                            }
                            ?>>
                            {{$for->FOR_NOME}}
                          </option>
                          @endforeach
                        </select>
                      </div> 
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Status</label>
                        <select name="status"  class="form-control" required id="status">
                          <option  {{$produtos->PRO_STATUS == "Bombando" ? 'selected': ''}} value="Bombando">Bombando</option>  
                          <option  {{$produtos->PRO_STATUS == "Estável" ? 'selected': ''}} value="Estável">Estável</option> 
                          <option  {{$produtos->PRO_STATUS == "Fraco" ? 'selected': ''}} value="Fraco">Fraco</option>       
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Preço de Compra</label>
                        <input class="form-control"  type="text" name="pcompra" id="pcompra" value="{{$produtos->PRO_PRECOCOMPRA}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Preço de Venda</label>
                        <input class="form-control" type="text" name="pvenda" id="pvenda" value="{{$produtos->PRO_PRECOVENDA}}">
                      </div>
                    </div>                   
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Quantidade</label>
                        <input  class="form-control" type="text" name="qntd" id="qntd" value="{{$produtos->PRO_QUANTIDADE}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label class="bmd-label-floating">Descrição</label>
                        <input class="form-control" type="text" name="desc" id="desc" value="{{$produtos->PRO_DESCRICAO}}">
                      </div>
                    </div>
                    <div class="col-md-4 mt-4">
                      <div class="form-group">
                        <button type="submit" class="btn btn-info pull-right">Salvar alterações</button>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
    <!-- Final da página-->
    <footer class="footer">
      <div class="container-fluid">
        <nav class="float-left">
          <ul>
            <li>
              <a href="#">
                Loja Online
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Criado por <i class="material-icons">favorite</i> 
          <a href="#">Informatica 1M</a> Amanda, Daniel, José Pereira e Ketlly.
        </div>
        <!-- your footer here -->
      </div>
    </footer>
  </div>
</div>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</body>

</html>