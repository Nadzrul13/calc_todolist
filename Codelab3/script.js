function validateLogin() {
    // Get the values from the input fields
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();

    // Check if the fields are empty
    if (!username && !password) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "username/password kosong!"
            
          });
      return;
    }
    
    
  

    // Proceed with login if validation passes (replace this with actual login logic)
    Swal.fire({
        icon: "success",
        title: "good",
        text: "login berhasil!"
        
      });
  }