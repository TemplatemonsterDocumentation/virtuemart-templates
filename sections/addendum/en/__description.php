<h2 class="item6">Addendum</h2>

<p>We did our best to make this documentation as clear as possible. However, if you have any difficulties with the
    VirtueMart template or suggestions on improving the template or its documentation, feel free to contact our support
    team through:</p>

<h4>Help and Support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit" target="_blank">Help ticket system</a>
    </li>
</ul>

<h2>Loading data from Google servers</h2>

<p>Some countries have issues connecting to Google servers. This can cause issues loading Google Fonts and Java Script
    libraries from Google CDN. To resolve these issues please do the following: </p>

<h4>Can't load Google Fonts: </h4>
<ol class="index-list">
    <li>Open \templates\theme****\index.php file</li>
    <li>Locate the line: <br>
        <code>$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
    <li>Replace it with the following: <br>
        <code>$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
</ol>

<h4>Documentation</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Beginners guide</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Frequently Asked Questions</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla! Tutorials</a></li>
    <li><a href="/help/ecommerce/virtuemart/virtuemart-tutorials/" target="_blank">VirtueMart tutorials</a></li>
</ul>


<h4>Joomla! Extensions</h4>

<p>At <a href="http://extensions.joomla.org/" target="_blank">www.extensions.joomla.org</a> you can download
    more than 6 thousands of modules, plugins and components to add various features to your Joomla website.</p>


<h4>Additional Links</h4>
<ul class="marked-list">
    <li><a href="http://virtuemart.net" target="_blank">Official website</a></li>
    <li><a href="http://forum.virtuemart.net/" target="_blank">Official forum virtuemart</a></li>
    <li><a href="http://extensions.virtuemart.net" target="_blank">Official extensions for virtuemart</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla CMS Documentation</a></li>
</ul>

<h4>Validation</h4>

<p class="alert alert-info"> Both HTML markup and CSS styles used in our templates are semantically correct and
    valid.
    However some W3C errors still can take place. Making code 100% W3C valid eliminates the usage of modern website
    technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality
    templates and sometimes we have to break some rules.</p>