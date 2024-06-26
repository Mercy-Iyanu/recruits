<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakephp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="container-fluid">
    <img src="images/roadtrip-hero.svg" />
    
    <div class="body-section">
        <h2 class="h1 text-bolder text-center mt-5">CakePHP is coming to your town!</h2>
        <p class="text-center">Cake Road Trip is an opportunity for members of CakePHP core team come visit you at a local PHP meetup! The Team is keen to meet community members from around the world, bringing Cake Road Trip to you! Keen to have us come visit your meetup? Well, this is the opportunity to let us know! We are trying our best to come to as many locations as possible.</p>

        <img src="images/plaque2.svg" class="mt-5 mb-3" />
        <h3 class="h2 text-bold text-center">We’re just waiting for your invitation</h3>
        <p class="text-center">If you have a PHP or CakePHP meetup group and are excited to have us come visit, let us know soon! We will go to as many places as we can fit into our Cake Road Trip. And will be asking the community to vote for the top places to visit!</p>

        <form action="site.php">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name (Required)</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email (Required)</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Tell us where would you like us to go next (Required)</label>
                <input type="text" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-danger">Notify me!</button>
        </form>
    </div>

    <img src="images/roadtrip-footer-img.svg" />
</body>
</html>