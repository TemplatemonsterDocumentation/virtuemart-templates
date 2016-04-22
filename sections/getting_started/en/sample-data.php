<h3>Sample Data Installation</h3>

<p>Sample data is used to make your Joomla website appear as the template live demo
    page. It contains sample articles, images, modules settings, website settings etc.
    If you are not planning to use sample images or any other sample content, please
    skip this step. </p>

<p>To install sample data you need to complete two simple steps.</p>

<h4>Upload sample images.</h4>

<p>To upload sample images please open your template package directory and go to the
    "sources" folder. There you should see the "to_the_root_directory" directory. It
    contains files that should be placed to your Joomla installation root. Please use
    the file manager to upload files to your server.</p>

<h4>Import SQL file.</h4>

<p>The final and most important step of the sample data installation is the import of
    the SQL file. The SQL file is a dump of the sample database, all Joomla website data
    is stored there. The SQL file can be imported using your database management tool
    (phpMyAdmin). The template SQL file - "dump.sql" is located in the "sources"
    directory of the template package. </p>


<p class="alert alert-danger">Please <b>DO NOT</b> import the SQL file if you have a live website as it will totally
    replace your website database and all your data will be lost.</p>
<p class="alert alert-danger">Beware: before importing the SQL file please make sure your database table prefix matches
    the table prefix in the SQL file.</p>
<p>You can check the table prefix directly in the database through the database
    management tool. Check for the tables names. The prefix is a set of symbols before
    the table name (
    <i>e.g. table "jos_assets" prefix is "jos_"</i>
    ). You can also find
    the database prefix in the "configuration.php" file in your Joomla root directory.
    Search for line 19: <code>public $dbprefix = 'jos_';</code> (
    <i>where the prefix is
        "jos_"
    </i>
    ).
</p>

<p>If the table prefixes don't match, open the "dump.sql" file with your code editor and
    using the Search &amp; Replace tool (CTRL+F or CTRL+H hotkeys) replace the "jos_"
    table prefix (
    <i>used in the SQL file</i>
    ) with the one that matches your database.
    You can check the detailed video tutorial on <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">how to change database prefix in SQL file</a>.
</p>

<h6>Now you can import that SQL file to your database. <br>
    To import sample data to your database please perform these simple steps (check the
    slides below):</h6>

<ol class="index-list">
    <li><p>Select your database from the database list in the left column in the phpMyAdmin
            tool.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>

    </li>
    <li><p>Click the "Import" button from the top navigation menu.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Click "Choose file" and browse for the dump.sql file in the template package
            "sources" directory.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Click the "Go" button to start importing the sample data.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">You can also check the detailed tutorial on <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html"
        target="_blank">how to import SQL file using phpMyAdmin tool.</a></p>