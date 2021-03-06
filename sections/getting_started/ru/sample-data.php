<h3>Установка демо-данных</h3>

<p>Демо-данные используются для того, чтобы веб-сайт Joomla выглядел как на демо
    шаблона. К ним относятся образцы статей, картинок, настройки модулей, веб-сайта и
    т.п. Если вам не нужны образцы изображений или другой демо-контент, пропустите
    данный этап. </p>

<p>Установка демо-данных проводиться в два простых шага.</p>

<h4>Загрузка демо-картинок.</h4>

<p>Чтобы загрузить демо-картинки, откройте шаблон и перейдите в папку "sources". Там
    находится папка "to_the_root_directory". Она содержит файлы, которые нужно загрузить
    в корневую папку установки Joomla. Для загрузки файлов на сервер воспользуйтесь
    файловым менеджером.</p>

<h4>Импорт файла SQL.</h4>

<p>Последним и наиболее важным шагом установки демо-данных является импорт файла SQL.
    Файл SQL - это дамп базы данных, где хранятся все данные веб-сайта Joomla. Файл SQL
    можно импортировать при помощи инструмента управления базами данных (phpMyAdmin).
    Файл SQL шаблона "dump.sql" находится в папке "sources". </p>


<p class="alert alert-danger"><b>НЕЛЬЗЯ</b> импортировать файл SQL в базу данных действующего веб-сайта, поскольку это
    перепишет содержимое базы данных и весь контент будет утерян.</p>

<p class="alert alert-danger">Внимание: Перед импортом файла SQL убедитесь, что префикс таблиц вашей базы данных
    соответствует префиксу таблиц в файле SQL.</p>

<p>Префикс таблиц базы данных можно проверить непосредственно в инструменте управления
    базами данных. Обратите внимание на названия таблиц. Префикс - это набор символов
    перед названием табоиц. (
    <i>например, в таблице "jos_assets" префикс - "jos_"</i>
    ).
    Также префикс базы данных можно найти в файле "configuration.php" в корневой папке.
    Строка 19: <code>public $dbprefix = 'jos_';</code> (
    <i>где префикс - "jos_"</i>
    )
</p>

<p>В случае, если префикс таблиц базы данных другой, откройте файл "dump.sql" в
    текстовом редакторе и при помощи функции &quot;Найти и заменить&quot; (горячие
    клавиши CTRL+F или CTRL+H ) замените префикс "jos_" table (
    <i>используется в SQL
        файле
    </i>
    ) префиксом базы данных. Вы также можете воспользоваться детальным
    видео туториалом, <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">как изменить префикс базы данных в файле SQL</a>.
</p>

<h6>Теперь можно импортировать файл SQL в базу данных. <br>
    Чтобы импортировать демо-данные в базу данных, выполните следующее: (см. слайдер)
</h6>

<ol class="index-list">
    <li><p>Выберите нужную базу данных в списке слева в инструменте phpMyAdmin</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Откройте вкладку "Import (Импорт)" в верхнем меню навигации</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Нажмите "Choose file (Выбрать файл)" и найдите файл dump.sql в папке "sources"
            шаблона</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Щелкните кнопку "Go (Вперед)", чтобы импортировать демо-данные</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Вы также можете воспользоваться детальным туториалом <a
       href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html"
        target="_blank">как импортировать файл SQL при помощи инструмента phpMyAdmin</a>
</p>