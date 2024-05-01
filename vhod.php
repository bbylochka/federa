<?php
include("inc/header.php")
?>

<section class="page" style="margin-left: 15%; margin-right: 15%;">
        <section class="page" style="margin-left: 35%; margin-right: 35%;">
<div class="container p-3">
<h1 class="text-center ">Вход</h1>
<form action="/admin/controllers/login.php" method="post">
  <div class="mb-3">
    <label for="login" class="form-label">Логин</label>
    <input type="text" class="form-control" id="login" name="login" aria-describedby="login">
    <div class="invalid-feedback">
        Поле обязательно для заполнения.
    </div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Пароль</label>
    <input type="password" class="form-control" id="password" name="password" minlength="6">
    <div class="invalid-feedback">
        Поле обязательно для заполнения и должно содержать не менее 6 символов.
    </div>
    </div>
    <div >
  <button type="submit" class="btn btn-primary ">Войти</button>
  </div>
            <div class="register-link">
                <p>Нет аккаунта? <a href="rgpage.php">Зарегистрируйтесь!!</a></p>
            </div>
        </form>
    </div>
</div>
</section>
    </section>
<?php
include("inc/footer.php")
?>