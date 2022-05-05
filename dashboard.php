<?php include 'includes/header.php';?>

<div class= "container">
    <div id = "nav_editor">
        <div id = "left_nav">
            <img src="includes/resources/img/clarEX.png" alt="logo.png" id= "company_logo">
            <div><a href="#">Buy</a></div>
            <div><a href="#">Sell</a></div>
        </div>
        <div id = "right_nav">
            <div><a href="#">Assets</a></div>
            <div id="user_deets">
                <div id="username_and_acctval">
                    <div id = "dash_username">Username</div>
                    <div id = "dash_acctval">Acctval</div>
                </div>
                <div id = "user_prof_pics">
                    <img src="includes/resources/img/profilepics.png" alt="profile pics" id= "user_pics">
                </div>
            </div>
            <div id="notifications">
                <img src="includes/resources/img/notification.png" alt="notifications" id= "notification_pics">
            </div>

        </div>
    </div>
    <div class = "dashboard_body">
        <div id = "dashboard">
            <div id ="dash_header">Dashboard</div>
            <div id ="user_dash">
                <div id = "dash_user_acctval">
                    <div id ="user_dash_head">Account Value</div>
                    <div id ="user_dash_val">$0.00</div>
                </div>
                <div id = "dash_user_valtraded">
                    <div id ="user_dash_head">Total Value Traded</div>
                    <div id ="user_dash_val">$0.00</div>
                </div>
            </div>

        </div>    
        <div id = "assets">
            <div id ="dash_header">Assets</div>
            <div id ="asset_list">

            </div>

        </div>
    </div>


<?php include 'includes/footer.php';?>