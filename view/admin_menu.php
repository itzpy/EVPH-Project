<div class="form-container">
  <h2>Add a New Menu Item</h2>
  <form id="adminMenuForm" action="../functions/admin_menu.php" method="post">
    <label for="name">Item Name:</label>
    <div class="input-icon">
      <ion-icon name="restaurant-outline"></ion-icon>
      <input type="text" id="name" name="name" placeholder="Enter item name" required />
    </div>
    <span id="nameError" class="error"></span>

    <label for="description">Description:</label>
    <div class="input-icon">
      <ion-icon name="document-text-outline"></ion-icon>
      <input type="text" id="description" name="description" placeholder="Enter item description" required />
    </div>
    <span id="descriptionError" class="error"></span>

    <label for="price">Price:</label>
    <div class="input-icon">
      <ion-icon name="pricetag-outline"></ion-icon>
      <input type="number" id="price" name="price" step="0.01" placeholder="Enter item price" required />
    </div>
    <span id="priceError" class="error"></span>

    <button type="submit">Add Item</button>
  </form>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
  document.getElementById("adminMenuForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const description = document.getElementById("description").value.trim();
    const price = document.getElementById("price").value.trim();

    const nameError = document.getElementById("nameError");
    const descriptionError = document.getElementById("descriptionError");
    const priceError = document.getElementById("priceError");

    nameError.textContent = "";
    descriptionError.textContent = "";
    priceError.textContent = "";

    let valid = true;

    if (name === "") {
      nameError.textContent = "Item name cannot be empty.";
      valid = false;
    }

    if (description === "") {
      descriptionError.textContent = "Description cannot be empty.";
      valid = false;
    }

    if (price === "" || isNaN(price) || price <= 0) {
      priceError.textContent = "Please enter a valid price.";
      valid = false;
    }

    if (valid) {
      alert("Item added successfully!");
      // Add actual submission logic here
    }
  });
</script>

<style>
  .form-container {
    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .form-container h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #722F37;
  }

  .input-icon {
    display: flex;
    align-items: center;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 15px;
  }

  .input-icon ion-icon {
    color: #722F37;
    margin-right: 10px;
  }

  .input-icon input {
    border: none;
    outline: none;
    width: 100%;
    padding: 10px;
    font-size: 16px;
  }

  .error {
    color: red;
    font-size: 14px;
    display: block;
    margin-bottom: 10px;
  }

  button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #722F37;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #e14b4e;
  }
</style>


