
<html>
    <head>
        <title>Indian idol 2024</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <!-- <?php
                if($insert == true)
                {
                    echo "<h1 class='success'>Thanks for enrolling as a participant.</h1> <br>";
                    echo "<h1 class='success'>You will soon receive an email regarding the adition details.</h1>";
                }
                if($insert == false)
                {
                    echo "<h1 class='success'>failed</h1> <br>";
                }
            ?> -->
        <!-- <div class="bg">
            <img src="/IndianIdol2024.jpg" alt="bg">
        </div> -->
        <div class="main">
            <div class="heading">
                <h1>Welcome To The Indian Idol 2024 Application Portal</h1>
                <h5>Season-18 Will Revel New Excitements</h5>
                <h3>Submit The Form To Participate</h3>
            </div>
            <form action="main.php" method="post" class="form">
                <input type="name" id="name" name="name" placeholder="Write Your Name Here">
                <input type="father" id="father" name="father" placeholder="Write Your Father's Name">
                <input type="age" id="age" name="age" placeholder="How Old Are You">
                <input type="gender" id="gender" name="gender" placeholder="Gender">
                <input type="state" id="state" name="state" placeholder="Which State You Belongs To">
                <input type="mail" id="mail" name="mail" placeholder="eMail- id">
                <input type="ph" id="ph" name="ph" placeholder="Phone Number">
                <textarea name="about" id="About" cols="30" rows="10" placeholder="Tell Us More about You"></textarea>
                <button class="btn">Submit</button>
            </form>

        </div>
    </body>
</html>