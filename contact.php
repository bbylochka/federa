<?php
include("inc/header.php")
?>

<p></p>

<h1 class="text-center">Контакты</h1>

        

        <p class="text-center">Адрес: 634570, Томская область, Томский район, с. Богашево, ул. Новостройка, д. 20А, офис 1</p>

        <div class="text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d276.2995295183288!2d85.12975905242473!3d56.35749886510879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4326f1942f6d0b3f%3A0x9977b5d489fabae7!2z0YPQuy4g0J3QvtCy0L7RgdGC0YDQvtC50LrQsCwgMjDQsCwgMSwg0JHQvtCz0LDRiNC10LLQviwg0KLQvtC80YHQutCw0Y8g0L7QsdC7LiwgNjM0NTcw!5e0!3m2!1sru!2sru!4v1710126846588!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <p class="text-center">Телефон/факс: +8 (903) 952-25-00</p>
        <p class="text-center">Эл.почта: poda.tomsk@mail.ru</p>


        <p class="text-center">Чтобы записаться на занятия или задать интересующие вопросы, свяжитесь с нами любым удобным для вас способом или заполните форму обратной связи.</p>

        
        <div class="container mt-5 ">
    
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ваш Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@mail.com">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
                <label for="tel" class="form-label">Телефон</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="+7 (999) 999-99-99">
            </div>
        <div class="mb-3">
            <label for="name" class="form-label">Как к вам обращаться?</label>
            <input type="name" class="form-control" id="name" required placeholder="Иванов Иван Иванович">
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Сообщение</label>
            <textarea class="form-control" id="comment" rows="3" required placeholder="Моё сообщение"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>


     <p></p>

<?php
include("inc/footer.php")
?>