<?php require_once('../../private/Initialize.php');  ?>

<?php $page_title = 'Junction'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
    <h2>Main Menu</h2>
    <ul>
        <li><a href="Subjects/index.php">Subjects</a>
    </li>
    <li><a href=<?php echo url_for("pages/index.php"); ?>>Pages</a></li>
    </ul>
</div>
</div>

<?php include(SHARED_PATH .'/staff_footer.php'); ?>