<?php

session_start();
$customer_id = $_SESSION['customer_id'];
$name = $_SESSION['name'];

include "header.php"
?>
    <main>
        <article>
            <div class="welcome">
                <p>Welcome,</br>
                   <span><?php echo $name ?></span> </p>
            </div>

        </article>
    </main>
</body>
</html>