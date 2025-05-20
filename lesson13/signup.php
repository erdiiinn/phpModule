<?php include("header.php"); ?>

    <div class="signin">

        <form action="register.php" method="post" class="form-signin d-flex flex-column justify-content-center align-items-center h-100" >
             
            <h1 class="h33 mb-3 font-weight-normal"> Please sign up</h1>

            <label for="inputEmail" class="sr-only"> Name </label>
            <input type="text" name="inputEmail" id="form-control" placeholder="name" name="name" required autofocus>

            <label for="inputEmail" class="sr-only"> Surname </label>
            <input type="text" name="inputEmail" id="form-control" placeholder="surname" name="surname" required autofocus>

            <label for="inputEmail" class="sr-only"> Username </label>
            <input type="text" name="inputEmail" id="form-control" placeholder="username" name="username" required autofocus>

            <label for="inputEmail" class="sr-only"> Email </label>
            <input type="email" name="inputEmail" id="form-control" placeholder="email" name="email" required autofocus>

            <label for="inputEmail" class="sr-only"> Password </label>
            <input type="password" name="inputEmail" id="form-control" placeholder="password" name="password" required autofocus>

            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"> Sign Up </button>
            
        </form>
    </div>

    <?php include("footer.php"); ?>