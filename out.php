<?php
require_once 'connection.inc.php';
require_once 'header.php';
?>


<div class="form-area">
    <h1>Unsubscribe our newsletter</h1>

    <div class="card">
        <form action="unsubscribe.php" method="post">
            <div class="col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-warning" value="subscribe">Unsubscribe</button>
                </div>
            </div>
    </div>

    </form>
</div>