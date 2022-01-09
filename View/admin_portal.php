<?php

session_start();
$name = $_SESSION['name'];

include "admin_header.php"
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