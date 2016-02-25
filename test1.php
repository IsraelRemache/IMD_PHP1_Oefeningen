<?php 
    $posts = [
                [ 
                  "avatar" => "images/Theresa.png",
                  "name" => "Theresa W.", 
                  "place" => "East River Park",
                  "picture" => "images/Brooklyn.png",
                ],
                [ 
                  "avatar" => "images/Nina.png",
                  "name" => "Nina M.", 
                  "place" => "Rubirosa",
                  "picture" => "",
                ],
                [ 
                  "avatar" => "images/Sean.png",
                  "name" => "Sean B.", 
                  "place" => "Blue Bottle Coffe",
                  "picture" => "",
                ],
                [ 
                  "avatar" => "images/Mike.png",
                  "name" => "Mike A.", 
                  "place" => "Land's Emmerckout",
                  "picture" => "",
                ]
                
                
             ];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <nav>
            <form action="search">Browse Nearby</form>
        </nav>

        <section class="timeline">
            <?php foreach( $posts as $post ): ?>
                <article>
                    <div>
                        <img src="<?php echo $post['avatar'] ?>" alt="<?php echo $post['name'] ?>">
                    </div>

                    <div id="info">
                        <h1><?php echo $post['name'] ?></h1>
                        <h2><?php echo $post['place'] ?></h2>
                        <?php  if(isset($post["picture"])): ?>
                            <img src="<?php echo $post['picture'] ?>" alt="">
                            <?php endif;?>



                    </div>
                    
                </article>
                <?php endforeach; ?>
        </section>


    </body>

    </html>