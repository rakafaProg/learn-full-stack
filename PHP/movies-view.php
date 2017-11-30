<?php require_once 'header.php'; ?>
<?php require_once 'movies.php'; 
    $movies = [
        new Movie('Harry Potter', 'J K Rowling', "https://nerdist.com/wp-content/uploads/2015/06/Wizarding-World-of-Harry-Potter.jpg"),
        new Movie('Star Wars', 'Nil Armstrong', "https://i.ytimg.com/vi/RlCPhnB2RBY/hqdefault.jpg"),
        new Movie('Ponyo', 'Hiro Mashima', "https://i.pinimg.com/736x/a7/6e/20/a76e20260f5babec50339ddf5e73b7c6--studio-ghilbi-ponyo.jpg")
    ];
?>

<div class="ui special cards">
    <?php 
        foreach ($movies as $movie ) { ?>

    <div class="ui card">
    <div class="image" href="#">
        <img src= <?php echo $movie->getSrc(); ?> />
    </div>
    <div class="content">
        <div class="header"> <?php echo $movie->getName(); ?> </div>
        <div class="meta">
        <?php echo $movie->getDirector(); ?>
        </div>
    </div>
    </div>    
        
    <?php  }
    ?>

</div>




<?php require_once 'footer.php'; ?>
