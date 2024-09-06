<?php $this->assign('title','Login'); ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
clearstatcache();
use Cake\Routing\Router;
echo $this->Html->css("/bootstrapformhelpers/css/bootstrap-formhelpers.css");
echo $this->Html->script("/bootstrapformhelpers/js/bootstrap-formhelpers-phone.js");

$route = \Cake\Routing\Router::url('/');
echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken'));
?>


<section style="height: 800px; background: #fff;">
  <div class="container py-1 h-300">
    <br><br>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-8">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <div class="col-md-6" align="left" style="max-width: 100% !important;" align="center">
                        <?php echo $this->Html->image('logo.jpeg', array('class' => 'img-responsive','alt'=>'liga', 'title' => "Liga", 'style'=>"padding-top:60px; padding-bottom:8px; padding-left:1px; color:white; max-height: 500px; min-width: auto;"));
                         
                         ?>
              </div>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <?= $this->Form->create(null, ['name'=>'formulario','class'=>'form-group']) ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">Iniciar sesión</span>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="exampleInputEmail1">Email</label>
                    <input type="text" placeholder="" autocomplete="off" name="username"class="form-control form-control-lg" />
                    
                  </div>

                  <div class="form-outline mb-4">
                    <label for="exampleInputPassword1" class="text">Contraseña</label>
                    <input type="password" placeholder="" autocomplete="off" name="password" class="form-control form-control-lg" />
                    
                  </div>

                  <div id="caja1" class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Ingresar</button>
                  </div><br>

    
               
                <?= $this->Form->end() ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div style="display: none;" id="RecUsuPas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Recuperación de usuario y password</h4>
                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="fas fa-times"></i></button>
            </div>
           <!-- <form method="post"  name="recoverform" id="recoverform" style="margin: 0;" accept-charset="utf-8" action="<?php echo Router::url(['controller' =>'users', 'action' =>'recovery'], true)?>" >-->
            <?= $this->Form->create(null, ["url"=>["action"=>"recovery"], "name"=>"recoverform", "id"=>"recoverform"]) ?>

                <fieldset>
                    <div class="modal-body"> 
                        <?php
                        echo '<label>Por favor introduce tu correro registrado previamente:</label>';
                        /*echo $this->Form->input('rfc',['class'=>"form-control",'label'=>'RFC','style'=>'width:80%;','onfocusout'=>"this.value=this.value.toUpperCase();", 'required'=>true]);*/
                        echo $this->Form->input('username',['class'=>"form-control",'label'=>'Email','style'=>'width:80%;','placeholder' => 'ejemplo@mail.com','id'=>'username', 'onfocusout'=>'return validarEmail(value);' , 'required'=>true]);
                        ?>
                    </div>
                    <div class="modal-footer center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal" onClick = "Recoverclient();">Recuperar</button>
                    </div>
                </fieldset>
            <!--</form>-->
            <?php
             echo $this->Form->end();
            ?>
        </div>
    </div>
</div>
<?php $URL= $this->Url->build('/'); ?>

<script type="text/javascript">

 var route = '<?= $route ?>';
 var csrfToken = $('meta[name="csrfToken"]').attr('content');

  $(document).ready(function() {
    $(".loader").fadeOut("slow");   
    $(".loader").hide();
  })

    function Recuperar(){
        $("#RecUsuPas").modal(); 
    }
    
function Recoverclient(){

    var email = document.getElementById("email").value;
   

    console.log(email);
    

    if (email=='') {
      swal({ title: "Atención!!", text: '<span>Por favor introduce E-mail registrado</span>', type: "warning",  confirmButtonColor: "#098CD2", confirmButtonText: "Aceptar", closeOnConfirm: false , html: true });
    }
    else{
      swal({
          title: "Recuperación!!",
          text: "¿Estas seguro de recuperar la contraseña?",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#16BA0A",
          closeOnConfirm: false,
          showLoaderOnConfirm: true
        }, function () {
          $.ajax({
            url:  route+'Users/locateuser',
            type:'POST',
            data: jQuery.param({_csrfToken: csrfToken,em: email}),
            success: function(result){
              //console.log(result);
              var nueva =jQuery.parseJSON(result);
              //console.log(nueva);
              nueva = nueva[0];
              var output = jQuery.parseJSON(nueva);
              console.log(output);
              if(output.length!=0){
                swal({
                    title: "Usuario encontrado!!",
                    text: "Recibiras un correo con tu usuario y password.",
                    type: "success",
                    confirmButtonColor: "#16BA0A",
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true 
                  }, function(){ document.recoverform.submit();}
                );
              }
              else{
                swal({ title: "Atención!!", text: "Usuario no encontrado! \n\nEs probable que no este bien escrito el RFC o el Email \n, Intente de Nuevo", type: "warning", confirmButtonColor: "#098CD2", confirmButtonText: "Aceptar",   closeOnConfirm: false , html: true });
              }
            },
            error: function(){
              alert("error");
            }
          });
        }
      );
    }
  }
</script>