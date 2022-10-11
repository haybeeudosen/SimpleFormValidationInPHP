<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
    <input type="number" name="id" value='3'  hidden>

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" />
        <small><?php echo $errors['name'] ?? '' ?></small>
    </div>

    <div>
        <label for="name">Email:</label>
        <input type="email" name="email" placeholder="Enter your email" />
        <small><?php echo $errors['email'] ?? '' ?></small>
    </div>

    <div>
        <button type="submit">Subscribe</button>
    </div>
</form>