// <script type="text/javascript">
      //   function register(){
      //     var s_name=$('#s_name').val();
      //     var username=$("#username").val();
      //     var email=$("#email").val();
      //     var login=$("#login").val();
      //     var password=$("#password").val();
      //     var confpass=$("#confpass").val();
      //     var course = $("#course option:selected" ).text();
      //     var pay = $('input[name=radioName]:checked', '#myForm').val()
      //     if(s_name==""||username==""||email==""||login==""||password==""||confpass==""||pay==""){
      //       $(".error").html("Заполните все поля!");
      //     }else{
      //       if (!validateEmail(email)){
      //         $(".error").html("Введите правильный email");
      //       }else{
      //           if(password==confpass){
      //         $.ajax({
      //           type:'POST',
      //           url:'register.php',
      //           data:'&s_name='+s_name+'&username='+username+'&login='+login+'&email='+email+'&password='+password+"&course="+course+"&pay="+pay,
      //           success: function (data){
      //             if(data=="OK"){
      //               console.log("CCOOOLLL!!!");
      //             }else{
      //               $(".error").html(data);
      //             }
      //           }
      //         });
      //       }else{
      //         $(".error").html("Пароли не совпадают");
      //         }
      //     }
      //   }
      // }
      //   function validateEmail(email){ 
      //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
      //     return re.test(email); 
      //   } 
//       function login(){
//       	var email = $("email").val()
//       	var password=$("#password").val();
//       	if (password!=)
//       }
// </script>