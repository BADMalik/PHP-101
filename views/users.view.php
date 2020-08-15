



<?php foreach($nameslist as $value) :?>
    <?php echo "<li>{$value->name}</li>" ?>
    <?php  endforeach ?>
    
    <h1>Home </h1>
    
    <form action="/users" method="post">
    <input  type="text" name="name"></input>
    <button type="submit">Submit</button>
    </form> 
    <?php require('partials/footer.php'); ?>