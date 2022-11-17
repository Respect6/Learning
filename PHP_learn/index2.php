<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>fun times php</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container">

    <div class="page-header">
        <h1 class="text-muted">Edgar Wrigh</h1>
    </div>

    <?php
    
            $data = [
                [
                    "title" => "The World's End",
                    "genre" => "Sci-fi",
                    "year"  => 2013,
                    "gross" => 26004851
                ],
                [
                    "title" => "Scott Pilgrim vs. the World",
                    "genre" => "Sadness",
                    "year"  => 2010,
                    "gross" => 31524275
                ],
                [
                    "title" => "Hot Fuzz",
                    "genre" => "Buddy Cop",
                    "year"  => 2007,
                    "gross" => 23637265
                ],
                [
                    "title" => "Shaun of the Dead",
                    "genre" => "Zombie",
                    "year"  => 2007,
                    "gross" => 13542874
                ],
                
            ];
            
            ?>

        <?php
            $gross = 0 ; 
        ?>     

            <div>

            <table>
                <tr>
                    <td class="title">
                        Title
                    </td>
                    <td class="title">
                        genre
                    </td>   
                    <td class="title">
                        year
                    </td>   
                    <td class="title">
                        gross
                    </td>   

                </tr>
              <?php  foreach ( $data as $value ) : ?>
                
                <tr>
                    <td class="backG"> <?php echo $value ['title'] ?></td>
                    <td> <?php echo $value ['genre'] ?></td>
                    <td class="backG"> <?php echo $value ['year'] ?></td>
                    <td> <?php echo number_format($value ['gross']) ?>$</td>
                </tr>
            
            <?php $gross = $gross + $value ['gross'] ?>
            <?php endforeach ?>

            <td >
                Total: <strong><?php echo number_format ($gross) ?>$</strong>
            </td>

            </table>
                   
            </div>

    </body>

</html>