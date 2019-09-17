<footer class="fh5co-footer" id="footer">
<img class="footer_back" src="assets/img/footer.png" alt="">
        <div class="container" id="contact">
            <div class="row footer_pad">
                <div class="col-xl-6">
                    <h2 class="footer_title">СВЯЗЬ С НАМИ</h2>
                    <p class="footer_title_1 footer_title_3">
                        Пишите, если у Вас остались вопросы
                    </p>
                    <a href="mailto:ns@anoasi.com">
                    <p  class="footer_title_1">
                        <span class="email"><img src="assets/img/at.png"
                                alt="email icon" /></span>ns@anoasi.com
                    </p>
                    </a>
                    <p  class="footer_title_2">
                        <span class="phone"><img src="assets/img/telephone.png" alt="phone icon" /></span>Руководитель проекта <br> <span style="padding-left: 58px;">Владимир Шульгин <br> 
                        <span style="padding-left: 58px;">+7 (915) 275 69 69</span></span>
                    </p>
                    <a href="https://vk.com/agenstvoasi" target="_blank">
                    <p  class="footer_title_2 footer_title_2_2">
                        <span class="phone"><img src="assets/img/vk.png" alt="phone icon" /></span>@agenstvoasi
                    </p>
                </a>
                    <a class="btn btn-primary btn_main_footer" href="#map" role="button">Стать участником</a>
                </div>

                <div class="col-xl-6">
                    <div class="form-box">
                        <h3 class="footer_form_title">Если у вас остались вопросы,<br> напишите нам</h3>
                        <div class="table">
                            <form action="/footerform" method="POST">
                            {{ csrf_field() }}
                            <tr>
                                <td><input type="text" name="name123" class="form-control form1" placeholder="Имя" required>
                                </td>

                                <td><input type="email" name="email" class="form-control form2" placeholder="E-mail" required>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><textarea name="mantext" class="form-control form3"  placeholder="Ваше сообщение" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <div class="row">
                                <div class="col-xl-12" style="padding-left: 70px; text-align: center;">
                                    <button type="submit" class="btn_footer_submit">
                                        ОТПРАВИТЬ
                                    </button>

                                </div>
                                </div>
                            </tr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="copy">Сайт разработан за счет средств Гранта (субсидии), предоставленных ФГБУ «Роспатриотцентр» на проведение мероприятий по содействию патриотическому воспитанию граждан Российской Федерации.</p>
    </footer>