<?php
session_start();
require_once 'inc/connect.php';
?>
                    <?php
                    if($_COOKIE['user'] == ''):
                    ?>
                    <a class="header_btn" href="#" data-modal="#login">Войти</a>
                    <?php else: ?>
                    <nav>
                        <a class="header_btn" href="lk.php"><?=$_COOKIE['user']?></a>
                        <a href="inc/exit.php"><img src="assets/images/logout.png"></a>
                    </nav>
                    <?php endif; ?>
                <?php
                    if($_COOKIE['user'] == ''):
                ?>
                <h2 class="order_title">Для оформления заказа, необходимо авторизоваться.<a class="order_btn_not" href="#" data-modal="#login">Войти!</a></h2>
                <?php else: ?>
                                <form class="order_content" action="inc/new_order.php" method="post">
                    <div class="order_item">
                                            <p class="order_title_info">Адрес</p>
                        <div class="order_info">
                        <input type="text" name="adress" placeholder="Введите адрес"></div>
                    </div>
                    <div class="order_item">
                        <p class="order_title_info">Металл</p>
                        <div class="order_info">
                        <input type="text" name="metall_name" placeholder="Введите наименование металла">
                        </div>
                    </div>
                    <div class="order_item">
                        <p class="order_title_info">Масса(т)</p>
                        <div class="order_info">
                        <input type="text" name="metall_weight" placeholder="Введите массу">
                        </div>
                    </div>
                    <div class="order_item">
                        <button class="order_btn" type="submit">Оформить заказ</button>
                    </div>
                </form>    
                <?php endif; ?>
        <?php
        if ($_SESSION['msg']) {
        echo ('<script>alert('$_SESSION['msg']');</script>');
        }
        ?>
