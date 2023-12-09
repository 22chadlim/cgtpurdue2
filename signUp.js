function clearDefaultValue(input) {
    if (input.value === input.defaultValue) {
      input.value = "";
    }
  }

  var duplicate_message = '';

  function id_duplication() {

  var email = document.getElementById("email").value;
  $.ajax({
    url: 'check_duplicate.php', 
    type: 'POST',
    dataType: 'html',
    data: {email:email},
    success: function(response) {
      $('#duplicate_message').html(response); 
      duplicate_message = $('#duplicate_message').text();
      confirm_error();
    },
    error: function() {
      alert('Error occured');
    }
  });

  }

  function confirm_error() {
  var password = document.getElementById("password").value;
  var password_confirm = document.getElementById("password_confirm").value;
  var ID_confirm = duplicate_message;

  if (password === "" | password_confirm === ""){
    $('#password_confirm_error').html("Input your password.")
  
    }

    else {

      
    if (password === password_confirm) {
          $('#password_confirm_error').html("Password confirmed.")
          if(duplicate_message==="You can use this ID."){  
            return true;
          }
          else {
            console.log(ID_confirm);
            $('#confirm_error').html("Check your ID again.");
            return false;
          }
          
        } else {
          $('#password_confirm_error').html("Password didn't match.");
          return false;
        }
    }
}