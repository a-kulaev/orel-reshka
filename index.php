<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orel & Reshka - The Game</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="img/logo.png" alt="Orel & Reshka - Play now!">
        </div>
        <div class="content">
            <H1>Orel & Reshka</H1>
            <h2>The Game</h2>
            <form action="index.php" method="post">
                <p>
                    <label for="">
                        <input type="radio" name="difficulty" value="easy"> Easy
                    </label>
                    <label for="">
                        <input type="radio" name="difficulty" value="medium" checked> Medium
                    </label>
                    <label for="">
                        <input type="radio" name="difficulty" value="hard"> Hard
                    </label>
                </p>
                <p>
                    <label>
                        <button type="submit" name="select" value="1">Orel</button>
                    </label>
                    <label>
                        <button type="submit" name="select" value="2">Reshka</button>
                    </label>
                </p>
            </form>
            <?php
                if ($_POST){
                    $difficulty = $_POST['difficulty']; // easy - medium - hard
                    $select = $_POST['select']; // 1 - 2
                    $rand = rand(0,100);
                    if ($rand == 0) {
                        $opponent = "Rebro!!!";
                    } else if ($rand > 50) {
                        $opponent = "Orel";
                        $rand = 1;
            
                    } else if ($rand <= 50) {
                        $opponent = "Reshka";
                        $rand = 2;
                    }
                    if ($select == 1) {
                        echo "<p>You choose Orel</p>";
                    } else if ($select == 2) {
                        echo "<p>You choose Reshka</p>";
                    }
                    if ($select == $rand) {
                        if ($difficulty == "hard") {
                            $rand = rand(0,2);
                            if ($rand == 0) {
                                if ($select == 1) {
                                    $opponent = "Reshka";
                                } else {
                                    $opponent = "Orel";
                                }
                                $result = "<p>Ha-ha, you lose!</p>";
                            } else {
                                $result = "<p>Oh, you win</p>";
                            }
                        } else {
                            $result = "<p>Victory</p>";
                        }
                    } else {
                        if ($difficulty == "easy") {
                            $rand = rand(0,1);
                            if ($rand == 1) {
                                if ($select == 1) {
                                    $opponent = "Orel";
                                } else {
                                    $opponent = "Reshka";
                                }
                                $result = "<p>Lucky shot. You win!</p>";
                            } else {
                                $result = "<p>No way... You lose</p>";
                            }
                        } else {
                            $result = "<p>You lose</p>";
                        }
                    }
                    echo $opponent;
                    echo $result;
                }
            ?>
        </div>
    </div>
</body>
</html>

