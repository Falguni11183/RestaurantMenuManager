<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Menu</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fa;
            color: #172033;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            background: #081b33;
            color: white;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .nav-links a:hover {
            color: #4ade80;
        }
        /* ================= LOGOUT BUTTON ================= */

.logout-form {
    margin: 0;
}

.logout-btn {
    background: #dc2626;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 25px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.2s;
}

.logout-btn:hover {
    background: #b91c1c;
}


        /* ================= HERO ================= */

        .hero {
            background: linear-gradient(
                135deg,
                #081b33,
                #12345b
            );

            color: white;
            padding: 70px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 18px;
            color: #dbeafe;
        }


        /* ================= SEARCH ================= */

        .search-box {
            max-width: 600px;
            margin: -28px auto 40px;
            position: relative;
            z-index: 10;
        }

        .search-box input {
            width: 100%;
            padding: 18px 22px;

            border: none;
            border-radius: 35px;

            font-size: 16px;
            outline: none;

            box-shadow:
                0 8px 25px rgba(0,0,0,0.15);
        }


        /* ================= CONTAINER ================= */

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }


        /* ================= TITLES ================= */

        .section-title {
            font-size: 28px;
            margin: 35px 0 20px;
            color: #081b33;
        }


        /* ================= CATEGORIES ================= */

        .categories {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .category-btn {
            padding: 10px 18px;

            border-radius: 25px;

            border: 1px solid #d1d5db;

            background: white;

            cursor: pointer;

            color: #172033;

            transition: 0.2s;
        }

        .category-btn:hover,
        .category-btn.active {
            background: #12345b;
            color: white;
        }


        /* ================= FOOD GRID ================= */

        .food-grid {
            display: grid;

            grid-template-columns:
                repeat(auto-fit, minmax(250px, 1fr));

            gap: 25px;

            margin-bottom: 45px;
        }


        /* ================= FOOD CARD ================= */

        .food-card {
            background: white;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 5px 20px rgba(0,0,0,0.08);

            transition: 0.3s;

            cursor: pointer;
        }

        .food-card:hover {

            transform: translateY(-5px);

            box-shadow:
                0 10px 25px rgba(0,0,0,0.15);
        }


        /* ================= FOOD IMAGE ================= */

        .food-image {

            width: 100%;
            height: 200px;

            object-fit: cover;

            background: #e5e7eb;
        }


        /* ================= FOOD CONTENT ================= */

        .food-content {
            padding: 18px;
        }

        .food-content h3 {

            font-size: 20px;

            margin-bottom: 8px;
        }

        .food-content p {

            color: #64748b;

            font-size: 14px;

            line-height: 1.5;

            min-height: 42px;
        }


        /* ================= FOOD BOTTOM ================= */

        .food-bottom {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 15px;
        }

        .price {

            color: #16a34a;

            font-size: 19px;

            font-weight: bold;
        }


        /* ================= SPECIAL ================= */

        .special {

            background: #dcfce7;

            color: #15803d;

            padding: 5px 10px;

            border-radius: 15px;

            font-size: 12px;

            font-weight: bold;
        }


        /* ================= SEARCH RESULTS ================= */

        #searchResults {

            display: none;

            margin-bottom: 40px;
        }

        .search-heading {

            font-size: 28px;

            margin: 30px 0 20px;

            color: #081b33;
        }

        .search-empty {

            text-align: center;

            padding: 50px;

            color: #64748b;

            font-size: 18px;
        }


        /* ================= MODAL ================= */

        .modal {

            display: none;

            position: fixed;

            z-index: 2000;

            inset: 0;

            background: rgba(0,0,0,0.65);

            justify-content: center;

            align-items: center;

            padding: 20px;
        }

        .modal-content {

            background: white;

            width: 100%;

            max-width: 500px;

            border-radius: 18px;

            overflow: hidden;

            position: relative;

            animation: popup 0.2s ease;
        }


        @keyframes popup {

            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }


        .modal-image {

            width: 100%;

            height: 260px;

            object-fit: cover;

            background: #e5e7eb;
        }


        .modal-body {

            padding: 25px;
        }

        .modal-body h2 {

            margin-bottom: 10px;

            color: #081b33;
        }

        .modal-body p {

            color: #64748b;

            line-height: 1.6;

            margin-bottom: 15px;
        }

        .modal-price {

            color: #16a34a;

            font-size: 24px;

            font-weight: bold;
        }


        /* ================= CLOSE BUTTON ================= */

        .close {

            position: absolute;

            right: 15px;

            top: 12px;

            width: 35px;

            height: 35px;

            border-radius: 50%;

            border: none;

            background: white;

            font-size: 22px;

            cursor: pointer;

            z-index: 5;
        }


        /* ================= FOOTER ================= */

        footer {

            background: #081b33;

            color: white;

            text-align: center;

            padding: 25px;

            margin-top: 40px;
        }


        /* ================= MOBILE ================= */

        @media(max-width: 600px) {

            .navbar {

                padding: 15px 20px;
            }

            .nav-links {

                display: none;
            }

            .hero h1 {

                font-size: 35px;
            }

            .search-box {

                width: 90%;
            }

        }

    </style>

</head>


<body>


    <!-- ================= NAVBAR ================= -->

    
<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="brand">
        🍽️ Restaurant Menu
    </div>

    <div class="nav-links">
        <a href="#specials">
            Today's Specials
        </a>

        <a href="#menu">
            Menu
        </a>
    </div>

    @auth
        <form
            action="{{ route('logout') }}"
            method="POST"
            class="logout-form"
        >
            @csrf

            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    @endauth

</nav>




    <!-- ================= HERO ================= -->

    <section class="hero">

        <h1>
            Taste the Difference.
        </h1>

        <p>
            Fresh food, delicious flavors and a memorable dining experience.
        </p>

    </section>



    <!-- ================= SEARCH ================= -->

    <div class="search-box">

        <input
            type="text"
            id="searchInput"
            placeholder="🔍 Search your favorite food..."
        >

    </div>



    <div class="container">


        <!-- ================= CATEGORIES ================= -->

        <div id="categoryArea">

            <h2 class="section-title">
                Categories
            </h2>


            <div class="categories">

                <button
                    class="category-btn active"
                    onclick="filterCategory('all', this)"
                >
                    All
                </button>


                @foreach($categories as $category)

                    <button
                        class="category-btn"
                        onclick="filterCategory('{{ $category->id }}', this)"
                    >

                        {{ $category->name }}

                    </button>

                @endforeach

            </div>

        </div>



        <!-- ================= SEARCH RESULTS ================= -->

        <div id="searchResults">

            <h2 class="search-heading">
                Search Results
            </h2>

            <div
                class="food-grid"
                id="searchGrid"
            ></div>

        </div>



        <!-- ================= SPECIALS ================= -->

        <section id="specials">

            <h2 class="section-title">

                ⭐ Today's Specials

            </h2>


            <div class="food-grid">


                @forelse($specials as $food)


                    <div
                        class="food-card"
                        data-category="{{ $food->category_id }}"
                        data-name="{{ strtolower($food->name) }}"
                        onclick="openFood(this)"
                    >


                        @if($food->image)

                            <img
                                src="{{ $food->image }}"
                                alt="{{ $food->name }}"
                                class="food-image"
                            >

                        @else

                            <div
                                class="food-image"
                                style="
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    font-size:60px;
                                "
                            >
                                🍽️
                            </div>

                        @endif



                        <div class="food-content">

                            <h3>
                                {{ $food->name }}
                            </h3>


                            <p>
                                {{ $food->description }}
                            </p>


                            <div class="food-bottom">

                                <span class="price">

                                    ₹{{ number_format($food->price, 2) }}

                                </span>


                                <span class="special">

                                    SPECIAL

                                </span>

                            </div>

                        </div>


                        <div
                            class="food-data"
                            style="display:none;"
                        >

                            <span class="food-title">
                                {{ $food->name }}
                            </span>

                            <span class="food-description">
                                {{ $food->description }}
                            </span>

                            <span class="food-price">
                                ₹{{ number_format($food->price, 2) }}
                            </span>

                            <span class="food-image-url">
                                {{ $food->image }}
                            </span>

                        </div>

                    </div>


                @empty

                    <p>
                        No special items available.
                    </p>

                @endforelse


            </div>

        </section>



        <!-- ================= MENU ================= -->

        <section id="menu">

            <h2 class="section-title">

                🍴 Our Menu

            </h2>



            @foreach($categories as $category)


                @if($category->foodItems->count() > 0)


                    <div
                        class="menu-category"
                        data-category-section="{{ $category->id }}"
                    >


                        <h2 class="section-title">

                            {{ $category->name }}

                        </h2>


                        <div class="food-grid">


                            @foreach($category->foodItems as $food)


                                <div
                                    class="food-card"
                                    data-category="{{ $category->id }}"
                                    data-name="{{ strtolower($food->name) }}"
                                    onclick="openFood(this)"
                                >


                                    @if($food->image)

                                        <img
                                            src="{{ $food->image }}"
                                            alt="{{ $food->name }}"
                                            class="food-image"
                                        >

                                    @else

                                        <div
                                            class="food-image"
                                            style="
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:60px;
                                            "
                                        >
                                            🍽️
                                        </div>

                                    @endif



                                    <div class="food-content">

                                        <h3>

                                            {{ $food->name }}

                                        </h3>


                                        <p>

                                            {{ $food->description }}

                                        </p>


                                        <div class="food-bottom">

                                            <span class="price">

                                                ₹{{ number_format($food->price, 2) }}

                                            </span>

                                        </div>

                                    </div>



                                    <div
                                        class="food-data"
                                        style="display:none;"
                                    >

                                        <span class="food-title">

                                            {{ $food->name }}

                                        </span>


                                        <span class="food-description">

                                            {{ $food->description }}

                                        </span>


                                        <span class="food-price">

                                            ₹{{ number_format($food->price, 2) }}

                                        </span>


                                        <span class="food-image-url">

                                            {{ $food->image }}

                                        </span>

                                    </div>


                                </div>


                            @endforeach


                        </div>

                    </div>


                @endif


            @endforeach


        </section>


    </div>



    <!-- ================= FOOD DETAILS MODAL ================= -->

    <div
        class="modal"
        id="foodModal"
        onclick="closeOutside(event)"
    >


        <div class="modal-content">


            <button
                class="close"
                onclick="closeFood()"
            >

                ×

            </button>


            <img
                id="modalImage"
                class="modal-image"
                src=""
                alt="Food"
            >


            <div class="modal-body">

                <h2 id="modalTitle"></h2>

                <p id="modalDescription"></p>

                <div
                    class="modal-price"
                    id="modalPrice"
                ></div>

            </div>

        </div>

    </div>



    <!-- ================= FOOTER ================= -->

    <footer>

        <p>

            © {{ date('Y') }}
            Restaurant Menu Manager

        </p>

    </footer>



    <!-- ================= JAVASCRIPT ================= -->

    <script>


        /* =====================================================
           SEARCH
        ===================================================== */

        const searchInput =
            document.getElementById("searchInput");


        searchInput.addEventListener(
            "input",
            function()
            {

                const searchText =
                    this.value
                    .toLowerCase()
                    .trim();


                const searchResults =
                    document.getElementById("searchResults");


                const searchGrid =
                    document.getElementById("searchGrid");


                const specials =
                    document.getElementById("specials");


                const menu =
                    document.getElementById("menu");


                const categoryArea =
                    document.getElementById("categoryArea");



                /* ================= EMPTY SEARCH ================= */

                if(searchText === "")
                {

                    searchResults.style.display = "none";

                    searchGrid.innerHTML = "";

                    specials.style.display = "block";

                    menu.style.display = "block";

                    categoryArea.style.display = "block";

                    return;
                }



                /* ================= SEARCH MODE ================= */

                specials.style.display = "none";

                menu.style.display = "none";

                categoryArea.style.display = "none";

                searchResults.style.display = "block";


                searchGrid.innerHTML = "";


                let found = false;



                /* Get ALL original food cards */

                const cards =
                    document.querySelectorAll(
                        "#specials .food-card, #menu .food-card"
                    );



                cards.forEach(
                    function(card)
                    {

                        const name =
                            card
                            .getAttribute("data-name")
                            .toLowerCase();


                        if(
                            name.includes(searchText)
                        )
                        {

                            found = true;


                            const clone =
                                card.cloneNode(true);


                            clone.style.display = "block";


                            clone.onclick =
                                function()
                                {
                                    openFood(clone);
                                };


                            searchGrid.appendChild(clone);

                        }

                    }
                );



                /* ================= NO RESULT ================= */

                if(!found)
                {

                    searchGrid.innerHTML = `

                        <div class="search-empty">

                            No food item found.

                        </div>

                    `;

                }

            }
        );



        /* =====================================================
           CATEGORY FILTER
        ===================================================== */

        function filterCategory(
            categoryId,
            button
        )
        {

            /* Clear search */

            searchInput.value = "";


            document
                .getElementById("searchResults")
                .style.display = "none";


            document
                .getElementById("searchGrid")
                .innerHTML = "";


            document
                .getElementById("specials")
                .style.display = "block";


            document
                .getElementById("menu")
                .style.display = "block";


            document
                .getElementById("categoryArea")
                .style.display = "block";



            /* Active button */

            document
                .querySelectorAll(".category-btn")
                .forEach(
                    function(btn)
                    {

                        btn.classList.remove("active");

                    }
                );


            button.classList.add("active");



            /* Menu categories */

            document
                .querySelectorAll(".menu-category")
                .forEach(
                    function(section)
                    {

                        if(
                            categoryId === "all" ||
                            section.getAttribute(
                                "data-category-section"
                            ) === categoryId
                        )
                        {

                            section.style.display = "block";

                        }
                        else
                        {

                            section.style.display = "none";

                        }

                    }
                );



            /* Food cards */

            document
                .querySelectorAll(".food-card")
                .forEach(
                    function(card)
                    {

                        if(
                            categoryId === "all" ||
                            card.getAttribute(
                                "data-category"
                            ) === categoryId
                        )
                        {

                            card.style.display = "";

                        }
                        else
                        {

                            card.style.display = "none";

                        }

                    }
                );

        }



        /* =====================================================
           OPEN FOOD DETAILS
        ===================================================== */

        function openFood(card)
        {

            const titleElement =
                card.querySelector(".food-title");


            const descriptionElement =
                card.querySelector(".food-description");


            const priceElement =
                card.querySelector(".food-price");


            const imageElement =
                card.querySelector(".food-image-url");



            if(
                !titleElement ||
                !descriptionElement ||
                !priceElement
            )
            {
                return;
            }



            const title =
                titleElement.innerText;


            const description =
                descriptionElement.innerText;


            const price =
                priceElement.innerText;


            const image =
                imageElement
                ? imageElement.innerText.trim()
                : "";



            document
                .getElementById("modalTitle")
                .innerText = title;


            document
                .getElementById("modalDescription")
                .innerText = description;


            document
                .getElementById("modalPrice")
                .innerText = price;



            const modalImage =
                document.getElementById(
                    "modalImage"
                );



            if(image !== "")
            {

                modalImage.src = image;

                modalImage.style.display =
                    "block";

            }
            else
            {

                modalImage.style.display =
                    "none";

            }



            document
                .getElementById("foodModal")
                .style.display = "flex";

        }



        /* =====================================================
           CLOSE FOOD
        ===================================================== */

        function closeFood()
        {

            document
                .getElementById("foodModal")
                .style.display = "none";

        }



        /* =====================================================
           CLOSE OUTSIDE MODAL
        ===================================================== */

        function closeOutside(event)
        {

            const modal =
                document.getElementById(
                    "foodModal"
                );


            if(
                event.target === modal
            )
            {

                closeFood();

            }

        }



        /* =====================================================
           ESC KEY
        ===================================================== */

        document.addEventListener(
            "keydown",
            function(event)
            {

                if(
                    event.key === "Escape"
                )
                {

                    closeFood();

                }

            }
        );

    </script>


</body>
</html>