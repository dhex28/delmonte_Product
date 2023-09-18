<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <!-- Use Bootstrap Slate theme CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <!-- Custom CSS for form style and centering -->
    <style>
        /* Example custom styles for the form */
        .custom-form {
            background-color: #333; /* Dark background color */
            color: #fff; /* Text color */
            padding: 20px;
            border-radius: 10px;
        }
        
        .custom-form .form-group label {
            color: #fff; /* Label text color */
        }
        
        .custom-form .form-control {
            background-color: #444; /* Input background color */
            color: #fff; /* Input text color */
            border-color: #555; /* Input border color */
        }
        
        .custom-form .btn-primary {
            background-color: #007bff; /* Primary button background color */
            border-color: #007bff; /* Primary button border color */
        }
        
        .custom-form .btn-primary:hover {
            background-color: #0056b3; /* Primary button hover background color */
            border-color: #0056b3; /* Primary button hover border color */
        }

        /* Center the form both horizontally and vertically */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Make the container at least the height of the viewport */
        }

        /* Adjust form width */
        .small-form {
            max-width: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="custom-form small-form">
            <h1 class="text-center">Add Product</h1>
            <form action="/products/store" method="post">
                <div class="form-group">
                    <label for="UPC">UPC:</label>
                    <input type="text" class="form-control" name="UPC" id="UPC" required>
                </div>

                <div class="form-group">
                    <label for="ProductName">Product Name:</label>
                    <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                </div>

                <div class="form-group">
                    <label for="Price">Price:</label>
                    <input type="text" class="form-control" name="Price" id="Price" required>
                </div>

                <div class="form-group">
                    <label for="Quantity">Quantity:</label>
                    <input type="text" class="form-control" name="Quantity" id="Quantity" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Create Product</button>
            </form>
        </div>
    </div>
    <!-- Add Bootstrap JS and Popper.js if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
