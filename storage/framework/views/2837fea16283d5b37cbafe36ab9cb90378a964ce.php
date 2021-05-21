 
<!DOCTYPE html>
<html lang="ja">
<head>
	

   	<meta charset="utf-8">
	<meta http-equiv="content-language" content="ja">
	<title>新規口座開設 | good-enough</title>
		

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e($currentPath); ?>/../../../assets/img/tn-favicon.ico.png">
	<link rel="stylesheet" type="text/css" href="<?php echo e($currentPath); ?>/../../assets/css/app-ver=0.4.3.css">
	<link rel="stylesheet" href="<?php echo e(asset("css/header2.css")); ?>">

	<link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e($currentPath); ?>/../../assets/css/custom-ver=0.4.3.css">

	
	
<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/jquery.min-ver=3.3.1.js"></script>
<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/popper.min-ver=1.14.4.js"></script>
<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/bootstrap.min-ver=4.1.3.js"></script>
<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/bootstrap-select.min-ver=1.13.2.js"></script>



	<!-- TrustBox script --> <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> <!-- End TrustBox script -->
		</head>
<body>


<style type="text/css">
   
   .op_menu, .clo_menu, .control-menu{
   	display:none;
   }

  	@media (max-width: 995px){

  		.siteTopSection{
  			background: white;
  		}

  		.control-menu{
  			display: block;
  			position: relative;
  			float: right;
  		    top: 20%;
  		    font-size: xx-large;

  		}

        .jk{
        	top: 300%;
        	position: fixed;
        	margin: 0;
        	padding: 0;
        	left: 0;
        	visibility: block;

        }
  		.siteTopSection ul{		
  			margin: 0;
        	padding: 0;
        	left:0;
  			flex-direction: row;
  			position: fixed;		

  		}
  </style>

<style type="text/css">
	
.modal.custom .modal-dialog {
    width:350px;
    position:fixed;
    right: 0;
    top: 0;
    margin:0;
 }

@media (max-width: 400px){
  .modal.custom .modal-dialog {
    width:70%;
    position:fixed;
    top: 0;
    right:10px;
    margin:0;
 }
}
</style>

	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_responce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="modal custom fade" id="sidebar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">       
      <div class="modal-body">
      	 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: black; font-size: xx-large;">&times;</span>
         </button><br><br>
				
								 
								 
							  
					<a class="btn-default h-100 center-with-flex" href="https://www.good-enough.com/ja/accounts/funding?ref=latam" target="_blank">入出金</a></li>
			
		
            </div>
         </div>
       </div>
    </div>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="contactModalLabel">お問い合わせ</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<form method="POST" id="modalContactForm" action="?processform=support&formtype=contact" class="ajax needs-validation" novalidate>
				<div class="form-group">
					<label for="contactFormName"><span class="text-primary">*</span>お名前(ローマ字)</label>
					<input type="text" class="form-control" name="user_message[name]" id="contactFormName" data-custom-user-form="name" placeholder="お名前(ローマ字)" required>				    
				</div>
				<div class="form-group">
					<label for="contactFormEmail"><span class="text-primary">*</span>Eメールアドレス</label>
					<input type="email" class="form-control" name="user_message[email]" id="contactFormEmail" data-custom-user-form="email" placeholder="Eメールアドレス" required>				    
				</div>
								<div class="form-group">
					<label for="contactFormMessage"><span class="text-primary">*</span>お問い合わせ内容</label>
					<textarea class="form-control" name="user_message[message]" id="contactFormMessage" rows="3" required></textarea>
				</div>
				<button type="submit" class="btn-primary" style="float:left;">送信する</button>
								<input type="hidden" name="backend[form_link]" value="https://www.good-enoughlatam.com/ja/ja/forms/accounts/">
				<input type="hidden" name="backend[user][email]">
				<input type="hidden" name="backend[user][name]">
				<input type="hidden" name="gCaptchaAction" value="accountstradingaccounts">
				
				<div class="alert responseMessage alert-primary alert-dismissible fade show mt-4 d-none" role="alert">
					<span class="message">Message</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
			</form>
		</div>
	</div>
</div>
</div>

			
<link rel="stylesheet" type="text/css" href="<?php echo e($currentPath); ?>/../../assets/css/openAccountStyle.css">
<div class="container-fluid">
	<section class="row">
	  <section class="col-md-12 title-cuenta-real">
	    <div class="container">
	      <div class="row mt-5">
	        <!-- <div class="col-sm-8 center-with-flex">
	        	<img src="https://www.good-enoughlatam.com/ja/assets/img/good-enoughSymbol.svg" class="mx-auto d-block mb-2 col-4">
	        </div> -->
	        <div class="col-sm-12 center-with-flex mt-6">
	              <h1 class="text-white text-center"><strong>新規口座開設</strong><br>good-enoughの口座開設はカンタンです</h1>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- <section class="row">
	      <div class="container">
	          <div class="row introductionTeam">
	              <div class="col-12">
	                  <br><h1 class="text-center">Abrir Cuenta</h1>
	              </div>
	              <div class="col-md-4 offset-4"><hr><br></div>
	              <div class="col-12">              
	                  <p class="text-center">Nuestros formularios en línea son fáciles de diligenciar.</p>
	                  <p class="text-center">En good-enough una cuenta Real puede ser abierta en minutos.</p>
	                  <p class="text-center">Proveemos seguridad y privacidad cuando su información es transmitida on-line por medio de métodos avanzados de encriptación de datos, procedimientos de autenticación, realizamos pruebas de seguridad periódicas a nuestra red y a su nueva cuenta.</p>
	                  <p class="text-center">El método más conveniente para enviar su aplicación, Haga click en el siguiente link:</p>
	                  <br><br>
	              </div>
	          </div>
	      </div>
	  </section> -->
	</section>

	<div class="row content-accounts">
	    <div class="col-md-12">
		    <div class="container">
		        <div class="row my-4 content-card center-with-flex">
		            <div class="col-md-3 p-3 card mb-5 shadow">
		                <div class="accountType">
		                		<div class="icon-s100 center-with-flex text-primary p-2">
		                    	<img src="<?php echo e(asset('img/icon/register_person.png')); ?>" style="width:75px;height:auto;" />
		                    </div>
		                    <a href="<?php echo e(route('individual')); ?>" target="_self" rel="nofollow">
		                        <button class="btn-lg btn-primary_blue col-md-12 mt-4">good-enough 個人口座</button>
		                    </a>
		                </div>
		            </div>

		            

		             <div class="col-md-3 offset-md-1 p-3 card mb-5 shadow">
		                <div class="accountType">
		                    <div class="icon-s100 center-with-flex text-primary p-2">
		                    	<img src="<?php echo e(asset('img/icon/register_company.png')); ?>" style="width:75px;height:auto;" />
		                    </div>
		                    <a href="<?php echo e(route('corporate')); ?>" target="_self" rel="nofollow">
		                        <button class="btn-lg btn-primary_blue col-md-12 mt-4">good-enough 法人口座</button>
		                    </a>
		                </div>
		            </div>
		            		        </div>
		        
		        <div class="row text-center p-text">
		        	<div class="col-md-12">
				    		<p>弊社ではお客様の個人情報等の漏洩を防止するため最先端のエンクリプションとネットワークレベル認証での安全管理措置と監視を行っております</p>
				    	</div>
				    </div>
		    </div>
	    </div>
	</div> 
	
</div>
</div>

	
	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	

	<!-- Icons -->
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/feather_icons/feather.min-ver=4.7.3.js"></script>
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/app-ver=0.4.3.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	

</body>
</html><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/account.blade.php ENDPATH**/ ?>