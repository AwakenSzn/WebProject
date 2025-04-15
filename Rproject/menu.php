<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spice & Sizzle Kitchen</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <div class="main">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li class="active"><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="L.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--end of nav bar->

    <!- Meal Customizer Section -->
    <div class="container">
        <h1>Spice & Sizzle Meal Customizer</h1>

        <div class="section">
            <label for="base">Choose Your Base</label>
            <select id="base" onchange="updateSummary()">
                <option value="rice">Brown Rice</option>
                <option value="quinoa">Quinoa</option>
                <option value="noodles">Noodles</option>
                <option value="couscous">Couscous</option>
                <option value="ugali">Ugali</option>
                <option value="chapati">Chapati</option>
                <option value="pasta">Pasta</option>
            </select>

            <label for="protein">Choose Your Protein</label>
            <select id="protein" onchange="updateSummary()">
                <option value="chicken">Grilled Chicken</option>
                <option value="tofu">Tofu</option>
                <option value="beef">Beef</option>
                <option value="shrimp">Shrimp</option>
                <option value="pork">Pork</option>
                <option value="beans">Beans</option>
                <option value="eggs">Eggs</option>
            </select>

            <label>Vegetables</label>
            <input type="checkbox" id="peppers" onchange="updateSummary()"> Bell Peppers<br>
            <input type="checkbox" id="carrots" onchange="updateSummary()"> Carrots<br>
            <input type="checkbox" id="spinach" onchange="updateSummary()"> Spinach<br>

            <label for="sauce">Choose Your Sauce</label>
            <select id="sauce" onchange="updateSummary()">
                <option value="spicy">Spicy Garlic</option>
                <option value="teriyaki">Teriyaki</option>
                <option value="yogurt">Yogurt Mint</option>
            </select>
        </div>

        <div class="section summary">
            <h3>Meal Summary</h3>
            <p><strong>Total Calories:</strong> <span id="calories">0</span></p>
            <p><strong>Protein:</strong> <span id="proteinVal">0</span>g</p>
            <p><strong>Fat:</strong> <span id="fat">0</span>g</p>
            <p><strong>Carbs:</strong> <span id="carbs">0</span>g</p>
            <p><strong>Total Price:</strong> KES <span id="price">0.00</span></p>
        </div>

        <button class="btn" onclick="submitOrder()">Submit Order</button>
    </div>

    <script>
        const data = {
      base: {
        rice: { cal: 200, protein: 4, fat: 1, carbs: 45, price: 120 },
        quinoa: { cal: 180, protein: 6, fat: 2, carbs: 39, price: 150 },
        noodles: { cal: 250, protein: 7, fat: 3, carbs: 55, price: 180 },
        couscous: { cal: 220, protein: 5, fat: 1, carbs: 46, price: 140 },
        ugali: {cal: 178, protein: 4, fat: 2, carbs: 38, price: 60 },
        chapati: {cal: 120, protein: 4, fat: 4, carbs: 18, price: 30 },
        pasta: {cal: 200, protein: 5, fat: 2, carbs: 25, price: 200 },
      },
      protein: {
        chicken: { cal: 165, protein: 31, fat: 3.5, carbs: 0, price: 300 },
        tofu: { cal: 95, protein: 10, fat: 6, carbs: 2, price: 250 },
        beef: { cal: 250, protein: 26, fat: 20, carbs: 0, price: 350 },
        shrimp: { cal: 100, protein: 20, fat: 1, carbs: 1, price: 330 },
        pork: { cal: 297, protein: 26, fat: 20, carbs: 0, price: 150 },
        beans: { cal:227 , protein: 15, fat: 1, carbs: 41, price: 70 },
        eggs: { cal: 78, protein: 6, fat: 5, carbs: 1, price: 40 },
      },
      vegetables: {
        peppers: { cal: 25, protein: 1, fat: 0, carbs: 6, price: 50 },
        carrots: { cal: 30, protein: 1, fat: 0, carbs: 7, price: 50 },
        spinach: { cal: 20, protein: 2, fat: 0, carbs: 3, price: 40 }
      },
      sauce: {
        spicy: { price: 30 },
        teriyaki: { price: 50 },
        yogurt: { price: 40 }
      }
    };

    function updateSummary() {
      const base = document.getElementById('base').value;
      const protein = document.getElementById('protein').value;
      const sauce = document.getElementById('sauce').value;
      const veggies = ['peppers', 'carrots', 'spinach'].filter(id => document.getElementById(id).checked);

      let cal = data.base[base].cal + data.protein[protein].cal;
      let proteinVal = data.base[base].protein + data.protein[protein].protein;
      let fat = data.base[base].fat + data.protein[protein].fat;
      let carbs = data.base[base].carbs + data.protein[protein].carbs;
      let price = data.base[base].price + data.protein[protein].price + data.sauce[sauce].price;

      veggies.forEach(v => {
        cal += data.vegetables[v].cal;
        proteinVal += data.vegetables[v].protein;
        fat += data.vegetables[v].fat;
        carbs += data.vegetables[v].carbs;
        price += data.vegetables[v].price;
      });

      document.getElementById('calories').textContent = cal;
      document.getElementById('proteinVal').textContent = proteinVal;
      document.getElementById('fat').textContent = fat;
      document.getElementById('carbs').textContent = carbs;
      document.getElementById('price').textContent = price.toFixed(2);
    }

    function submitOrder() {
      alert("Thank you for dining with us!");
    }

    window.onload = updateSummary;
    </script>
</body>
</html>