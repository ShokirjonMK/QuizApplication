<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
         echo $this->Html->meta('icon');
         echo $this->Html->css('bootstrap');
         echo $this->Html->css('bootstrap-responsive');
         echo $this->Html->css('select2');
         echo $this->Html->css('style');
         echo $scripts_for_layout;
    ?>
</head>
<body scroll="no">
	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="nav-collapse">
                    <a class="brand" href="#">&nbsp;</a>
                    <a class="brand" href="#">Quiz App</a>
                    <ul class="nav pull-right">
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <br /><br /><br /><br />
        <?php echo $this->Session->flash(); ?>
    	<?php echo $content_for_layout; ?>
    </div>
    <?php 
        echo $this->Html->script('jquery-1.9.1');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('common');
        echo $this->Html->script('jquery.validate.min');
        echo $this->Html->script('bootstrap-alert');
        echo $this->Html->script('select2');
        //echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js');
        echo $this->Html->script('oauthpopup');  
   ?>
   <script type="text/javascript">
$(document).ready(function(){
    $('#facebook').click(function(e){
        $.oauthpopup({
            path: 'http://local.lh/cakeapp/facebook_cps/login',
            width:600,
            height:300,
            callback: function(){
                window.location.reload();
            }
        });
        e.preventDefault();
    });
});
</script>
</body>
</html>
