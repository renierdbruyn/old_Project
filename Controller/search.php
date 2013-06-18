<?php

include_once ('../Model/mysql.php');

class Search {
    //   public $search_term;
    //   public $search_terms;
    // private $num_rows;

    /**  protected function Get($g) {
      $this->{$g} = $_GET[$g];
      }
     */
    protected function post() {
        $_POST['Search_term'];
    }

    public function searchQuery() {
        $db = new Mysql();
        $db->connect();
        if (isset($_POST['Search_term'])) {

            $Search_term = mysql_real_escape_string(htmlentities($_POST['Search_term'])); //blocks php code entered into textbox from interfering with my code
            echo "<div class=\"searchText\">Search Results</div><hr/>";
            // echo "<iframe width=900 height=800 class=\"searchText\" name=\"search\" src=\"search.php\"></iframe> ";
            $Search_terms = explode(" ", $Search_term); //splits search terms at spaces

            $query = "SELECT * FROM adverts WHERE "; // query db to select all from job table
            // echo $terms."<br/>";
            foreach ($Search_terms as $each) {
                // echo $each."<br/>";
                $i = 0;
                $i++;
                if ($i == 1)
                    $query .= "Adv_title LIKE '%$each%' ";
            }
/*$queryApp = mysql_query("SELECT * FROM applicant WHERE id = Ap_id");
    $num_rowsApp = mysql_num_rows($queryApp) or die(mysql_error());
            if ($num_rowsApp > 0) {
                while ($rowApp = mysql_fetch_assoc($queryApp)) {                      
                      $appId = $row['Ap_id'];//$_SESSION[user_name]
                }
            }*/
            //    echo $query;
    
            $query = mysql_query($query);
            $num_rows = mysql_num_rows($query) or die(mysql_error());
            if ($num_rows > 0) {
                while ($row = mysql_fetch_assoc($query)) {                      
                      $title = $row['Adv_title'];
                      $description = $row['Adv_desc'];
                      $id = $row['Adv_id'];
                      
                      echo "<h2><a href='#'> $title</a> </h2>";
                      echo "$description <br /> <br />";
                      echo"<a href=\"/201308/View/applicationForm.php\" class='link-button right'><span>Apply</span></a>"; 
                       
                  // return $row;
                }
            }
            else
                echo "none found for \"<b>$Search_term </b>\"</br>Check spelling";
        }
        // $db->disconnect();
    }

}

?>