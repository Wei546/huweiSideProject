<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <script
      src="https://kit.fontawesome.com/3033a8eae9.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./travelWeb.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <nav class="leftBar">
        <ul>
          <li>
            <i class="fa-solid fa-list" style="font-size: 1em"></i>
          </li>
          <li>
            <i class="fa-solid fa-magnifying-glass" style="font-size: 1em"></i>
          </li>
        </ul>
      </nav>
      <h1>雲林遊</h1>
      <nav class="rightBar">
        <ul>
          <li><i class="fa-solid fa-user"></i></li>
          <li><i class="fa-solid fa-circle-info"></i></li>
          <li><i class="fa-solid fa-circle-question"></i></li>
        </ul> 
      </nav>
    </header>
    <div class="searchBar">
      <i class="fa-solid fa-circle-xmark"></i>
      <input type="text">
    </div>
    <aside>
      <ul>
        <li>虎尾鎮</li>
        <li>虎尾鎮</li>
        <li>虎尾鎮</li>
      </ul>
    </aside>
    <form action="./template.php" method="POST" name="regionIntro">
    <article>
      <section id="sec1">
        <img src="./sideProPic/二崙鄉.jpg" alt="" />
        <img src="./sideProPic/元長鄉.jpg" alt="" />
        <img src="./sideProPic/四湖鄉.jpg" alt="" />
        <img src="./sideProPic/土庫鎮.jpg" alt="" />
      </section>
      <section id="sec2">
        <img src="./sideProPic/北港鎮.jpg" alt="" />
        <img src="./sideProPic/口湖鄉.jpg" alt="" />
        <img src="./sideProPic/大埤鄉.jpg" alt="" />
        <img src="./sideProPic/崙背鄉.jpg" alt="" />
      </section>
      <section id="sec3">
        <img src="./sideProPic/古坑鄉.jpg" alt="" />
        <img src="./sideProPic/台西鄉.jpg" alt="" />
        <img src="./sideProPic/斗六市.jpg" alt="" />
        <img src="./sideProPic/斗南鎮.jpg" alt="" />
      </section>
      <section id="sec4">
        <img src="./sideProPic/東勢鄉.jpg" alt="" />
        <img src="./sideProPic/林內鄉.jpg" alt="" />
        <img src="./sideProPic/水林鄉.jpg" alt="" />
        <img src="./sideProPic/莿桐鄉.jpg" alt="" />
      </section>
      <section id="sec5">
        <img src="./sideProPic/虎尾鎮.jpg" alt="" />
        <img src="./sideProPic/褒忠鄉.jpg" alt="" />
        <img src="./sideProPic/西螺鎮.jpg" alt="" />
        <img src="./sideProPic/麥寮鄉.jpg" alt="" />
      </section>
    </article>
    </form>
    <hr>
    <form action="./template.php" method="POST">
      <footer>
          <textarea name="response" id="" cols="30" rows="10"></textarea>
          <div>
            <button>submit</button>
          </div>    
      </footer>
    </form>
    <script src="./travelWeb.js"></script>
  </body>
</html>
