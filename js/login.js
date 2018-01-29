$(document).ready(function(){

  $('#login').click(function(){
    var email=$('#email').val();
    var pswd=$('#pwd').val();

    if(email=='' ||pswd=='')
    {
      $('#result').html('<p style="color:#ff00b8; " class="animated shake" > You Must Enter Email and Password Both !</p>');
    }
else {
  $.ajax({
    url:'fetch_login_data.php',
    type:'POST',
    data:{email:email,pswd:pswd},
    datatype:'text',
    success:function(data)
    {
      if(data=='successs')
      {
        window.location.href="index.php";
      }
      else {
        $('#result').html(data);

      }
    }
  });
}

  });
});
