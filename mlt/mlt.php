<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health tracker</title>
    <link rel="stylesheet" href="style.css">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="main-container">
    
    <!-- <?php include '../partials/_dbconnect.php'; ?>
    <?php include '../partials/_header.php'; ?>  -->
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo' <div class="bg-success">
    <div class=" text-center">
        <h1>Lets track Mental Health.</h1>
    </div>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Start </button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules for getting started</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it cannot be undone.</div>
            <div class="info">3. If you do not feel like answering question just leave it.</div>
            <div class="info">4. You can not select any option once time goes off.</div>
            <div class="info">5. You can not exit from the Depression Quiz while you are answering.</div>
            <div class="info">6. You will be analyssed on the basis of your answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Mental Health Tracker</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I have inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I have inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I have inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-brain"></i>
        </div>
        <div class="complete_text">You have completed the Quiz!</div>
        <div class="score_text">
            <!-- Here I have inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>
</div>';
    }
    else{
        echo'
        <div class="container">
        <h1 class= "py-2">TO track your Mental Health, Please Login!</h1>
        <p class= "lead">You are not logged in. Please login to be start tracking your mental Health.</p>
    </div>
        ';
    }
    ?>
    <footer class="container-fluid bg-dark text-light" style="position:fixed;bottom:0;width:100%;color:beige">
    
    <p class="text-center mb-0">Copright iCom 2022 All Right reserverd</p>
    </footer>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="quesmlt.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="scrmlt.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>

</html>