<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>
    <style type="text/css">
        button
        {
         width:24%;
         height:100px;           
         margin:0px;
         padding:0px;
         border:0px;
         z-index:3;
         background:#b1b1b1;
         text-align:center;
        }
        button:focus
        {
            background:#F0F0F0;
            outline:none;
        }
        iframe
        {
            width:97%;
            height:700px;   
            margin:0px;
            padding:0px;
            position:absolute;
            top:102px;
            left:2px;
            z-index:-1;
            border:0PX;
        }
        
        .td1
        {
            
            margin:0px;
            padding:0px;
        }
        
        table
        {
            position:absolute;
            left:6%;
        }
        
        body
        {
            background:white;
        }
    </style>
</head>
<body>

    <table width="90%" border="0px">
        <tr  >
            <td colspan="4" class="td1">             
                <button onclick="main.location.replace('../View/personal.php');"><h3>Personal Details</h3></button>            
                <button onclick="main.location.replace('../View/matric.php');"><h3>Secondary Qualifications</h3></button>            
                <button onclick="main.location.replace('../View/tertiary.php');"><h3>Tertiary Qualifications</h3></button>            
                <button onclick="main.location.replace('../View/jobHistory.php');"><h3>Job History</h3></button>                
           </td>
        </tr>
        <tr>
            <td colspan="4">
            <iframe name="main" src="../View/personal.php" frameborder="0" />
            </td>
        </tr>
    </table>

</body>
</html>
