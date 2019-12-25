<!-- Форма регистрации -->

<form action="#" class="form">

    <div class="container form-white">
        <div class="spacer"></div>
        <h3 class="text-center text-Bubblegum">Зареїструвати улюбленця як потенційного донора</h3>
        <div class="single-post">
            <p>Информация, которую вы добавляете сюда, может быть распространена среди ветеринаров, нуждающихся в костях, нуждающихся в донорстве крови домашних животных. Обычно ветеринары запрашивают контактную информацию потенциального донора, и обычно это полезно, только если ваше местоположение и операция достаточно близки. Поэтому, если ветеринарная практика действительно свяжется с вами, скорее всего, это будет в пределах нескольких миль.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input type="name" required class="form-control" id="name" placeholder="Ім'я" >
                <input type="number" required class="form-control" id="phone" placeholder="Номер телефону">
                <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Електронна пошта">
                <input type="password" required class="form-control" id="userPassword"  placeholder="Пароль">
                <div class="btn-group btn-group-toggle btn-margin btn-option " data-toggle="buttons">
                    <label class="btn btn-warning">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Чоловіча стать
                    </label>
                    <label class="btn btn-warning mar-left ml-3">
                        <input type="radio" name="options" id="option2" autocomplete="off"> Жіноча стать
                    </label>
                </div>

            </div>

            <div class="col-md-6">
                <div class="btn-margin">
                    <div>
                        <select class="form-select" name="list1">
                            <option>Вік</option>
                            <option>Около 1</option>
                            <option>Около 2</option>
                            <option>Около 3</option>
                            <option>Около 4</option>
                            <option>Около 5</option>
                            <option>Около 6</option>
                            <option>Около 7</option>
                            <option>Около 8</option>
                            <option>Около 9</option>
                            <option>Около 10</option>
                            <option>Около 11</option>
                            <option>Около 12</option>
                        </select>
                    </div>
                </div>

                <div class="btn-margin">
                    <div>
                        <select class="form-select" name="list1">
                            <option>Порода</option>
                            <option>Cенбернар</option>
                            <option>Боксер</option>
                            <option>Колли</option>
                        </select>
                    </div>
                </div>


                <div class="btn-margin">
                    <div>
                        <select class="form-select" name="list1">
                            <option>Група крові якщо відомо</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>

                <div class="btn-margin">
                    <div>
                        <select class="form-select" name="list1">
                            <option>Виберіть ваше місто</option>
                            <option>Луцьк</option>
                            <option>Рівне</option>
                            <option>Ковель</option>
                        </select>
                    </div>
                </div>


                <div class="btn-group btn-group-toggle btn-margin btn-option" data-toggle="buttons">
                    <label class="btn btn-warning ">
                        <input type="radio" name="options" id="option3" autocomplete="off" checked> Кіт
                    </label>
                    <label class="btn btn-warning ml-3">
                        <input type="radio" name="options" id="option4" autocomplete="off"> Собака
                    </label>
                </div>
            </div>
            <div class="col-md-12  d-flex justify-content-center">
                <button type="submit" class="btn btn-success w-50">Зареєструватись</button>
            </div>
        </div>
    </div>
</form>