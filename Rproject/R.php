<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="register.php" method="POST" class="form">
    <div class="input-box">
        <input type="text" name="full_name" placeholder="Enter full name" required />
    </div>
    <div class="input-box">
        <input type="email" name="email" placeholder="Enter email address" required />
    </div>
    <div class="input-box">
        <input type="password" name="password" placeholder="Enter password" required />
    </div>
    <div class="column">
        <div class="input-box">
            <input type="number" name="phone" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
            <input type="date" name="dob" required />
        </div>
    </div>
    <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
            <div class="gender">
                <input type="radio" id="check-male" name="gender" value="Male" checked />
                <label for="check-male">Male</label>
            </div>
            <div class="gender">
                <input type="radio" id="check-female" name="gender" value="Female" />
                <label for="check-female">Female</label>
            </div>
            <div class="gender">
                <input type="radio" id="check-other" name="gender" value="Other" />
                <label for="check-other">Prefer not to say</label>
            </div>
        </div>
    </div>
    <button type="submit">Submit</button>
    <p>Already have an account? <a href="L.php">Login</a></p>
    </form>
    </section>
  </body>
</html>