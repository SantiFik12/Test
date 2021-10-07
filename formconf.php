<?php


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if (isset($_POST['email'])) {$email = $_POST['email'];} else {$email = '';}
    $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
    } else {
    echo "E-mail адрес " . $sanitized_email . " указан неверно<br>";
    }

    if(!preg_match("/^[0-9]{9,9}+$/", $_POST['phone'])) echo ("Телефон задан в неверном формате");
    $_POST['phone'] = "375".$_POST['phone'];
    ?>
    <br>

    Здравствуйте, <?php echo $_POST['name']; ?>
    Ваш Email <?php echo $sanitized_email; ?>
    Ваш Телефон <?php echo $_POST['phone']; ?>