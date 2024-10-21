<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Food and Cuisine</title>
</head>

<body>
    <?php include('layout/nav.php'); ?>
    <div class="main_content food_and_cuisine">
        <h1 class="page_title">Dive into flavor</h1>
        <div class="slideshow_container">
            <div class="slide_container">
                <div class="slide">
                    <img src="images/food/Garudiya.jpg" alt="Image 1">
                    <p>
                        Garudhiya is a clear broth made from fish, which is one of the basic and traditional food items in the Maldivian cuisine. It is based on different species of Tuna found in Maldivian waters namely skipjack tuna, yellowfin tuna or frigate tuna. The broth is made by boiling tuna in water with salt added to taste. Some people use chillies, curry leaves and onions to flavor the broth as well.
                    </p>
                </div>
                <div class="slide">
                    <img src="images/food/fihunumas.jpg" alt="Image 2">
                    <p>
                        Grilled fish or fihunu mas is fish, either tuna or reef fish that is marinated in a blend of chili, tumeric, and ginger that is grilled over an open flame. People from different islands use different variations of spices to marinate the fish in.
                    </p>
                </div>
                <div class="slide">
                    <img src="images/food/Baipen.jpg" alt="Image 3">
                    <p>
                        Baiypen is a rice porridge made with <i>Raanbaa</i> leaf (pandan leaf). It is accompanied by <i>Maskurolhi</i>, a mixture of coarse-blended dried fish, coconut (thinly sliced or blended with the mixture), and spices. A variation of Baiypen that we love is “Kulhi Baiypen”- the spicy sibling of the regular kind. Kulhi Baiypen is made with onions, smoked fish, ginger, garlic, pepper, cumin, and other spices.
                    </p>
                </div>
                <div class="slide">
                    <img src="images/food/hedhikaa.jpg" alt="Image 4">
                    <p>
                        The concept of afternoon tea hedhikaa is popular in the Maldives. It consists of eating savory snacks with black tea around 4pm. In cafés and hotels, they are known as short eats. It is a choice of several snacks like: <i>Gulha</i> (fried dough balls filled with fish and spices), <i>Bajiya</i> (fish samosa with spices), <i>Keemia</i> (fried fish pastry rolls in batter), <i>Kulhi boakibaa</i> (spicy fish cakes), <i>Foni boakibaa</i> (sweet cake).
                    </p>
                </div>
                <div class="slide">
                    <img src="images/food/bondibai.jpg" alt="Image 5">
                    <p>
                        A dessert made for special occasions like the birth of a child. It is eaten with <i>kulhimas</i> or separately. Bondibai can either be prepared using rice, sago or breadfruit. Bondibai is made by putting rice, water, and coconut milk in a pan with cardamom and pandan leaves and cooking over medium heat. When the rice is cooked, the sugar will be added. Finally rose water is added.
                    </p>
                </div>
            </div>
            <a class="prev" onclick="prevSlide()">&#10094;</a>
            <a class="next" onclick="nextSlide()">&#10095;</a>
        </div>
    </div>
    <?php include('layout/footer.php'); ?>
    <script src="script.js"></script>
</body>

</html>