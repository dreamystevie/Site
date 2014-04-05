
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>*Name of Site*</title>
<link type="text/css" rel="stylesheet" href="ChatboxStyle.css" />

</head>

<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper">
     
    <div id="chatbox">
         <!--<?php include 'header.php'; ?>-->
    </div>
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <!--<input name="submitmsg" type="submit"  id="submitmsg" value="Send!" />-->
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
// $(document).ready(function(){
$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'index.php?logout=true';}
    }      
});
</script>
<?php
}
?>
</body>
</html>