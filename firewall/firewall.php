<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="firewallStyle.css">
    <link rel="stylesheet" href="../commonStyle.css">



    <nav class="sidebar">
        <a href="#" class="wordmark">
            <h1><iconify-icon icon="ion:shield"></iconify-icon> ProtectWall</h1>
        </a>

        <ul>
            <li><a href="../landing/landing.php"><iconify-icon icon="ion:apps-sharp"></iconify-icon> Status</a></li>
            <li><a href="../security/security.php"><iconify-icon icon="ion:lock-closed"></iconify-icon> Security</a></li>
            <li><a class="active" href="#"><iconify-icon icon="ion:shield-half-outline"></iconify-icon> Firewall</a></li>
        </ul>
    
        <button class="logout"><a href="../index.php">Logout</a></button>
    </nav>

    <div class="content">
        <!-- Your main content goes here -->

        <div class="vertical">
            <div>
                <h2>FIREWALL LEVEL</h2>
            </div>
        
            <!-- Dropdown with select element and arrow -->
            <div class="dropdown">
                <select class="custom-select" id="natConfiguration" onchange="selectOption()">
                    <option value="symmetric">HIGH</option>
                    <option value="portRestricted">LOW</option>
                </select>
            </div>
        </div>
        <P>Choose Firewall level, to do the relevant configurations.</P>

        <!-- Line separator -->
        <div class="separator"></div>
        
        <div class="vertical">
            <div>
                <h2>NAT TYPE</h2>
            </div>
            
            <!-- Dropdown with select element and arrow -->
            <div class="dropdown">
                <select class="custom-select" id="natConfiguration" onchange="selectOption()">
                    <option value="symmetric">SYMMETRIC</option>
                    <option value="portRestricted">PORT RESTRICTED CONE</option>
                    <option value="fullCone">FULL CONE</option>
                </select>
            </div>
        </div>

        <!-- Line separator -->
        <div class="separator"></div>
        
        <div class="add-button-container">
            <button class="add-button">Sure</button>
        </div>
    </div>
        
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>
