<div class="col-md-8">
    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <?php 
    
        $query = "SELECT * FROM posts";
        $post_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($post_query)) {
            $post_title = $row['post_title'];
            $post_date = $row['post_date'];
            $post_author = $row['post_author'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];
        
    
    ?>

    <!-- First Blog Post -->
    <h2>
        <a href="#"><?php echo $post_title; ?></a>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post_author; ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
    <hr>
    <img class="img-responsive" src="<?php echo $post_image; ?>" alt="post images">
    <hr>
    <p><?php echo $post_content; ?></p>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

    <?php } ?>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
</div>