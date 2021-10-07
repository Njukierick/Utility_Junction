<?php
  if (!isset($page_title)) {$page_title='Staff Area'; }
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>"/>
    <title>Utility <?php echo h($page_title); ?></title>
</head>
<body>
    <header>
       <h1>Utility Staff </h1>
    </header>
    <navigation>
        <ul>
            <li><a href="<?php echo url_for('/staff/index.php');?>">Menu</a></li>
        </ul>
    </navigation>