<?php
/** @var string $class */
?>

<section class="write-to-us js-section <?= $class ?>" id="write-to-us">
    <div class="content-container">
        <div class="write-to-us__content">
            <div class="write-to-us__picture">
                <img src="images/logo-big.svg" alt="" loading="lazy">
            </div>
            <div class="write-to-us__header">
                <h2 class="write-to-us__title">
                    Напишите нам
                </h2>


                <div class="write-to-us__desc">
                    И&nbsp;мы&nbsp;вышлем Вам прайс
                    на&nbsp;всю нашу продукцию
                </div>
            </div>

            <?php if(!isset($_POST['fio']) and !isset($_POST['email']) and !isset($_POST['message'])){?>
                <form class="form write-to-us__form" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
                    <input class="form__input form__input--half" type="email" placeholder="Email" name="email" required>
                    <input class="form__input form__input--half" type="text" placeholder="Phone" name="phone" required>
                    <textarea class="form__input form__input--textarea" placeholder="Message" name="message" required></textarea>
                    <button type="submit" class="form__btn btn btn--red">Send message</button>
                </form>
            <?php } else {
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $message= $_POST['message'];

                $phone = htmlspecialchars($phone);
                $email = htmlspecialchars($email);
                $message = htmlspecialchars($message);

                $phone = urldecode($phone);
                $email = urldecode($email);
                $message = urldecode($message);

                $phone = trim($phone);
                $email = trim($email);
                $message = trim($message);

                if (mail("pivovarov.artyom1@gmail.com",
                    "Заявка с сайта", "Телефон:".$phone.". E-mail: ".$email.". Сообщение: ".$message,
                    "From: example2@mail.ru \r\n")) {
                    echo "Cообщение успешно отправлено!";
                } else {
                    echo "При отправке сообщения возникли ошибки. Попробуйте позже.";
                }
            } ?>
            <img class="write-to-us__logo" src="images/logo.svg" alt="">
        </div>
    </div>
</section>
