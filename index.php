
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8" />
    <title>part4ex6</title>
  </head>
  <body>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            $output = '';
            if ( $i%3 == 0) {
                $output .= 'fizz';
            }
            if ( $i%5 == 0) {
                $output .= 'buzz';
            }

            if ($output == '') {
                $output .= $i;
            }
            echo $output. "\n";
        }
    ?>
  </body>
</html>
