<h2 class="item6">Дополнение</h2>

<p>Мы постарались сделать данную документацию как можно более доступной и понятной. Тем не менее, в случае возникновения
    любых сложностей с VirtueMart шаблоном, предложений по улучшению шаблонов или документации, с командой технической
    поддержки можно связаться следующим образом:</p>

<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Чат</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Тикет-система</a></li>
</ul>

<h2>Загрузка данных с серверов Google</h2>

<p>В некоторых странах возникают трудности с подключением к серверам Google. Это может вызывать проблемы с загрузкой
    шрифтов Google и библиотек Java Script из Google CDN. Для того чтобы решить эту проблему, необходимо выполнить
    следующие шаги: </p>

<h4>Не грузятся шрифты Google: </h4>
<ol class="index-list">
    <li>Откройте файл \templates\theme****\index.php</li>
    <li>Найдите строку: <br>
        <code>$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
    <li>И замените его следующем кодом: <br>
        <code>$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
</ol>

<h4>Документация</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Руководство для начинающих</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Часто задаваемые вопросы</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/ru/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla! туториалы</a></li>
    <li><a href="/help/ru/ecommerce/virtuemart/virtuemart-tutorials/" target="_blank">VirtueMart туториалы</a></li>
</ul>

<h4>Joomla! Расширения</h4>
<p>На сайте <a href="http://extensions.joomla.org/" target="_blank">www.extensions.joomla.org</a> можно скачать более 6
    тысяч модулей, плагинов и компонентов, позволяющих добавлять различный функционал к вашему веб-сайту Joomla.</p>

<h4>Дополнительные ссылки</h4>
<ul class="marked-list">
    <li><a href="http://virtuemart.net" target="_blank">Официальный сайт Virtuemart</a></li>
    <li><a href="http://forum.virtuemart.net/" target="_blank">Официальный форум Virtuemart</a></li>
    <li><a href="http://extensions.virtuemart.net" target="_blank">Официальные расширения для Virtuemart</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! CMS документация</a></li>
</ul>

<h4>Валидация</h4>
<p class="alert alert-info">В наших шаблонах мы придерживаемся семантических правил написания кода HTML-разметки и
    CSS-стилей. Однако, некоторые ошибки все же могут возникать при W3C валидации. Создание 100-процентно правильного
    кода, согласно стандартам консорциума W3C, ограничивает использование современных технологий создания сайтов, таких
    как спецификация CSS3 и разметка HTML5. Целью нашей компании является предоставление богатого пользовательского
    опыта с высококачественными шаблонами, и иногда нам приходится нарушать некоторые правила.</p>