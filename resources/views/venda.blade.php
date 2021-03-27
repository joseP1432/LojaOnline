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
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="material-icons">home</i>
              <p>Página Inicial</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('produto')}}">
              <i class="material-icons">shopping_bag</i>
              <p>Produtos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('fornecedor')}}">
              <i class="material-icons">shopping_cart</i>
              <p>fornecedores</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="{{route('venda')}}">
              <i class="material-icons">request_page</i>
              <p>vendas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#" onclick="event.preventDefault(); getElementById('form-sair').submit()">
              <i class="material-icons">shopping_bag</i>
              <p>Sair</p>
            </a>
            <form method="POST" action="{{route('logout')}}" id="form-sair">
              @csrf
            </form>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Vendas</a>
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
            <a href="{{route('cad-venda')}}" class="btn btn-info btn-lg btn-block">
              <span class="material-icons">add</span> Adicionar uma nova venda <span class="material-icons">add</span>
            </a>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Vendas</h4>
                  <p class="card-category"> Controle de vendas</p>
                </div>
                <div class="card-body">
                	
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-primary" width="10%">
                       <th class="text-center" width="10%">
                        Produto
                      </th>
                      <th class="text-center" width="10%">
                        Cliente
                      </th>
                      <th class="text-center" width="10%">
                        Quantidade
                      </th>
                      <th class="text-center" width="20%">
                        Total
                      </th>
                      <th class="text-center" width="10%">
                        Ação
                      </th>
                    </thead>
                    @foreach ($vendas as $venda)
                    @foreach ($prod as $produto)
                    @if($venda->VEN_PRO_CODIGO == $produto->id)
                    <tbody>
                      <tr>
                        <td class="text-center">
                          {{$produto->PRO_NOME}}
                        </td>
                        <td class="text-center">
                          {{$venda->VEN_CLIENTE}}
                        </td>
                        <td class="text-center">
                          {{$venda->VEN_QUANTIDADE}}
                        </td>
                        <td class="text-center">
                          @if ($venda->VEN_STATUS == "Pago")
                          {{$venda->VEN_QUANTIDADE*$produto->PRO_PRECOVENDA}}
                          @elseif ($venda->VEN_STATUS == "Não Pago")
                          Não pago
                          @endif
                        </td>
                        <td class="text-center">
                          <a href="{{route('edit-venda', ['id' => $venda->id])}}" class="btn btn-primary btn-sm rounded"><span class="material-icons">create</span></a>
                          <form action="{{route('vendas.destroy', [$venda->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger rounded"><span class="material-icons" class="text-danger">delete_sweep</span>
                          </form>
                          
                        </td>
                      </tr>
                    </tbody>
                    @endif
                    @endforeach
                    @endforeach
                  </table>
                </div>
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





























