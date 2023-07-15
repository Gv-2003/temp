<?php
    $conn = new mysqli('localhost', 'root', '', 'temp');
    if ($conn->connect_error) die ('Connection error.');
    
    $result = $conn->query('SELECT * FROM img_demo');
    if (!$result) die('SQL Error');
?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container {
            display: flex;
        }
        .card {
            flex: 1 0 18rem;
        }
    </style>
</head>
<div class="container">
    <?php while($row = $result->fetch_assoc()) { $b = explode(', ', $row['img']); ?>
        <?php for ($i=0; $i < count($b);$i++) { ?>
        <div class="card" style="width: 18rem;">
            <img src="images/<?php echo $b[$i]?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php }?>
    <?php }?>
</div>