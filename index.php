<?php 
    require_once('db.php');
    $query = 'SELECT * FROM products';
    $result= mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src='main.js'></script>
</head>
<body>
<nav style="display: flex; justify-content: space-between;background: #c842ab">
        <div><h1 style="font-size: 30px;  padding: 7px; border-radius: 10%;">SuperSHOP</h1></div>
        <div style="padding-top: 25px;">
            <p style=" display: inline; font-size: large">
                <a style="padding: 10px; text-decoration: none; color: aliceblue;" href="index.php">
                    Home</a></p>
            <p style=" display: inline; font-size: large">
                <a style="padding: 10px; text-decoration: none; color: aliceblue;" href="addproduct.html">
                    Add Product</a></p>
        </div>
    </nav><br><br>
    <div class="swiper" style="width: 100%; height: 80%;">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          
            <?php 
            while($row = mysqli_fetch_assoc($result))
            {
            ?>
            <div class="swiper-slide" style="">
                <img style="width: 400px; height: 500px;border-radius:15px; position: relative;" src="<?php echo $row['img']; ?>" alt="">
                <div style="position: absolute; bottom:0; left:0; background-color: rgba(0,0,0,0.5);
                 width:400px; color:white;border-radius:15px;">
                    <h1><?php echo $row['proname']; ?></h1>
                    <p>Category: <?php echo $row['procat']; ?></p>
                    <p>Manufac Date: <?php echo $row['mdate']; ?></p>
                </div>
                
            </div>
            <?php 
            }
            ?>
         </div>
        <div class="swiper-pagination"></div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 0,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
});
    </script>
</body>
</html>