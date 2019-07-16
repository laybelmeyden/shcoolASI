<footer class="container-fluid fh5co-footer">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>СВЯЗЬ С НАМИ</h2>
                    <p class="light">
                        Пишите, если у Вас остались вопросы
                    </p>
                    <p>
                        <span class="email"><img src="assets/img/email.png"
                                alt="email icon" /></span><b>ns@anoasi.com</b>
                    </p>
                    <p>
                        <span class="phone"><img src="assets/img/phone.png" alt="phone icon" /></span><b>+7 915 310 34 47</b>
                    </p>
                    <h3>СОЦИАЛЬНЫЕ СЕТИ:</h3>
                    <ul class="navbar-nav float-left social-links footer-social">
                        <li class="nav-item">
                            <a class="nav-link" href="https://vk.com/agenstvoasi"><i class="fab fa-vk"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="form-box">
                        <h4>Есть вопросы ?</h4>
                        <p>Напиши нам !</p>
                        <hr />
                        <table class="table table-light table-borderless">
                            <form action="/footerform" method="POST">
                            {{ csrf_field() }}
                            <tr>
                                <td><input type="text" name="name123" class="form-control" placeholder="Ваше имя" required>
                                </td>

                                <td><input type="text" name="email" class="form-control" placeholder="Ваша почта" required>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><textarea name="mantext" class="form-control" placeholder="Ваше сообщение" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ОТПРАВИТЬ
                                    </button>

                                </td>
                            </tr>
                            </form>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p>&copy;ANO ASI</p>
        </div>
    </div>