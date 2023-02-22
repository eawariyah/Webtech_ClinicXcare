<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  >
    <img src='assets/logo.jpg' id='logo'>
    <p id='welcomeBack'><b>Add Patients</b></p>
    <h5 id='userType'>Admin</h5>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>
    <div class=emailSection>
      <input type="email" id="email" name="email" placeholder="Email" /><br>
    </div><br>

    <div class='passwordSection'>
      <input type="password" id="password" name="password" placeholder="Password"
        oninvalid="this.setCustomValidity('Password can not be blank')" oninput="this.setCustomValidity('')" /><br>
   
    </div>


    <input id="signIn" type="submit" value="Sign In"><br>
    <p id='noAccount'>Don't have an account? Sign Up <a id='link' href='index.html'>here</a></p>
  </form>
</body>
</html>