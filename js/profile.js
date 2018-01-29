$(document).ready(function(){

  var email1=$('#email1').val();
  $('#email1').keyup(function(){
    var email=$('#email1').val();
    if(email!=email1)
    $.ajax({
      url:'fetch_update_user_data.php',
      type:'POST',
      data:{email:email},
      datatype:'text',
      success:function(data)
      {
        if(data=='<p style="color:red;" > Email not Available !</p>')
          $('#rresult').html(data);
          else {
            $('#rresult').html(' ');
          }
      }
    });

  });





  $('#update').click(function(){
    var email=$('#email1').val();
    var pswd=$('#pwd1').val();
    var cpswd=$('#cpwd1').val();
    var uname=$('#username1').val();

    expr = /@/;

    if(email=='' ||pswd==''||uname==''||cpswd=='')
    {
      $('#rresult').html('<p style="color:#ff00b8; " class="animated shake" >All Fields are required !</p>');
    }
    else if(email.search(expr)==-1)
    {
      $('#rresult').html('<p style="color:#ff00b8; " class="animated shake" >Enter Vaild Email !</p>');

    }
    else if(pswd!=cpswd)
    {
      $('#rresult').html('<p style="color:#ff00b8; " class="animated shake" >Password does not match!</p>');
    }
    else if(pswd.length < 6)
    {
      $('#rresult').html('<p style="color:#ff00b8; " class="animated shake" >Password must be of at least 6 digits!</p>');
    }
    else {
  $.ajax({
    url:'fetch_update_user_data.php',
    type:'POST',
    data:{email:email,pswd:pswd,cpswd:cpswd,uname:uname},
    datatype:'text',
    success:function(data)
    {
      if(data=='<p style="color:green;" class="animated shake"> Your Information Updated !</p>')
      {
        $('#rresult').html(data);
        window.setTimeout(function(){
       window.location.href = "index.php";
      }, 1000);


      }
      else {
        $('#rresult').html(data);

      }
    }
  });
}

  });
});
