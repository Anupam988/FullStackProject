<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            margin-top: 40px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-links {
            list-style: none;
            display: flex;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-left: 15px;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .footer-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-links {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 BiteBuzz. All rights reserved.</p>
            <ul class="footer-links">
                <li><a href="#privacy">Privacy Policy</a></li>
                <li><a href="#terms">Terms of Service</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
