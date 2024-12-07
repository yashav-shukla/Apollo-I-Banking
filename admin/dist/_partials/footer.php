<?php
/* Persisit System Settings On Brand */
$ret = "SELECT * FROM `iB_SystemSettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
  <footer class="main-footer">
    <strong>&copy; <?php echo date('Y'); ?> - made 💘 by Yashav Shukla.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 8.2.16
    </div>
  </footer>
<?php } ?>