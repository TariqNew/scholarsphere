<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 10px;
        }
        .div{
            display: flex;
            justify-content: space-between;
            background-color: #fff;
        }
        .university-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .university-item {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            overflow: hidden;
            transition: background-color 0.3s;
        }

        .university-item:hover {
            background-color: #e0f7fa;
        }

        .university-image {
            flex-shrink: 0;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .university-info {
            flex-grow: 1;
            padding: 10px;
        }

        .university-name {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }

            .university-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .university-image {
                width: 100%;
                height: auto;
            }

            .university-info {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="app-bar">
        <i class="fas fa-home"></i>
        <h2>University List</h2>
    </div>
    <ul class="university-list">
        <li class="university-item">
            <img src="assets/pic-2.jpg" alt="University 1" class="university-image">
            <div class="university-info">
                <h2 class="university-name">Harvard University</h2>
            </div>
        </li>
        <li class="university-item">
            <img src="university2.jpg" alt="University 2" class="university-image">
            <div class="university-info">
                <h2 class="university-name">Stanford University</h2>
            </div>
        </li>
        <li class="university-item">
            <img src="university3.jpg" alt="University 3" class="university-image">
            <div class="university-info">
                <h2 class="university-name">MIT</h2>
            </div>
        </li>
        <!-- Add more university items here -->
    </ul>
</div>

</body>
</html>
