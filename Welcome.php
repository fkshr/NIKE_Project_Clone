<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Home</title>
    <style>
        

        .dblock {
            width: 100%;
            height: 75%;
        }

        .container {
            text-align: center;
            padding: 3px;

            background-color: gray;
        }

        footer {

            width: 100%;
            height: 20%;
            margin-right: 100px;
            background-color: grey;
            overflow: hidden;
        }

        .foot h4 {
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            margin-right: 15px;
            font-size: 28px;
        }

        .foot p {
            text-align: center;
            margin-top: 9px;
            margin-right: 30px;
            color: white;
        }



        .footnav a {

            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 0px 0px;
            text-decoration: none;
            font-size: 17px;
            width: 23%;
        }

        .footnav a:hover{
            opacity: 0.5;
        }

        .card {
            float: left;
            margin-left: 5.5%;
            width: 30%;
        }

        .product-container {
            margin-top: 4%;
            width: 100%;
            height: 90%;
        }
        .full-description {
            display: none;
        }
        .card{
            border: none;
        }
        .card:hover{
            box-shadow: 0px 0px 15px black;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // When any "Read More" button is clicked, toggle the visibility of its description
            $(".toggle-description").click(function () {
                var $product = $(this).closest(".card");
                var $fullDescription = $product.find(".full-description");

                $fullDescription.slideToggle();

                // Change the button text based on the current state
                if ($(this).text() === "Read More") {
                    $(this).text("Read Less");
                } else {
                    $(this).text("Read More");
                }
            });
        });
    </script>
</head>

<body>
    <header>
        <div>

            <?php require'partials/navbar_v1.php'?>
        </div>
        
    <section>

        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="nike1.jpg" class="dblock" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="nike2.png" class="dblock" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="nike3.jpg" class="dblock" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div>
            <img src="cr7.jpg" alt="Goat " style="margin-top: 30px; width: 100%; height: 90%;">
        </div>
        <div>
            <h1 style="font-family: 'Times New Roman', Times, serif; margin-top: 20px; text-align: center; font-size: 70px;"><b>#JUSTDOIT</b></h1>
        </div>
        <!-- Product -->
        <div class="product-container">
            <div class="card" style="width: 25rem;">
                <img src="nike_shoe1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Running shoes</h5>
                    <h3> Rs:3,500.00</h3>
                    <p class="card-text short-description" style="margin: 0px;">Nike Running shoes are engineered with
                        cutting-edge technology to provide</p>
                    <p class="full-description">
                        comfort, performance, and style for runners of all levels. Some key elements you may find in a
                        product description include:</p>
                    <button class="toggle-description btn btn-primary">Read More</button>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="nike_shoe2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Air Jordan Spike PE</h5>
                    <h3> Rs:7,500.00</h3>
                    <p class="card-text short-description" style="margin: 0px;">The Nike Air Jordan Spike PE is a
                        limited edition sneaker that pays homage to
                    </p>
                    <p class="full-description">
                        the iconic filmmaker, Spike Lee, and his enduring influence on basketball and sneaker
                        culture.This special edition combines the classic design of Air Jordan sneakers with unique
                        features and
                        details inspired by Spike Lee's creative vision.</p>
                    <button class="toggle-description btn btn-primary">Read More</button>
                </div>
            </div>
            <div class="card" style="width: 25rem;">
                <img src="nike_shoe3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nike Mercurial Superfly 5</h5>
                    <h3> Rs:10,000.00 </h3>
                    <p class="card-text short-description" style="margin: 0px;">The Nike Mercurial Superfly 5 is a cutting-edge soccer cleat that combines
                    </p>
                    <p class="full-description">
                        innovative technology and sleek design to give players the edge they need to perform at their
                        best. Whether you're a professional athlete or a weekend warrior, these cleats are engineered to
                        help you maximize your speed and agility on the field.</p>
                    <button class="toggle-description btn btn-primary">Read More</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="foot">
            <div>
                
                <h4><i>NIKE</i></h4>
                <p>© 2023 NIKE, Inc</p>

            </div>
            <div class="footnav">
                <a href="About.html">Home</a>
                <a href="contactus.html">Contact</a>
                <a href="Contact.html">Address</a>
                <a href="Product.html">Product</a>
                
            </div>



        </div>
    </footer>


</body>

</html>