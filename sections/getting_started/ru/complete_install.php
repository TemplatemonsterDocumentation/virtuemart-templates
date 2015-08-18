<h3>Полная установка</h3>

<p>У меня нет веб-сайта Joomla и я хочу установить его с нуля. </p>

<p>При помощи этого метода устанавливаются движок Joomla CMS, шаблон Joomla, демо-данные и все требуемые расширения.</p>

<!-- Creating database -->

<h3>Создание базы данных</h3>

<p>Когда все файлы будут загружены на хостинг сервер, необходимо подготовить новую базу данных для веб-сайта Joomla. Ее
    можно создать через инструмент управления базами данных в контрольной панели хостинга (
    <i>обычно PhpMyAdmin</i>
    ).
</p>

<h6>При помощи phpMyAdmin возможно создать новую базу данных в 3 простых шага: (см. следующие слайды)</h6>

<ol class="index-list">
    <li>Щелкните кнопку Database (база данных ) в верхнем меню навигации, чтобы перейти в список баз данных </li>

    <li>Введите название базы данных в поле "Create new database (Создать новую базу данных)" </li>

    <li>Нажмите справа на кнопку Create (Создать)</li>
</ol>

<p>База данных появилась в списке. Кликните по ее названию, чтобы получить доступ к ней:</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Отктройте вкладку "Database (База данных)", чтобы перейти в список баз данных</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Введите название базы данных </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Щелкните кнопку "Создать" </p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. База данных появилась в списке. Кликните по названию, чтобы получить доступ в базу данных.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Вы также можете воспользоваться детальным видео туториалом
    <a href="/help/how-to-create-a-database.html" target="_blank">Как создать базу данных</a>
</p>

<p>При возникновении сложностей при создании базы данных, необходимо обратиться к хостинг провайдеру за поддержкой. </p>

<!-- Uploading files -->

<h3>Загрузка и разархивация</h3>

<p>Для начала работы с Joomla, требуется загрузить файлы на хостинг сервер. Это можно сделать при помощи
    файлового менеджера хостинга или альтернативного FTP менеджера.</p>

<ol class="index-list">
    <li>Откройте шаблон и перейдите в папку 'joomla'</li>

    <li>Выделите файлы 'unzip.php' и 'fullpackage.zip' и загрузите на сервер (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Как загрузить файлы на сервер.</a>
        )
    </li>
    <li>Введите путь к файлу 'unzip.php' на сервере(
        <i class="muted">http://your_domain_name/unzip.php</i>
        ) в адресной строке браузера<abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."></abbr>.
    </li>

    <li>
        <p>Должно появиться следующее окно:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>В поле 'Choose your zip file (Выберите файл zip)' выберите загруженный файл fullpackage.zip. </li>

    <li>В поле 'Unzip to (Распаковать в)' укажите директорию, куда нужно распаковать файлы. </li>

    <li>Нажмите кнопку 'Unzip (Распаковать)', чтобы распаковать файлы.</li>
</ol>

<p class="alert alert-info">Задайте правильные разрешения на папку, куда нужно разархивировать файлы. Разрешения должны
    быть CHMOD 755 или 777 в зависимости от конфигурации сервера. </p>


<!-- Joomla CMS installation -->


<h3>Установка Joomla CMS</h3>

<h6> Проверьте выполнение всех
    подготовительных шагов
    и наличие требуемых программ.
</h6>

<p>Откройте браузер и пропишите путь к директории Joomla в адресной строке браузера (
    <i>например http://your_domain_name/joomla</i>
    ). Должен появиться экран установки Joomla CMS:
</p>


<h4>Configuration (Конфигурация сайта)</h4>

<p>В выпадающем меню "Select Language (Выбрать язык)" выберите язык установки Joomla.</p>

<p>
    <span class="label">Внимание:</span>
    выпадающее меню "Select Language (Выбрать язык)" позволяет выбрать лишь язык процесса установки Joomla. Данная опция
    не влияет на язык веб-сайта.
</p>

<p>Нужно заполнить все поля формы в разделе "Main Configuration (Основные настройки)". Обязательные поля отмечены
    звездочкой *.</p>

<p>Заполните поля "Admin Email (Email администратора)", "Admin Username (Имя администратора)" и "Admin Password (Пароль
    администратора)" в правой колонке, чтобы создать пользователя нового веб-сайта Joomla с административными
    правами.</p>

<p class="alert alert-danger">"Admin Email (Email администратора)", "Admin Username (Имя администратора)" и "Admin
    Password (Пароль администратора)" требуются для доступа в админ-панель веб-сайта Joomla Web. Храните их в надежном
    месте. </p>

<p>Когда все данные введены, нажмите кнопку
    <strong>Next (Далее)</strong>
    в верхнем правом углу.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Database (Конфигурация БД)</h4>


<p>На втором этапе установки Joomla CMS необходимо ввести детали базы данных. Если они неизвестны, обратитесь к
    хостинг-провайдеру.</p>

<p>Поскольку Joomla устанавливается с нуля, нужно всего лишь ввести "Host Name (Название хостинга)", "Username (Имя
    пользователя)", "Database Name (Навзание базы данных)" и "Password (Пароль)". Остальные опции следует оставить по
    умолчанию, хотя возможны различия в зависимости от хостинг-провайдера. </p>

<p>Когда введете детали, щелкните кнопку
    <strong>Install (Установить)</strong>
    в верхнем правом углу.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>(Overview) Обзор</h4>

<p>Установка Joomla CMS почти завершена. На этапе Overview нужно определиться с установкой демо-данных Joomla. </p>

<p class="alert alert-warning">Внимание: Демо данные необходимы, если требуется, чтобы веб-сайт Joomla выглядел
    полностью
    как на демо со всеми изображениями, текстом и настройками модулей. Для этого выберите демо-данные под названием
    "sample_theme###", где ### - это номер темы.</p>

<p>Выберите демо-данные для установки или нажмите "None (Нет)", если необходим пустой веб-сайт Joomla без
    содержания..</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Ниже можно проверить, являются ли детали конфигурации базы данных и доступа в админ-панель действительными, и
    отправить их на email.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Можно проверить настройки установки и проверить соответствие хостинг сервера требованиям Joomla. Если присутствуют
    красные предупреждения в "Recommended settings (Рекомендуемые настройки)", обратитесь к хостинг-провайдеру за
    дальнейшей поддержкой.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p>По окончанию нажмите кнопку
    <strong>Install (Установить)</strong>
    в верхнем правом углу.
</p>

<h4>Установка Завершена</h4>


<p>Поздравляем! Вы установили Joomla</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger">С целью повышения безопасности удалите папку "Installation" из корневой директории Joomla
    .</p>

<p class="alert alert-info">Подсказка:
    Вы можете воспользоваться детальным видео туториалом
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Как установить движок Joomla 3</a>
</p>

<p class="alert alert-warning">Внимание: если вы выполнили "Complete Installation (Полную установку)", можно пропустить
    разделы "Template Installation (Установка шаблона)", "Sample data installation (Установка демо-данных)" и
    "Extensions Installation (Установка расширений)", поскольку все эти элементы уже полностью установлены.</p>


<p>Теперь можно приступить к настройке веб-сайта Joomla CMS. Нажмите кнопку "<b>Site (Сайт)</b>" , чтобы открыть
    веб-сайт или "<b>Administrator</b> (Администратор)", чтобы перейти в админ-панель Joomla.
</p>