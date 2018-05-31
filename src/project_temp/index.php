<?php include 'php/database_utilities/submit_comment.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mockup.css">
    <link rel="stylesheet" href="css/main_style.css">
    <link rel="stylesheet" href="css/grid.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <title>Example</title>
</head>
<body>
    <div style="margin-top:100px;">
        <p>When \(a \ne 0\), there are two solutions to \(ax^2 + bx + c = 0\) and they are
        $$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$</p>
    </div>
    <div id="app">
        <div id="comment-section">
            <div id="comment-section-header">
                <div class="left-element">
                    <p>Comments:</p>
                </div>
                <div class="right-element">
                    <select id="comments-sort-type">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <div id="comment-section-body">
                <div class="comment">
                    <div class="comment-header">
                        <div class="children">
                            <div class="image-panel">
                                <img src="./img/avatar_placeholder.png">
                            </div>
                            <div class="comment-info">
                                <h6 class="comment-author">Hello World!</h6>
                                <h6 class="comment-date">14.12.1996</h6>
                            </div>
                            <div class="votes right-element">+1</div>
                        </div>
                    </div>
                    <div class="comment-body"> 
                        <p class="comment-text">
                            Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, 
                            Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, 
                            Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, 
                            Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, 
                            Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, Lorem Ipsum, 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="create-comment-field">
            <!-- <form action="php/database_utilities/submit_comment.php" method="POST"> -->
            <form action="#" method="POST">
                <div>
                    <input id="comment-author-input-field" class="comment-input-field" type="text" name="commentAuthor" placeholder="Podpis">
                    <!-- TODO: mail! -->
                    <!-- <button>+</button>
                    <button>-</button> -->
                </div>
                <div>
                    <input 
                        class="comment-input-field" type="text"  name="commentTitle" placeholder="Tytuł Komentarza">
                </div>
                <div>
                    <textarea 
                        id="comment-text-area"  
                        name="commentText" 
                        required
                        class="comment-input-field"></textarea>            
                </div>
                <div class="row">
                    <p id="captcha-question">2+2 = </p>
                    <input 
                        id="captcha-answer" 
                        type="text" 
                        required 
                        name="captcha"
                        >
                    <input id="createComment" name="createComment" type="submit" value="Submit"> <!-- float: right; -->
                </div>
            </form>         
        </div>            
    </div>
</body> 
<script src='js/formValidatorUtility.js'></script>
<script>
    

</script>
</html>