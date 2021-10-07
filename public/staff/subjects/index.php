<?php require_once('../../../private/Initialize.php');  ?>

<?php 

 $subject_set = find_all_subjects();

    
?>

<?php $page_title = 'Subjects'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<div class="subjects listing">
        <h1>Subjects</h1>

        <div class="actions">
            <a class="action" href="<?php echo url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
  	            <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <!-- Populate table

                Rawurlencode converts spaces to '%20'
                urlencode converts spaces to '+'

                Rawurlencode is used on the path (everything before '?')

                urlencode is used on the query string (after the '?' (the url parameters))

                these are followed by deconde options in the same manner.

                Decode methods are rarely needed to be manually envoked as PHP 
                automatically calls these when it receives a URL.

                Encoding is not necessary on form parameters before
                they are sent. HTML takes care of reserve values in this case.
             -->
            
            <?php while($subject = mysqli_fetch_assoc($subject_set) ) { ?>
                <tr>
                    <td><?php echo h($subject['id']); ?></td>
                    <td><?php echo h($subject['position']); ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h($subject['menu_name']); ?></td>
                    <!--Adds id as a URL parameter -->
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . h(u($subject['id'])));?>">View</a></td>
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

        <?php 
        mysqli_free_result($subject_set);
        ?>
    </div>
</div>

<?php include(SHARED_PATH .'/staff_footer.php'); ?>  