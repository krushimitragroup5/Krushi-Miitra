<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Krushi Mitra</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/product.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar  -->
    <div class="container-fluid-lg m-2">
        <h1 class="heading">KRUSHI MITRA</h1>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navabr-brand">
                        <img src="images/logo.png" class="d-inline-block align-top img" alt="Logo not found" />
                    </a>

                    <button class="navbar-toggler bg-white mx-3" data-toggle="collapse" data-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Labour_Feature.php">LABOUR REQUIREMENT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="social_media.php">SOCIAL MEDIA INTEGRATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wholesaler.php">WHOLESALER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product.php">PRODUCT AND SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <main>
        <!-- slider -->
        <div class="container-fluid">
            <div class="row py3">
                <div class="col">
                    <div class="carousel slide" id="myCarousel" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="2000">
                                <img src="images/productimg/seeds-slide.JPG" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/slide.webp" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/slide1.jpg" alt="slide" class="d-block" />
                            </div>
                            <div class="carousel-item" data-interval="2000">
                                <img src="images/slide2.jpg" alt="slide" class="d-block" />
                            </div>
                        </div>
                        <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#myCarousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-success m-2">
            <h3 class="prohed">PRODUCTS AND SERVICES</h3>
            <button class="navbar-toggler bg-light m-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="seeds.php">SEEDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insecticides.php">INSECTICIDES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nutrients.php">NUTRIENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loginsecureshopkeeper.php">Add Product</a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="card-group">
            <div class="card ">
                <img src="images/productimg/seeds-slide.JPG" class="card-img-top" id="img" alt="...">
                <div class="card-body">
                </div>
                <div class="card-footer">
                    <a href="seeds.php" class="btn btn-primary">SEEDS</a>
                </div>
            </div>
            <div class="card">
                <img src="images/productimg/insect.png" class="card-img-top mt-5 bg-dark" id="img" alt="...">
                <div class="card-body">
                </div>
                <div class="card-footer">
                    <a href="insecticides.php" class="btn btn-primary">INSECTICIDES</a>
                </div>
            </div>
            <div class="card">
                <img src="images/productimg/nutri.jpg" class="card-img-top" id="img" alt="...">
                <div class="card-body">
                </div>
                <div class="card-footer">
                    <a href="nutrients.php" class="btn btn-primary">NUTRIENTS</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Seeds Information</h1>
                    <p>
                        <u><b>Types of Seeds:</b></u><br>
                    <ul>
                        <li><u>Open-Pollinated Seeds:</u>
                            These seeds are produced through natural pollination and will produce plants with similar
                            characteristics to the parent plant.
                        </li>
                        <li><u>Hybrid Seeds:</u>
                            Created by crossbreeding two different varieties to produce a plant with specific desired
                            traits, such as disease resistance or higher yield.
                        </li>
                        <li><u>Genetically Modified (GM) Seeds:</u>
                            Developed through genetic engineering to introduce specific traits like pest resistance,
                            herbicide tolerance, or improved nutritional content.
                        </li>
                    </ul>

                    <b><u>Seed Classification:</u></b> <br>
                    <ul>
                        <li><u>Cereal Seeds:</u>
                            Include crops like wheat, rice, maize, barley, and oats.
                        </li>
                        <li><u>Oilseed Seeds:</u>
                            Such as soybeans, sunflowers, canola, and flaxseeds, primarily grown for oil extraction.
                        </li>
                        <li><u>Pulse Seeds:</u>
                            Include legumes like lentils, chickpeas, and peas, rich in protein.
                        </li>
                        <li><u>Forage Seeds:</u>
                            Used for livestock feed, such as alfalfa, clover, and ryegrass.
                        </li>
                    </ul>

                    <u><b>Seed Quality:</b></u> <br>
                    <ul>
                        <li><u>Germination Rate:</u>
                            The percentage of seeds that successfully sprout under optimal conditions.
                        </li>
                        <li><u>Purity:</u>
                            The absence of other plant species or contaminants in a seed lot.
                        </li>
                        <li><u>Viability:</u>
                            The ability of seeds to remain alive and able to germinate for a specific period.
                        </li>
                        <li><u>Vigor:</u>
                            The overall health and strength of the seedlings produced from the seeds.
                        </li>
                    </ul>

                    <u><b>Seed Treatment:</b></u> <br>
                    <ul>
                        <li><u>Coating:</u>
                            Seeds are coated with substances like fungicides or insecticides to protect them from
                            diseases and pests.
                        </li>
                        <li><u>Pelleting:</u>
                            Encasing small seeds in a larger, more manageable outer layer for easier sowing.
                        </li>
                        <li><u>Inoculation:</u>
                            Adding beneficial microorganisms to promote plant growth and nitrogen fixation.
                        </li>
                    </ul>

                    <u><b>Seed Banks:</b></u> <br>
                    <ul>
                        <li><u>Global Seed Vault:</u>
                            Located in Svalbard, Norway, it serves as a backup storage facility for seeds from around
                            the world, ensuring the preservation of genetic diversity.
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col-lg-12">
                    <h1>Insecticides Information</h1>

                    <p>Insecticides are chemicals used in agriculture to control and manage insect pests that can damage
                        crops. Here is some information about common agriculture insecticides:</p>

                    <h2>1. Pyrethroids</h2>
                    <p>Pyrethroids are synthetic insecticides that mimic the effects of pyrethrins, which are natural
                        insecticides found in chrysanthemum flowers.</p>
                    <ul>
                        <li>Example: Permethrin</li>
                        <li>Mode of action: Targets the nervous system of insects</li>
                        <li>Usage: Effective against a wide range of pests</li>
                    </ul>

                    <h2>2. Neonicotinoids</h2>
                    <p>Neonicotinoids are a class of neuro-active insecticides modeled after nicotine. They are
                        systemic, meaning they are absorbed by plants and provide protection from inside the plant.</p>
                    <ul>
                        <li>Example: Imidacloprid</li>
                        <li>Mode of action: Disrupts the insect's nervous system</li>
                        <li>Usage: Effective against sucking insects like aphids</li>
                    </ul>

                    <h2>3. Organophosphates</h2>
                    <p>Organophosphates are a group of insecticides that affect the nervous system by inhibiting
                        cholinesterase enzymes.</p>
                    <ul>
                        <li>Example: Malathion</li>
                        <li>Mode of action: Blocks nerve signals in insects</li>
                        <li>Usage: Broad-spectrum insecticide</li>
                    </ul>

                </div>
                <div class="col-lg-12">
                    <h2>Agriculture Nutrients</h2>

                    <p>
                        <u><b>Primary Nutrients:</b></u>
                    <ul>
                        <li><u>Nitrogen (N):</u> Essential for plant growth, particularly in leaf and stem development.
                        </li>
                        <li><u>Phosphorus (P):</u> Important for root development, flowering, and fruiting.</li>
                        <li><u>Potassium (K):</u> Supports overall plant health, stress tolerance, and disease
                            resistance.</li>
                    </ul>
                    </p>

                    <p>
                        <u><b>Secondary Nutrients:</b></u>
                    <ul>
                        <li><u>Calcium (Ca):</u> Necessary for cell wall structure and stability.</li>
                        <li><u>Magnesium (Mg):</u> A component of chlorophyll, crucial for photosynthesis.</li>
                        <li><u>Sulfur (S):</u> Important for amino acid formation and overall protein synthesis.</li>
                    </ul>
                    </p>

                    <p>
                        <u><b>Micronutrients (Trace Elements):</b></u>
                    <ul>
                        <li><u>Iron (Fe):</u> Essential for chlorophyll synthesis and electron transport.</li>
                        <li><u>Zinc (Zn):</u> Involved in enzyme activation and overall plant growth.</li>
                        <li><u>Manganese (Mn):</u> Necessary for photosynthesis and nitrogen metabolism.</li>
                        <li><u>Copper (Cu):</u> Aids in various enzymatic reactions within the plant.</li>
                        <li><u>Boron (B):</u> Important for cell division and sugar transport.</li>
                        <li><u>Molybdenum (Mo):</u> Required for nitrogen fixation and enzyme activity.</li>
                        <li><u>Chlorine (Cl):</u> Plays a role in water movement within the plant.</li>
                    </ul>
                    </p>

                    <p>
                        <u><b>Organic Matter:</b></u>
                    <ul>
                        <li>Decomposed plant and animal material that improves soil structure, water retention, and
                            nutrient availability.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </main>
 
</body>

</html>