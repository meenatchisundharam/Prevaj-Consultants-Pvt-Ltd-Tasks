<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a dynamic page using the MVC (Model-View-Controller) pattern.</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: url('https://prevaj.com/wp-content/uploads/2024/02/Homepage.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            color: white; 
        }
        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
            color: white; 
        }
        th {
            background-color: white;
            cursor: pointer;
        }
        th a {
            color: black; 
            text-decoration: none;
            display: inline-block;
            padding-bottom: 2px;
            border-bottom: 1px solid transparent;
        }
        th a:hover {
            background-color: #e0e0e0;
            text-decoration: none;
        }
        .search {
            margin: 10px 0;
            display: flex;
            justify-content: center;
        }
        .search label,
        .search input[type="text"],
        .search button {
            color: white;
        }
        .pagination {
            margin: 10px 0;
            display: flex;
            justify-content: center;
        }
        .pagination a {
            padding: 5px 10px;
            margin: 0 2px;
            cursor: pointer;
            background-color: #f2f2f2;
            border: 1px solid #dddddd;
            text-decoration: none;
            color: black; 
        }
        .pagination a:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Create a dynamic page using the MVC (Model-View-Controller) pattern.</h1>
    <p style="text-align: center;">Create a table.
Fetch data from a JSON file located in the asset directory.
Add sort and pagination features to the table.
Ensure page routers follow the sort and page query parameters.</p>

    <div class="search">
    <form action="" method="GET">
        <label for="search">Search:</label>
        <input type="text" id="search" name="search" value="<?php echo htmlspecialchars($searchTerm); ?>" style="color: black;">
        <button type="submit" style="color: black;">Search</button>
    </form>
</div>


    <table border="1">
        <thead>
            <tr>
                <th><a href="?sort=<?php echo $sort == 'asc' ? 'desc' : 'asc'; ?>&page=1&search=<?php echo urlencode($searchTerm); ?>">Name</a></th>
                <th style="color: black;">Age</th>
                <th><a href="?sort=<?php echo $sort == 'asc' ? 'desc' : 'asc'; ?>&page=1&search=<?php echo urlencode($searchTerm); ?>">City</a></th>
                <th><a href="?sort=<?php echo $sort == 'asc' ? 'desc' : 'asc'; ?>&page=1&search=<?php echo urlencode($searchTerm); ?>">Occupation</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['age']); ?></td>
                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                    <td><?php echo htmlspecialchars($row['occupation']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?sort=<?php echo $sort; ?>&page=<?php echo $i; ?>&search=<?php echo urlencode($searchTerm); ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
    </div>
</body>
</html>
