<?php
/*echo "hello";

include_once("../Controller/mysql.php");
$database = new Mysql();
$database->connect();

$query = "select * from Applicant";
$result = mysql_query($query) or die(mysql_error());
echo $result;
echo '<table>';
while ($row = mysql_fetch_row($result)) {
    echo '<tr>
               <td>' . $row[0] . '</td>
               <td>' . $row[1] . '</td>
               <td>' . $row[2] . '</td>
               <td>' . $row[3] . '</td>
               <td>' . $row[4] . '</td>
               <td>' . $row[5] . '</td>
               <td>' . $row[6] . '</td>
               <td>' . $row[7] . '</td>
               <td>' . $row[8] . '</td>
        </tr>';
}
echo '</table>';
$word = new COM("word.application") or die ("Could not initialise MS Word object.");
$word->Documents->Open(realpath("ApplicationForm.docx"));

// Extract content.
$content = (string) $word->ActiveDocument->Content;

echo $content;

$word->ActiveDocument->Close(false);

$word->Quit();
$word = null;
unset($word);*//*
function parseWord($userDoc) 
{
    $fileHandle = fopen($userDoc, "r");
    $line = @fread($fileHandle, filesize($userDoc));   
    $lines = explode(chr(0x0D),$line);
    $outtext = "";
    foreach($lines as $thisline)
      {
        $pos = strpos($thisline, chr(0x00));
        if (($pos !== FALSE)||(strlen($thisline)==0))
          {
          } else {
            $outtext .= $thisline." ";
          }
      }
     $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
    return $outtext;
} 
$userDoc = "ApplicationForm.docx";
$text = parseWord($userDoc);
echo $text;*/
$word = new COM("word.application") or die("Unable to instantiate Word");
$word->Documents->Open($filename);
$new_filename = substr($filename,0,-4) . ".txt";
// the '2' parameter specifies saving in txt format

$word->Documents[1]->SaveAs($new_filename,2);
$word->Documents[1]->Close(false);
$word->Quit();
$word->Release();
$word = NULL;
unset($word);
$fh = fopen($new_filename, 'r');
// this is where we exit Hell

$contents = fread($fh, filesize($new_filename));
fclose($fh);
unlink($new_filename);