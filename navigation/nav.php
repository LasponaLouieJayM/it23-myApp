<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand w-75 p-3" href="#">DevBugs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a onClick="to_dashboard()" style= "cursor: pointer"  class="nav-link active " aria-current="page#">Home</a>
        </li>
         <li class="nav-item">
          <a onClick="to_aboutUs()" style= "cursor: pointer" class="nav-link text-light bg-dark " >About Us</a>
        </li>
        <li class="nav-item">
          <a onClick="to_Settings()" style= "cursor: pointer"  class="nav-link active " aria-current="page#">Settings</a>
        </li>
      </ul> 
    </div>    
  </div>
</nav>
<script>
  function to_aboutUs(){
  $.post("pages/About us/about_us_Main.php", {}, function (data){
 $("#contents").html(data);
    });    
}
</script>
<script>
  function to_Settings(){
  $.post("pages/Settings/settings_Main.php", {}, function (data){
 $("#contents").html(data);
    });    
}
</script>