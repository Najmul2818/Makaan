<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Property Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        body { background: #f5f7fa; }

        .gallery-main {
            height: 420px;
            border-radius: 16px;
            object-fit: cover;
            width: 100%;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .thumbs img {
            height: 80px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .thumbs img:hover { border-color: #00B98E; }

        .badge-type {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #00B98E;
            color: #fff;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .card-section {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }

        .property-title { font-weight: 800; }
        .property-price { font-size: 30px; font-weight: 800; }

        .property-info li {
            background: #f8f9fa;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .action-box {
            position: sticky;
            top: 100px;
            background: #fff;
            border-radius: 18px;
            padding: 25px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }

        .action-box button {
            padding: 14px;
            border-radius: 12px;
            font-size: 16px;
        }
    </style>
</head>

<body>

<!-- HEADER -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container">
        <h1 class="text-white">Property Details</h1>
    </div>
</div>

<div class="container pb-5">
    <div class="row g-5">

        <!-- LEFT -->
        <div class="col-lg-8">

            <a href="index.php" class="btn btn-outline-primary mb-4">
                <i class="fa fa-arrow-left me-2"></i>Back to Listings
            </a>

            <!-- IMAGE GALLERY -->
            <div class="position-relative mb-3">
                <span class="badge-type">For Sale</span>
                <img class="gallery-main property-image">
            </div>

            <div class="row g-2 thumbs mb-4">
                <div class="col-4"><img src="" class="thumb-1 w-100"></div>
                <div class="col-4"><img src="" class="thumb-2 w-100"></div>
                <div class="col-4"><img src="" class="thumb-3 w-100"></div>
            </div>

            <!-- INFO -->
            <div class="card-section">
                <h2 class="property-title"></h2>
                <p class="property-price text-primary"></p>
                <p class="property-location"></p>
            </div>

            <!-- DESCRIPTION -->
            <div class="card-section">
                <h4>Description</h4>
                <p class="property-description"></p>
            </div>

            <!-- DETAILS -->
            <div class="card-section">
                <h4>Property Details</h4>
                <ul class="list-unstyled property-info"></ul>
            </div>

        </div>

        <!-- RIGHT -->
        <div class="col-lg-4">
            <div class="action-box">
                <h4 class="mb-2">₹ <span class="property-price"></span></h4>
                <p class="text-muted mb-4">✔ Verified Property</p>

                <button class="btn btn-primary w-100 mb-3">
                    <i class="fa fa-phone-alt me-2"></i>Contact Now
                </button>

                <button class="btn btn-dark w-100">
                    <i class="fa fa-calendar-check me-2"></i>Schedule Visit
                </button>
            </div>
        </div>

    </div>
</div>

<script>
const properties = {
    office: {
        title: "Office For Sale",
        price: "2,12,34,500",
        location: "Rajaji Nagar, Bangalore",
        type: "For Sale",
        images: ["img/office.png", "img/building.png", "img/home.png"],
        description: "Premium office space in a prime commercial location with modern amenities.",
        details: ["2500 Sqft", "3 Workspaces", "2 Cabins", "Parking Available"]
    },
    apartment: {
        title: "Golden Urban Apartment",
        price: "1,50,00,000",
        location: "Bandra, Mumbai",
        type: "For Sale",
        images: ["img/apartment.png", "img/home.png", "img/villa.png"],
        description: "Luxury apartment with premium interiors and excellent connectivity.",
        details: ["2000 Sqft", "3 Bedrooms", "2 Bathrooms", "1 Parking"]
    },
    villa: {
        title: "Luxury Villa",
        price: "1,15,00,000",
        location: "JP Nagar, Bangalore",
        type: "For Rent",
        images: ["img/villa.png", "img/home.png", "img/building.png"],
        description: "Independent villa with private garden and modern design.",
        details: ["1500 Sqft", "4 Bedrooms", "3 Bathrooms"]
    }
};

const id = new URLSearchParams(window.location.search).get("id");
const p = properties[id];

if (p) {
    document.querySelector(".property-title").innerText = p.title;
    document.querySelectorAll(".property-price").forEach(el => el.innerText = p.price);
    document.querySelector(".property-location").innerHTML =
        `<i class="fa fa-map-marker-alt text-primary me-2"></i>${p.location}`;
    document.querySelector(".property-description").innerText = p.description;
    document.querySelector(".badge-type").innerText = p.type;

    document.querySelector(".property-image").src = p.images[0];
    document.querySelector(".thumb-1").src = p.images[0];
    document.querySelector(".thumb-2").src = p.images[1];
    document.querySelector(".thumb-3").src = p.images[2];

    document.querySelectorAll(".thumbs img").forEach(img => {
        img.onclick = () => document.querySelector(".property-image").src = img.src;
    });

    const list = document.querySelector(".property-info");
    p.details.forEach(d => list.innerHTML += `<li><i class="fa fa-check text-primary me-2"></i>${d}</li>`);
}
</script>

</body>
</html>
