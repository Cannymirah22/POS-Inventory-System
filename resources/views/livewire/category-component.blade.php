<body style="background-color:rgb(201, 207, 213)">
   
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 50%; padding-right: 10px;">
                <div class="category-section">
                    <img class="category-image" src="can-food.jpeg" alt="CAN FOOD">
                    <div class="category-details">
                        <h2 class="category-title">CAN FOOD</h2>
                        <p class="category-count">10 items</p>
                        <p class="category-description">Explore our wide range of canned food products.</p>
                        <a href="#" class="category-link">View Category</a>
                    </div>
                </div>
            </td>
            <td style="width: 50%; padding-left: 10px;">
                <div class="category-section">
                    <img class="category-image" src="categories/images/snacks.jpg" alt="SNACKS">
                    <div class="category-details">
                        <h2 class="category-title">SNACKS</h2>
                        <p class="category-count">15 items</p>
                        <p class="category-description">Discover delicious snacks for your cravings.</p>
                        <a href="#" class="category-link">View Category</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%; padding-right: 10px; padding-top: 20px;">
                <div class="category-section">
                    <img class="category-image" src="frozen-food.jpg" alt="FROZEN FOOD">
                    <div class="category-details">
                        <h2 class="category-title">FROZEN FOOD</h2>
                        <p class="category-count">8 items</p>
                        <p class="category-description">Browse our selection of frozen food items.</p>
                        <a href="#" class="category-link">View Category</a>
                    </div>
                </div>
            </td>
            <td style="width: 50%; padding-left: 10px; padding-top: 20px;">
                <div class="category-section">
                    <img class="category-image" src="beverages.jpg" alt="BEVERAGES">
                    <div class="category-details">
                        <h2 class="category-title">BEVERAGES</h2>
                        <p class="category-count">20 items</p>
                        <p class="category-description">Quench your thirst with our refreshing beverage options.</p>
                        <a href="#" class="category-link">View Category</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    <style>
        .category-section {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s;
        }
    
        .category-section:hover {
            transform: translateY(-5px);
        }
    
        .category-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
    
        .category-details {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    
        .category-title {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            text-align: center;
        }
    
        .category-count {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
            text-align: center;
        }
    
        .category-description {
            color: #777;
            font-size: 16px;
            margin-bottom: 10px;
            text-align: center;
        }
    
        .category-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: rgb(52, 73, 94);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
            align-self: center;
        }
    
        .category-link:hover {
            background-color: #34495e;
        }
    </style>