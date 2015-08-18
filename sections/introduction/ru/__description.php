<h2 class="item1">Введение</h2>

<p>Благодарим Вас за приобретение шаблона Joomla. Данная документация
    состоит из нескольких частей и охватывает весь процесс установки и
    настройки веб-сайта Joomla! с нуля. Мы сделали все возможное, чтобы это
    руководство было понятным и удобным в использовании.</p>

<h3>Что представляет собой Joomla! CMS?</h3>

<p>Joomla! CMS - это открытое программное обеспечение для построения
    веб-сайтов. Оно позволяет создавать веб-сайты и мощные онлайн
    приложения, а также почти не требует технических навыков или знаний в
    управлении. Множество особенностей, в том числе простота использования и
    расширяемость, сделали Joomla! наиболее популярной программой для
    веб-сайтов. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Детали</a></p>

<h3>Что такое шаблон Joomla?</h3>

<p>Шаблон Joomla! - это тема для платформы Joomla! CMS. Другими
    словами, внешний вид веб-сайта Joomla! можно легко изменить путем
    установки нового шаблона за несколько несложных шагов. При всей своей
    простоте, шаблон Joomla! содержит все необходимые исходные файлы, которые
    можно редактировать желаемым образом.</p>

<h3>Что такое VirtueMart 3.0? </h3>

<p>VirtueMart - это открытое программное обеспечение для интернет-магазина, созданное на основе платформы Joomla! CMS.
    VirtueMart устанавливается на движок Joomla! как компонент или плагин. </p> <p>Запускается VirtueMart в виде
    торговой корзины или в режиме каталога. Для создания интернет-магазина прежде всего необходимо установить платформу
    Joomla! CMS, а затем установить и настроить VirtueMart. <a href="http://virtuemart.net/features/what-is-virtuemart"
                                                               target="_blank">Детали</a></p>

<h6>Структура шаблона</h6>

<h6>Приобретенный комплект шаблона состоит из нескольких папок. Осмотрим содержание каждой папки: </h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> содержит файлы документации</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> основной файл документации. Вы его сейчас читаете :)
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Joomla</b></dt>
            <dd> содержит архив с темой Joomla, версию для быстрой установки и файл со скриптом для разархивации.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> архив с темой. Включает все файлы темы. Нужно устанавливать
                        <a href="#template-installation">с помощью менеджера расширений Joomla</a>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> представляет собой
                        <a href="#complete_install">
                            комплект для полной установки Joomla
                        </a>
                        с файлами движка, темы и демо-данными (дамп базы данных, образцы изображений)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> файл, используемый для разархивации fullpackage.zip после загрузки на хостинг сервер
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b>
            <dd> содержит скриншоты темы.</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> вмещает файлы демо-данных темы:</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> исходные файлы шаблона для Adobe Photoshop(.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> папка с образцами данных, необходимыми, чтобы веб-сайт выглядел как на демо шаблона. Содержимое
                        данной папки нужно загрузить в корневую директорию Joomla.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> файл дампа базы данных. Вмещает демо-данные темы.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> включает дополнительные расширения для темы
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                fonts_info.txt
            </dt>
            <dd> содержит ссылки, по которым можно скачать шрифты шаблона
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> инструкция по распаковыванию файлов демо-данных</dd>
        </dl>
    </li>
</ul>