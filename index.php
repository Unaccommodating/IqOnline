<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Bank</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="headerInfo">
                    <div class="logo">
                        <a><img src="img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="phone">
                        <p>8-800-100-5005</p>
                        <p>+7(3452)522-000</p>
                    </div>
                </div>
                <nav class="menu">
                    <ul class="head">
                        <li><a href="" class="link">Кредитные карты</a></li>
                        <li><a href="" class="link">Вклады</a></li>
                        <li><a href="" class="link">Дебетовая карта</a></li>
                        <li><a href="" class="link">Страхование</a></li>
                        <li><a href="" class="link">Друзья</a></li>
                        <li><a href="" class="link">Интернет-банк</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="main">
            <div class="container">
                    <ul class="breadСrumbs">
                        <li><a href="" class="link">Главная - </a></li>
                        <li><a href="" class="link"> Вклады - </a></li>
                        <li><a href="" class="link"> Калькулятор</a></li>
                    </ul>
                    <div class="calc">
                        <h1>Калькулятор</h1>
                        <!-- <form action="/calc.php" method="POST"> -->
                        <div class="panel">
                                    <div class="text">
                                        <p class="conditions">Дата оформления вклада</p>
                                        <p class="conditions">Сумма вклада</p>
                                        <p class="conditions">Срок вклада</p>
                                        <p class="conditions">Пополнение вклада</p>
                                        <p class="conditions">Сумма пополнения вклада</p>
                                    </div>

                                    <div class="inputs">
                                        <input class="common" type="text" class="date" name="date" id="datepicker">
                                        <input class="common" type="text" class="sum"  name="sum" id="sum">
                                        <select  class="common" class="year" name="year" id="yearNum">
                                            <option value="1">1 год</option>
                                            <option value="2">2 года</option>
                                            <option value="3">3 года</option>
                                            <option value="4">4 года</option>
                                            <option value="5">5 лет</option>
                                        </select>
                                        <input class="deposit" name='radio' type="radio" value="no" checked> Нет
                                        <input class="deposit" name='radio'type="radio" value="yes"> Да
                                        <input class="commonLast" type="text" class="pay" name="pay" id="pay">
                                    </div>

                                    <div class="sliders">
                                        <input class="sliderSum" type="range" min="1000" max="3000000" value="1500000" step="1000"  id="SliderUp" oninput="funUp()">
                                        <div class="left"><h6><i>1 тыс. руб</i></h6></div><div class="right"><h6 class='hThree'><i>3 000 000</i></h6></div>
                                        <input class="sliderPay" type="range" min="1000" max="3000000" value="1500000" step="1000"  id="SliderDown" oninput="funDown()">
                                        <div class="left"><h6><i>1 тыс. руб</i></h6></div><div class="right"><h6 class='hThree'><i>3 000 000</i></h6></div>
                                    </div>
                            </div>
                            <button id="calc_btn" class="calc_btn">Рассчитать</button>    
                        </form>
                    </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <nav class="menu">
                    <ul class="foot">
                        <li><a href="" class="link">Кредитные карты</a></li>
                        <li><a href="" class="link">Вклады</a></li>
                        <li><a href="" class="link">Дебетовая карта</a></li>
                        <li><a href="" class="link">Страхование</a></li>
                        <li><a href="" class="link">Друзья</a></li>
                        <li><a href="" class="link">Интернет-банк</a></li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
</body>
</html>


                            