<?php
require_once 'connection.inc.php';
require_once 'header.php';
?>

<body>

    <div class="form-area">

        <h1>Signup for our newsletter</h1>

        <div class="card">
            <form action="subscribe.php" method="post">

                <div class="col-md-6">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-warning" value="subscribe">Subscribe</button>
                </div>
        </div>
        <a href="out.php" class="unsub">unsub</a>

        </form>
    </div>


    </div>
    <?php

    require_once 'footer.php';
    ?>