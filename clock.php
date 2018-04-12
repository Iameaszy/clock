<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Clock</title>
    <style>
            body{
                width:100%;
                box-sizing:border-box;
                padding:5rem;
            }

            .container{
                background:gray;
                padding: 10rem;
            }

            main{
                display: flex;
                justify-content: space-between;
                width: 40%;
                position:relative;
                margin:auto;
            }

            .indicators{
                    position:absolute;
            }

            .indicators span{
                background: white;
                width: 1rem;
                height: 1rem;
                border-radius: 50%;
                position:absolute;
            }

            .indicators span:first-child{
                left: 10rem;
                top: 0.7rem;
            }
            .indicators span:last-child{
                top: 3.5rem;
                left: 10rem;
            }

            .hr,.min{
                width: 8rem;
                background: #54be54;;
                height: 5rem;
                text-align:center;
                font-size:5rem;
            }

            .author{
                margin: -4rem 0;
                text-align: center;
                font-size: 2.5rem;
                color: #00000085;
            }

    </style>
</head>
<body>
    <div class="container">
        <main>
                <div class="hr">
                <?php
                            echo date("H");
                        ?>  
                </div>
                <div class="min">
                <?php
                            echo date("i");
                        ?> 
                </div>
                <div class="indicators">
                    <span>
                       
                    </span>
                    <span></span>
                </div>
        </main>
    </div>
        <p class="author">Design by Easy007</p>
  
</body>
</html>
