<?php
    mail('contact@commitleaners.com', $_POST['name'],$_POST['pname'],$_POST['email'],$_POST['mobile'],$_POST['alt_mobile'],$_POST['country'],$_POST['tuition'],$_POST['classtype'], $_POST['subjects'],$_POST['description']);
?>
<p>Thanks for posting your details with us.We will contact you soon.</p>
