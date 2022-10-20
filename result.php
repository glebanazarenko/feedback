<?php
  include('header.html');
?>

<body>
    <main>
        <form action="index.php" method="POST" class="text" style="position: absolute; left: 40%;top:25%; width: 45%;">
            <label for="last_name">Фамилия <br><br><em></em></label>
            <input id="last_name" name="last_name" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>"><br>
            <label for="first_name">Имя <br><br><em></em></label>
            <input id="first_name" name="first_name"
                value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>"><br>
            <label for="second_name">Отчество <br><br><em></em></label>
            <input id="second_name" name="second_name"
                value="<?=isset($_POST['second_name'])?$_POST['second_name']:''?>"><br>
            <?php if (isset($_POST['file']) && $_POST['file'] != '') echo '<p><span style="margin-left: 30%">' . $_POST['file'] . '</span></p>';?>
            <label><br>
                <input type="radio" name="radio-test" value="1" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '1') { 
                echo 'checked';
              }
              ?>>
                Друзья
            </label>
            <label><br>
                <input type="radio" name="radio-test" value="2" <?php 
		          if (!empty($_POST['radio-test']) and $_POST['radio-test'] === '2') { 
                echo 'checked';
              }
              ?>>
                Соцсети
            </label>
            <div class="text" style="position: absolute; width: 40%; height: 10%;"></div><br><br><br>
            <p><input type="submit" class="button_main" value="   Заполнить повторно   "></p>
        </form>

        <div class = "text" style = "position: absolute;color: black; left: 35%;top:70%; width: 40%; height: 10%;"><?php if (isset($_POST['file1']) & $_POST['file1'] != '') echo 'Вы приложили следующий файл: '.$_POST['file1']; ?> </div>
    </footer>
  </body>
  </html>

    </main>
</body>