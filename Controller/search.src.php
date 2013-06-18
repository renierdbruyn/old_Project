<link href="../View/stylesheets/StyleSheet.css" rel="stylesheet" type="text/css" />
<?php
include 'search.php';

$s = new Search();
$s->searchQuery();
/**
  $title = $s->row['Adv_title'];
  $description = $s->row['Adv_desc'];

  echo "<h2><a href='#'> $title</a> </h2>";
  echo "$description <br /> <br />";
  echo"<a href='/201308/View/application.php' class='link-button right'><span>Apply</span></a>";
 * 
 */
?>

<div id="search_results">
    <?php
    /**
    echo "<h2><a href='#'> $s->title</a> </h2>";
    echo "$s->description <br /> <br />";
    echo"<a href='/201308/View/application.php' class='link-button right'><span>Apply</span></a>";
     * 
     */
    ?>
</div>