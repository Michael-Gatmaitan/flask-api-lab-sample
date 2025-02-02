<!-- <html> -->
<!-- <head> -->
<!-- <title><?php echo $title; ?></title> -->
<!-- <script src="modernizr-1.5.js"></script> -->
<!-- <link href="styles.css" type="text/css" rel="stylesheet" /> -->
<!-- <meta charset="utf-8" /> -->
<!---->
<!-- </head> -->
<!-- <body> -->
<!-- <div id="container"> -->
<!-- <header> -->
<!-- <img src="images/banner.png" alt="World War I" style="border: none"/> -->
<!-- <nav> -->
<!--     <ul> -->
<!--     <a href="index.htm"><li><span>Home</span></li></a> -->
<!--     <a href="1914.htm"><li><span>1914</span></li></a> -->
<!--     <a href="1915.htm"><li><span>1915</span></li></a> -->
<!--     <a href="1916.htm"><li><span>1916</span></li></a> -->
<!--     <a href="1917.htm"><li><span>1917</span></li></a> -->
<!--     <a href="1918.htm"><li><span>1918</span></li></a> -->
<!--     </ul> -->
<!-- </nav> -->
<!-- </header> -->
<!-- <section> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>

  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/nav.css">
    <script src="./scripts/toggle.js"></script>
</head>

<body>
    <nav>
        <button onclick="toggleSidebar()">
            <img src="./public/menu.png" alt="menu">
        </button>
    </nav>

    <div class="sidebar">
        <div class="logo">
            <img src="./public/P.O.S_LOGO 1.png" alt="logo">
        </div>

        <a href="/flask-api-lab-sample/">
            <button class="sidebar-btn">
                <img src="./public/KAPE IBARRA POS/add.png" alt="add">
                <p>Add item</p>
            </button>
        </a>

        <a href="/flask-api-lab-sample/display_items.html">
            <button class="sidebar-btn">
                <img src="./public/KAPE IBARRA POS/list.png" alt="list">
                <p>Item list</p>
            </button>
        </a>
    </div>

    <div class="content">
