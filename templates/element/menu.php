<?php 
use Cake\Routing\Router;

$id = Router::getRequest()->getSession()->read('Users.id_user');
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<?php echo $this->Html->css("menu_style3.css"); ?>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" style="background: #9acbd0">
        <div id="dismiss" style="background: #9acbd0">
            <i class="fas fa-caret-left"></i>
        </div>

        <div class="sidebar-header" style="background: #9acbd0">
            <?php echo $this->Html->image('logo.jpeg', ['class' => 'img-responsive', 'alt' => 'FA', 'title' => 'FA', 'style' => 'padding: 10px 0 8px 50px; max-height: 100px;']); ?>
        </div>

        <ul class="list-unstyled components">
            <p>Nombre de Usuario</p>
            <li>
                <a href="#pageAdm" data-toggle="collapse" aria-expanded="false"><i class="fas fa-caret-right"></i> Administración</a>
                <ul class="collapse list-unstyled" id="pageAdm">
                    <li>
                        <a style="background:#6f999d;" href="<?= Router::url(['controller' =>'Pets', 'action' =>'index']) ?>">Mascotas</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="list-unstyled ">
            <li>
                <a class="navbar-brand" href="<?= Router::url(['controller' =>'Users', 'action' =>'home']) ?>"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li>
                <a class="navbar-brand" href="<?= Router::url(['controller' =>'Users', 'action' =>'logout']) ?>"><i class="fas fa-times-circle"></i> Cerrar sesión</a>
            </li>
        </ul>
    </nav>

    <!-- Content -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background: #6f999d;">
            <button type="button" id="sidebarCollapse" class="btn btn-info" style="background: #9acbd0">
                <i class="fas fa-align-left"></i>
                <span>Menú</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" style="color:white;">Administrador</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a style="color:white;" class="navbar-brand btn btn-sm btn-outline-success" href="<?= Router::url(['controller' =>'Users', 'action' =>'home']) ?>"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:white;" class="navbar-brand btn btn-sm btn-outline-success" href="<?= Router::url(['controller' =>'Users', 'action' =>'logout']) ?>"><i class="fas fa-times-circle"></i> Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="overlay"></div>

<script>
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({ theme: "minimal" });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
