<?php include('head.php'); ?>
<div>
    <article>
        <div id="formreg"><form class="form-reg" method="post" action="<?= APP_W . 'register/register'; ?>">
                Username<input class="input" type="text" name="username"></input><br>
                Name<input class="input" type="text" name="name"></input><br>
                Lastname<input class="input" type="text" name="lastname"></input><br>
                Password<input class="input" type="text" name="password"></input><br>
                Email<input class="input" type="text" name="email"></input><br>
                Country<input class="input" type="text" name="country"></input><br>
                <input type="submit" value="Done!" class="btn btn-default"></input>
            </form></div>
    </article>
</div>

<?php include('footer.php'); ?>