<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <title>Portfolio</title>
</head>
<body>
    <?php require "assets/navigation.php" ?>

    <main>
        <section class="preview">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="front">
                            <img src="img/portfolio_mui.png" alt="portfolio React">
                      
                            <p class="title-front">Webová stránka</p></a>
                        </div>
                        <div class="back">
                            <a href="https://my-portfolio-one-page.vercel.app/" target="_blank">Webová stránka</a>
                        </div>
                    </div>
                </div>

            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="front">
                            <img src="img/Contact.png" alt="kontaktní formulář">
                            <p class="title-front">Kontaktní formulář</p></a>
                    </div>
                    <div class="back">
                    <a href="https://contact-form-fawn.vercel.app/" target="_blank">Kontaktní formulář - React</a>
                    </div>
                </div>
            </div>

            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="front">
                            <img src="img/buy_list.png" alt="aplikace na úkoly">
                            <p class="title-front">Aplikace na úkoly</p>
                    </div>
                    <div class="back">
                    <a href="https://aplikace-ukoly-2wdh.vercel.app/" target="_blank">Alikace na úkoly - React</a>
                    </div>
                </div>
            </div>

            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="front">            
                            <img src="img/portfolioHTML.png" alt="portfolio html">
                            <p class="title-front">Portfolio v HTML</p>
                    </div>
                    <div class="back">
                        <a href="https://portfolio-snowy-rho.vercel.app/" target="_blank">HTML</a>
                    </div>
                </div>
            </div>

            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="front">            
                            <img src="img/bradavice.png" alt="Bradavice">
                            <p class="title-front">Bradavice v PHP</p>
                    </div>
                    <div class="back">
                        <a href="http://sabizany.cz/" target="_blank">Bradavice - PHP</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- <section class="portfolio-card">
          
         
            <a href="https://aplikace-ukoly-2wdh.vercel.app/">
                <img src="img/buy_list.png" alt="aplikace na úkoly">
            </a>
        </section> -->
       
        
    </main>

    <?php require "assets/footer.php"?>
    
</body>
</html>