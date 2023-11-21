<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="securityStyles.css">
    <link rel="stylesheet" href="../commonStyle.css">

    <style>
        /* Add CSS for the main content area */
        .content {
            margin-left: 250px; /* Width of the sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>

    <nav class="sidebar">
        <a href="#" class="wordmark">
            <h1><iconify-icon icon="ion:shield"></iconify-icon> ProtectWall</h1>
        </a>

        <ul>
            <li><a href="../landing/landing.php"><iconify-icon icon="ion:apps-sharp"></iconify-icon> Status</a></li>
            <li><a class="active" href="#"><iconify-icon icon="ion:lock-closed"></iconify-icon> Security</a></li>
            <li><a href="../firewall/firewall.php"><iconify-icon icon="ion:shield-half-outline"></iconify-icon> Firewall</a></li>
        </ul>
    
        <button class="logout"><a href="../index.php">Logout</a></button>
    </nav>

     <div class="content">
        <!-- Your main content goes here -->
        <h2>URL FILTER</h2>
        <p>Please select the list type and configuration list entry can configure up to 100. </p>
    
        <!-- Container for "URL Addr Filter" -->
        <div class="radio-container">
            <label for="entry1">URL Addr Filter:</label>
            <input type="radio" id="entry1" name="listEntry" value="allow" checked>
            <label for="entry1">Disable</label>
            <input type="radio" id="entry1" name="listEntry" value="block">
            <label for="entry1">Enable</label>
        </div>
        
        <!-- Container for "Filter Mode" -->
        <div class="radio-container">
            <label for="entry2">Filter Mode:</label>
            <input type="radio" id="entry2" name="listEntry" value="allow" checked>
            <label for="entry2">Blacklist</label>
            <input type="radio" id="entry2" name="listEntry" value="block">
            <label for="entry2">White list</label>
        </div>
        
        <!-- Line separator -->
        <div class="separator"></div>

        <div class="vertical">
            <form method="POST" action="../_php/add.php">
                <label>Site Name: </label><input type="text" name="urlName">
                <label>URL: </label><input type="text" name="url">
                <input type="submit" name="add" value="Add">
            </form>
        </div>

        <table class="tableCommon">
            <thead>
                <td>Site</td>
                <td>URL</td>
                <td>Actions</td>
            </thead>
            <br>
            <tbody>

                <?php
                    include('../_php/config.php');
                    $query=mysqli_query($link, "select * from `url`");
                    while ($row = mysqli_fetch_array($query)) {
                        ?>

                        <tr>
                            <td><?php echo $row['urlName']; ?></td>
                            <td><?php echo $row['url']; ?></td>
                            <td>
                                <a href="../_php/delete.php?id=<?php echo $row ['urlID']; ?>">Delete</a>
                            </td>
                        </tr>

                        <?php
                    }
                ?>

            </tbody>
        </table>
    
   
    


    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>