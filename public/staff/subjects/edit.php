<?php 
require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
    error_404();
} else if($test == '500') {
    error_500();
} else if($test == 'redirect') {
    redirect_to(url_for('/staff/subjects/index.php'));
}
?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id)));?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if ($position == "1") {echo "selected";} ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
        <!-- Once the form is submitted the data sent would be no value whatsoever if visible is
             not checked. By placing a hidden value it will take presidence if the visible is not
             checked sending a 0 value, as the checkbox comes later it takes presedence when checked-->
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if ($visible == "1") {echo "checked";} ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
