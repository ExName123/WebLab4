<?php
include('header.html');
$name = '';
$email = '';
$agreement = '';
    if(isset($_GET['name'])){
        $name=$_GET['name'];
        $email=$_GET['email'];
        $agreement=$_GET['agreement'];
    }
?>
<html>

<body>
    <h2 id="title-form">Форма обратной связи</h2>
    <div class="container">
        <form action="home.php" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <label class="form-additional" for="name">ФИО</label>
                <input class="input-data" name="name" id="name" type="text" value="<?php echo $name?>" required placeholder="ФИО">
            </div>

            <div class="form-group">
                <label class="form-additional" for="email">Email</label>
                <input class="input-data" id="email" type="text" value="<?php echo $email?>" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label class="form-label" for="category">Категория обращения</label>
                <select name="category" id="category">
                    <option value="proposal">Предложение</option>
                    <option value="grievance">Жалоба</option>
                </select>
            </div>

            <div class="form-group">
                <p>Как вы узнали о нас?</p>

                <div class="container-selector">
                    <input type="radio" name="selector" id="advertising" value="advertising">
                    <label class="label-selector" for="friends">Реклама в интернете</label>

                </div>
                <div class="container-selector">
                    <input type="radio" name="selector" id="friends" value="friends">
                    <label class="label-selector" for="friends">Рассказали знакомые</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="message">Текст сообщения</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите текст"></textarea>
            </div>
            <div class="form-group">
                <input checked="<?php if($agreement = 'yes') true ?>" type="checkbox" name="agreement" id="agreement" value="yes" required>
                <label for="agreement">Даю согласие на обработку данных</label>
            </div>
            <div class="form-group">
                <label class="form-label" for="attachment">Файл для отправки</label>
                <input type="file" name="attachment" id="attachment">
            </div>
            <input type="submit" value="Отправить">
        </form>
    </div>
</body>

</html>