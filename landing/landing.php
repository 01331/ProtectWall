<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="landingStyle.css">
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
            <li><a class="active" href="#"><iconify-icon icon="ion:apps-sharp"></iconify-icon> Status</a></li>
            <li><a href="../security/security.php"><iconify-icon icon="ion:lock-closed"></iconify-icon> Security</a></li>
            <li><a href="../firewall/firewall.php"><iconify-icon icon="ion:shield-half-outline"></iconify-icon> Firewall</a></li>
        </ul>
    
        <button class="logout"><a href="../index.php">Logout</a></button>    
    </nav>

    <div class="content">
        <!-- Your main content goes here -->
        <h2>Device Information</h2>
        <p>Basic Device Information</p>


        <table class="tableCommon">
            <thead>
                <tr>
                    <td>Device Name</td>
                    <td>EC511-G-R331</td>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>Model ID</td>
                    <td>EC511-G-R331</td>
                </tr>
                <tr>
                    <td>PON MAC</td>
                    <td>70a56aabe096</td>
                <tr>
                    <td>Hardware Version</td>
                    <td>R331.1B</td>
                </tr>
                <tr>
                    <td>Sotware Version</td>
                    <td>V2.4.11EEE_X288</td>
                </tr>
                <tr>
                    <td>GPON SN</td>
                    <td>DC316AABE096</td>
                </tr>
                <tr>
                    <td>Build Information</td>
                    <td>Build.1453.220422</td>
                </tr>

            </tbody>
        </table>
        <br>
 
        <h2>Internet Information</h2>
        <p>Basic Internet Information</p>


        <table class="tableCommon">
            <thead>
                <tr>
                    <td>Interface</td>
                    <td>VLAN ID</td>
                    <td>Protocol</td>
                    <td>IGMP</td>
                    <td>Status</td>
                    <td>IP address</td>
                    <td>Subnet Mask</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1_INTERNET_R_VID_1338</td>
                    <td>1338</td>
                    <td>IPoE</td>
                    <td>Enable</td>
                    <td>up</td>
                    <td>10.35.42.167</td>
                    <td>255.255.0.0</td>
                </tr>
                </tr>
                <tr>
                    <td>255.255.0.0</td>
                    <td>799</td>
                    <td>IPoE</td>
                    <td>Disable</td>
                    <td>up</td>
                    <td>10.128.42.189</td>
                    <td>255.255.0.0</td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>
</html>