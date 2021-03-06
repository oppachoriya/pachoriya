<!DOCTYPE html>
<html>
<head>
    <?php
    echo "<title> " . $default_title . "</title>\n";
    echo "\t<meta charset=\"utf-8\">";
    foreach ($meta_data as $key => $value) {
        echo "\n\t<meta name=\"" . strtolower($value['name']) . "\" content=\"" . $value['content'] . "\">";
    }
    echo "\n\n";

    foreach ($css_data as $value) {
        echo "\n\t<link href=\"" . strtolower($value) . "\" rel=\"stylesheet\" type=\"text/css\" >";
    }
    ?>
</head>
<body>
<div id="header_container" class="container">
    <?php $this->load->view('elements/header'); ?>
</div>

<div id="page_container" class="container"> <!-- style="margin:  100px 0px 50px 0px; padding: 10px" -->
    <?php if ($page_content) {
        $this->load->view($page_content);
    } ?>
</div>

<div id="footer_container" class="container">
    <?php $this->load->view('elements/footer'); ?>
</div>
<?php
foreach ($js_data as $value) {
    echo "\n\t<script src=\"" . strtolower($value) . "\" type=\"text/javascript\" ></script>";
}
echo "\n";
?>
</body>
</html>