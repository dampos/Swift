<!-- ________________________RECENT DEVICE SECTION _______________________-->
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots"></span>P R O F I L E<span class="carstxt"></span></h1>
	</div>
<div class="container">
  <div class="container">
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          
          
          
        </div>
      </div>
      
      <!-- edit form column -->
      
          <a class="panel-close close" data-dismiss="alert"></a> 
          </div>
        <form method="post" action="<?php echo base_url();?>index.php/users/account" class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="name" value="<?php echo $user['name']; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" value="<?php echo $user['email']; ?>" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" value="" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="confirm_password" value="" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input class="btn btn-primary" value="Save Changes" type="submit">
              <span></span>
              <input class="btn btn-default" value="Cancel" type="reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>            
  
</div>