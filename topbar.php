<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: transparent;

}
</style>
<nav class="navbar navbar-light fixed-top bg-success" style="padding:0">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  		  <h1></h1>
  		</div>
      <div class="col-md-4 float-left text-white" style="font-family: poppins;"> 
       
        <large><b>College Fees Management System</b></large>
      </div>
	  	<div class="float-right">
        <div class=" dropdown mr-5">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Account Settings</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
              </div>
        </div>
      </div>
  </div>
  
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
</script>