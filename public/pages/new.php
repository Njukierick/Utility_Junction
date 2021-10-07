<?php 
    require_once('../../private/Initialize.php'); 

     if(request_is_post()) {
       
        //handle form values sent by new.php
       
        $menu_name = '';
        $position ='';
        $visible = '';
    
        echo "Form parameters<br />";
        echo "Menu name: " . $menu_name . "<br />";
        echo "Position: " . $position . "<br />";
        echo "Visible: " . $visible . "<br />";
    } 
?>

<?php $page_title ='Create page'; ?>
<?php include(SHARED_PATH .'/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/create.php');?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo h($menu_name); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if($position == "1") {echo "selected";} ?> >1</option>
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
          <input type="checkbox" name="visible" value="1"<?php if($visible == "1") {echo "checked";} ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
