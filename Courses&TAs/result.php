<!DOCTYPE>
    <html>
        <head>
            <title>Result Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="my_stl0.css">
        </head>
        <body class="bod">
           <?php
                include_once('database.php');


                $q="select c_name,c_hours,ta_name,ta_phone,ta_email from courses,tas where c_id=ta_cID and c_name='".$_GET['cor']."';";
                $rows=$db->getRows($q);
                $t='';
                foreach($rows as $ros =>$v)
                {
                    $t.='<tr><td>'.$v['c_name'].'</td><td>'.$v['c_hours'].'</td><td>'.$v['ta_name'].'</td><td>'.$v['ta_phone'].'</td><td>'.$v['ta_email'].'</td></tr>';
                }
            ?>

            <div>
                <h1><?php echo $_GET['cor']; ?> TAs</h1>
            </div>
            <table class="tab" border>
                <tr>
                    <th>Course Name</th>
                    <th>Hours</th>
                    <th>TAs Names</th>
                    <th>TAs Phone Numbers</th>
                    <th>TAs E-mails</th>
                </tr>
                <?php echo $t; ?>
            </table>
        </body>
    </html>
