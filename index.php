<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        .logo-area {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-icon {
            font-size: 3.5rem;
            color: #fff;
            margin-bottom: 20px;
            background-color: #007bff;
            width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            display: inline-block;
        }
        .main-heading {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .sub-heading {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }
        .cta-section {
            background-color: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        .action-btn {
            padding: 12px 28px;
            font-size: 1.1rem;
            font-weight: 600;
            margin: 10px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .btn-admin {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-admin:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
        .btn-user {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-user:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .btn-register {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-register:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        .card-feature {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .card-feature:hover {
            transform: translateY(-5px);
        }
        .card-icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 15px;
        }
        .card-body {
            padding: 25px;
        }
        .card-title {
            font-weight: 600;
            margin-bottom: 15px;
        }
        .features-section {
            padding: 20px 0 40px 0;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div class="hero-section text-center">
            <div class="logo-area">
                <span class="logo-icon">
                    <i class="fas fa-coffee"></i>
                </span>
            </div>
            <h1 class="main-heading">RS Cafe</h1>
            <p class="sub-heading">Streamline your cafe operations with our comprehensive management solution. Manage orders, track inventory, and delight your customers with a seamless experience.</p>
        </div>
        
        <div class="cta-section text-center">
            <h2 class="mb-4">Get Started Today</h2>
            <div>
                <a href="admin/login.php" class="btn btn-primary action-btn btn-admin">
                    <i class="fas fa-user-shield mr-2"></i>Admin Login
                </a>
                <a href="user/login.php" class="btn btn-secondary action-btn btn-user">
                    <i class="fas fa-user mr-2"></i>User Login
                </a>
                <a href="user/register.php" class="btn btn-success action-btn btn-register">
                    <i class="fas fa-user-plus mr-2"></i>New User? Register
                </a>
            </div>
        </div>
        
        <div class="features-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-feature">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h5 class="card-title">Delicious Menu</h5>
                            <p class="card-text">Browse our extensive menu offerings with detailed descriptions and prices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h5 class="card-title">Easy Ordering</h5>
                            <p class="card-text">Place orders quickly and easily with our intuitive ordering system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-feature">
                        <div class="card-body text-center">
                            <div class="card-icon">
                                <i class="fas fa-history"></i>
                            </div>
                            <h5 class="card-title">Order History</h5>
                            <p class="card-text">Track your past orders and quickly reorder your favorite items.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <p>&copy; 2025 Cafe Management System. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>