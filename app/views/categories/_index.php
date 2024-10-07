                <!-- Charge les categories dans $categories -->
                <?php include_once "../app/models/categoriesModel.php";
                $categories = \App\Models\CategoriesModel\findAll($connexion);
                foreach($categories AS $category) :?>
                <li>
                <a href="index.html"><?php echo $category['name'];?> - [<?php echo $category['post_count']; ?>]</a>
                </li>
                <?php endforeach ?>