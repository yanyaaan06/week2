<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD System - Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="home-page">
            <h1>CRUD System</h1>
            <p class="subtitle">Employee and Product Management System</p>
            
            <div class="card-grid">
                <div class="card">
                    <h2>Employees</h2>
                    <p>Manage employee records, including personal information, employment details, and status.</p>
                    <div class="card-actions">
                        <a href="employees/index.php" class="btn btn-primary">Manage Employees</a>
                    </div>
                </div>
                
                <div class="card">
                    <h2>Products</h2>
                    <p>Manage product inventory, pricing, stock levels, and product information.</p>
                    <div class="card-actions">
                        <a href="products/index.php" class="btn btn-primary">Manage Products</a>
                    </div>
                </div>
            </div>
            
            <div class="info-section">
                <h2>Features</h2>
                <ul class="features-list">
                    <li>✓ Secure database operations using prepared statements</li>
                    <li>✓ Input validation and sanitization</li>
                    <li>✓ Soft delete and hard delete options</li>
                    <li>✓ Search and filter functionality</li>
                    <li>✓ Responsive and modern UI</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
