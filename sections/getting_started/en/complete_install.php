<h3>Complete Installation</h3>

<p>"I don't have a Joomla website and I want to install it from scratch." </p>

<p>Using this method you'll have the Joomla CMS engine, Joomla template, sample content, and all the required extensions
    installed.</p>

<h3>Creating a Database</h3>

<p>When you are done uploading files to the hosting server you can prepare a new database for your Joomla website. You
    can create the new database using the database management tool from your hosting control panel (
    <i>usually PhpMyAdmin</i>
    ).
</p>

<h6>With the phpMyAdmin tool you will be able to create a new database in 3 simple steps: (check the slides below)</h6>

<ol class="index-list">
    <li>Click the Database button from the top navigation menu to access the database listing. </li>

    <li>Input the database name into the "Create new database" field.</li>

    <li>Click the Create button on the right side.</li>
</ol>

<p>Your database can be seen in the database listing now. Click on its name to get access to the database.</>

<div class="owl-carousel">
    <div class="item">
        <p>1. Click the Database button to access the database listing.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Input the database name. </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Click the Create button.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Your database can be seen in the database listing now. Click
            on its name to get access to the database.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">You can also check the detailed video tutorial on
    <a href="/help/how-to-create-a-database.html" target="_blank">How to create a database</a>
</p>

<p>If you have any issues with creating a database, please contact your hosting provider for
    help and assistance. </p>


<!-- Uploading files -->

<h3>Uploading and unzipping</h3>

<p>To start working with Joomla you need to upload files to your hosting server. This can be done using your
    hosting file manager or some third party FTP manager.</p>

<ol class="index-list">
    <li>Open your template package directory and go to the 'joomla' directory.</li>

    <li>Select 'unzip.php' and 'fullpackage.zip' files and upload them to your server (
        <a href="/help/how-upload-files-server-2.html" target="_blank">How to upload files to server</a>
        ).
    </li>
    <li>Type the path to the 'unzip.php' file on your server (
        <i class="muted">http://your_domain_name/unzip.php</i>
        ) in your
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">browser</abbr>.
    </li>

    <li>
        <p>You should see the following screen:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>In the 'Choose your zip file' select box please select the uploaded fullpackage.zip file. </li>

    <li>In the 'Unzip to' field specify the directory where you want to extract the files. </li>

    <li>Click the 'Unzip' button to proceed.</li>
</ol>

<p class="alert alert-info">Please make sure to set the correct permissions for the directory where you are planning to
    extract the files. Permissions should be CHMOD 755 or 777 depending on your server configuration. </p>


<!-- Joomla CMS installation -->


<h3>Joomla CMS installation</h3>

<h6> Please make sure you have completed all the preparation steps
    and have all the necessary stuff.
</h6>

<p>Open your browser and type the path to your Joomla directory in the address bar (
    <i>e.g. http://your_domain_name/joomla</i>
    ). You should see the initial Joomla CMS installation screen:
</p>

<h4>
    Configuration
</h4>

<p> Using the "Select Language" box choose the Joomla installation language.</p>

<p>
    <span class="label">Please note: </span>
    The "Select Language" box allows you to choose the language of the Joomla installation process only. It won't affect
    your Web site language.
</p>

<p>You need to fill in all form fields in the "Main Configuration" area. Required fields are marked with the asterisk *
    symbol.</p>

<p>Fill the "Admin Email", "Admin Username" and "Admin Password" fields in the right column to create a new Joomla
    website user with administrative rights.</p>

<p class="alert alert-danger">"Admin Email", "Admin Username" and "Admin Password" are required to access your Joomla
    Web site
    <abbr title="Joomla Administration Panel that is used to work with Web site content">backend</abbr>. Keep them safe.
</p>

<p>When you are done click the
    <strong>Next</strong>
    button in the top-right corner to proceed.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>
    Database
</h4>

<p>At the second step of the Joomla CMS installation you need to input your database details. If you are not sure,
    please contact your hosting provider to get the correct details.</p>

<p>As you are installing Joomla from scratch you only need to input "Host Name," "Username," "Database Name" and
    "Password". You can usually leave other options default. However, there can be some differences depending on your
    hosting provider. </p>

<p>When you are done click the
    <strong>Install</strong>
    button in the top-right corner to proceed.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>
    Overview
</h4>

<p>You are almost done installing Joomla CMS. At the Overview step you need to select whether you want to install Joomla
    Sample data. </p>

<p class="alert alert-warning">Please note: Sample Data is required if you want to make your Joomla Web site appear as
    the
    template live demo with all the images, sample text and modules configured. To make your template appear as in the
    live demo page select the sample data package named "sample_theme###" where ### is the number of your theme.</p>

<p>Select the Sample data package you want to install or select "None" if you want to set up a pure Joomla website
    without any content.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Below you can check if the database configuration and administration panel access details are valid and send them to
    your email address if necessary.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>You can also check your installation settings and see if your hosting server matches the Joomla requirements. If you
    have any red notification boxes in the "Recommended settings" section, please contact your hosting provider for
    further assistance.</p>

<p>When you are done click the
    <strong>Install</strong>
    button in the top-right corner to proceed.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<h4>
    Installation Complete
</h4>

<p>Congratulations! You have successfully installed Joomla CMS.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger">For security reasons please delete the "Installation" directory from your Joomla root directory.</p>

<p class="alert alert-info">Tip: You can view the video tutorial on
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">How to install Joomla 3 engine.</a>
</p>

<p class="alert alert-warning">Please note: if you finished the "Complete Installation" section, you can skip the next
    "Template Installation", "Sample Data Installation" and "Extensions Installation" sections as you have all these
    elements already installed.</p>


<p>Now you are ready to proceed to configuring your Joomla CMS based Web site. Click the "<b>Site</b>" button to view
    your Web site or "<b>Administrator</b>" to view Joomla backend.
</p>