<html>
  <head>
    <script src='https://code.jquery.com/jquery-3.2.1.js'></script>
    
  </head>

  <body>
  <h1> username:123  password:123 </h1>
    <input type="text" name="email" placeholder="Email Address">
    <input type="password" name="pwd" placeholder="Password"/>
    <input type="button" id="sendout" value="Submit">

    <script>
        $("#sendout").click(function() {
        $.ajax({
            url:"log-in.php",
            data:{
                email: $('input[name="email"]').val(),
                pwd: $('input[name="pwd"]').val()
            },
            type:"POST",

            success:function(msg){
                $('#amount').html(msg);
            },

            error:function(xhr,ajaxOptions,thrownError){
                console.log("error");
            }
        })
    });
    </script>
	

    	<p id="amount"> </p>
  </body>
</html>



