<?php 
$title = 'MyMoscow - наши контакты';
$main_img = 'wrapper-contacts';
include('head.php'); ?>
</body>
<body>
    <div class="wrapper">
        <div class="<?php echo $main_img ?>">
            <div class="wrapper-contacts-wrapper">
                <?php include('header.php'); ?>
                <div class="caption">
                    <div>
                        <p>MyMoscow</p>
                        <h1>Агентство интересных маршрутов<br>-Контакты-</h1>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="title">
            <h2>КОНТАКТЫ</h2>
            <p>свяжитесь с нами и мы ответим на любые вопросы</p>
        </div>
        <div class="contacts-text">
            <p>Мы - команда тех, кто любит историю и любит Москву.</p>
            <p>Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники 
                природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из 
                душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» 
                асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, 
                очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
            <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья 
                турист, проводящий свой активный отдых в Подмосковье.</p>    
        </div>
    </section>
    <section>
        <div class="leadership">
            <div class="leadership-man">
                <div class="leadership-man-foto"></div>
                <div class="leadership-text">
                    <h3>Александр Рыбаков</h3>
                    <h4>Директор</h4>
                    <p>По всем вопросам пишите на почту <a href="mailto:rybokov@mymoscow.com">rybokov@mymoscow.com</a></p>
                </div>
            </div>
            <div class="leadership-woman">
            <div class="leadership-woman-foto"></div>
                <div class="leadership-text">
                    <h3>Елена Белкина</h3>
                    <h4>корпоративнЫЙ отдел</h4>
                    <p>По вопросам корпоративных экскурсий <a href="mailto:belkina@mymoscow.com">belkina@mymoscow.com</a></p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contacts-form">
            <div class="contacts-contacts">
                <h4>Москва,</h4><p>Большая Спасская 12</p>
                <h4>Email:</h4><p>info@inmoscow.ru</p>
                <h4>Телефон:</h4><p>8 (800) 495-78-52</p>
            </div>
            <form action="submit">
                <h4>Напишите нам</h4>
                <input type="text" name="name"><br>
                <input type="text" name="email"><br>
                <input type="text" name="question"><br>
                <button>Отправить</button>
            </form>
        </div>    
    </section>

<!-- <?php include('footer.php'); ?>     -->

