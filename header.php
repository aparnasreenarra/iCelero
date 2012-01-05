<script type="text/javascript">
function loginbox(){
if(document.getElementById('logindetails').style.display=="none"){
	document.getElementById('logindetails').style.display="block";
}else{
document.getElementById('logindetails').style.display="none";
}
}

</script>
<!-- toplevel-->

<!--<link href="css/style.css" rel="stylesheet" type="text/css" />-->
<div class="toplevel"> 

<div class="topcontainer">
    <div class="sitelogo"><a href="index.php"><img src="images/icelero_logo.png" width="197" height="50" alt="iCelero" /></a></div>
    <div class="tagline">Faster Cheaper Better Internet</div>
    
  </div>
<div class="logindetails">
         <ul>
           <li> <a href="javascript:loginbox();">Login</a>
           <div id="logindetails" style="display:none;" class="signin_popup"><form action="" name="myform">
   <p class="inputbg">
          <input name="username" id="username" value="Username" style="outline:none;" />
        </p>      
       <p class="inputbg">         
    <input name="password" type="password" id="password" value="123456" style="outline:none;" /></p>
                                    <p class="submit_btn">  <input class="submit"  id="registerButton" type="button" value="" name="submit" /></p>
                         
                      <!--    <p> <a href="#"> Forgot your password?</a></p>-->
</form></div></li></ul>
        </div>
      <!-- topcontainer-->
      
      <!-- topcontainer--></div>
<!-- toplevel-->

