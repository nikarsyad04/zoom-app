<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:rgb(224, 224, 224);
        }

        li {
        float: left;
        }

        li a, .dropbtn {
        display: inline-block;
        color: grey;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
        background-color: blue;
        color: white;
        }

        li.dropdown {
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: grey;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
        display: block;
        }
</style>

<body>
    <ul>
        <li><a href="#Home">Zoom</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Products</a>
            <div class="dropdown-content">
                <a href="#Meeting">Meeting</a>
                <a href="#TeamChat">Team Chat</a>
                <a href="#Phone">Phone</a>
                <a href="#Mail">Mail & Calendar</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Solutions</a>
            <div class="dropdown-content">
                <a href="#Education">Education</a>
                <a href="#Financial">Financial Services</a>
                <a href="#Government">Government</a>
                <a href="#Healthcare">Healthcare</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Resources</a>
            <div class="dropdown-content">
                <a href="#ZoomBlog">Zoom Blog</a>
                <a href="#ResourceLibrary">Resource Library</a>
                <a href="#Webinars">Webinars & Events</a>
                <a href="#CustomerStories">Customer Stories</a>
            </div>
        </li>
        <li><a href="#Pricing">Pricing</a></li>
    </ul>
</body>
</html>