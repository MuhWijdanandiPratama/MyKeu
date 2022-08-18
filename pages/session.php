<?php
session_start();
if (!isset($_SESSION['username'])) { ?>
    <script type="text/javascript">
        // alert('Username atau Password Salah!');
        window.location.assign('sign-in.php');
    </script>
    <?php
}
?>