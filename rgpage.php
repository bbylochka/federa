<?php
include("inc/header.php")
?>
<div class="container">
<div class="container">
<h1 class="text-center ">Регистрация</h1>
<form class="form1" action="/admin/controllers/registration.php" method="post">
<div class="mb-3">
    <label for="surname" class="form-label">ФИО</label>
    <input type="text" class="form-control" id="surname" name="surname"  aria-describedby="surname">
    <div class="invalid-feedback">
        Поле обязательно для заполнения.
    </div>
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login" aria-describedby="login">
    <div class="invalid-feedback">
        Поле обязательно для заполнения.
    </div>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Эл. почта</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
    <div class="invalid-feedback">
        Поле обязательно для заполнения.
    </div>
  </div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password"  name="password" minlength="6">
    <div class="invalid-feedback">
        Поле обязательно для заполнения и должно содержать не менее 6 символов.
    </div>
  </div>
  <div class="mb-3">
    <label for="password-repeat" class="form-label">Повторите пароль</label>
    <input type="password" class="form-control" id="password-repeat" name="password-repeat">
    <div class="invalid-feedback">
        Поле обязательно для заполнения и должно содержать не менее 6 символов.
    </div>
</div>
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <div class="register-link">
                <p>Уже есть аккаунт? <a href="vhod.php">Войти!</a></p>
            </div>
        </form>
    </div>
</div>
    
<?php
include("inc/footer.php")
?>