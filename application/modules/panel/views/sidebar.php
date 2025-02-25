<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&family=Poppins:wght@300;400;500;600;700&display=swap");

* {
  font-family: "Poppins", "sans-sarif";
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.sidebar .text {
  font-size: 16px;
  font-weight: 500;
  color: #707070;
  white-space: unset;
  opacity: 1;
}

.sidebar .image {
  min-width: 60px;
  display: flex;
  align-items: center;
}

.sidebar {
  position: relative;
  top: 0;
  left: 0px;
  height: 100%;
  width: 250px;
  background-color: #fff;
  padding: 11px 11px;
  transition: all 0.5s ease;
}

.sidebar header {
  position: relative;
}

.sidebar .image-text img {
  width: 40px;
  height: 40px;
  border-radius: 10px;
}

.sidebar header .image-text {
  display: flex;
  align-items: center;
}

.header .image-text .header-text {
  display: flex;
  flex-direction: column;
}

.header-text .main {
  font-weight: 600;
}

.header-text .sub {
  margin-top: -2px;
}

.sidebar header .toggle {
  position: absolute;
  top: 50%;
  right: -25px;
  transform: translateY(-50%) rotate(180deg);
  height: 25px;
  width: 25px;
  background-color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: #fff;
  font-size: 22px;
}

.sidebar li {
  height: 50px;
  margin-top: 10px;
  list-style: none;
  display: flex;
  align-items: center;
}

.sidebar li .icons {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 60px;
  font-size: 20px;
}

.sidebar li .icons,
.sidebar li .text {
  color: #707070;
  transition: all 0.3s ease;
}

.sidebar .search-bar input {
  width: 100%;
  height: 100%;
  outline: none;
  border: none;
  border-radius: 6px;
  background-color: #f4f2f2;
}

.sidebar .search-bar {
  background-color: #f4f2f2;
}

.sidebar li a {
  height: 100%;
  width: 100%;
  text-decoration: none;
  display: flex;
  align-items: center;
  padding-right: 50px;
  border-radius: 6px;
  transition: all 0.4s ease;
  text-align: left;
}

.sidebar li a:hover {
  background-color: green;
}

.sidebar li a:hover .icons,
.sidebar li a:hover .text {
  color: #000;
}

.sidebar .menu-bar {
  height: 100%;
  height: calc(100% - 50px);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.switch::before {
  content: "";
  position: absolute;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
}

.sidebar.close {
  width: 78px;
}

.sidebar.close .text {
  opacity: 0;
}

.sidebar.close .search-bar {
  background-color: #fff;
}

.sidebar.close .image .leaf_logo_full {
  display: none;
}
 .leaf_logo {
 opacity:0;
  margin-left:5px;
transition:0.5s ease;

}
.sidebar.close  .leaf_logo {
opacity:1;
transition:0.5s ease;
}

.sidebar.close .icons {
font-size:25px;
}


body.dark .search-bar input {
  color: white;
}

.sidebar.close .toggle {
  transform: translateY(-50%);
}
</style>
<body>
<link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />  
<nav class="sidebar">
      <header>
        <div class="image-text">
          <span class="image">
          <img src="assets/images/logo.png" alt="Logo" class="leaf_logo_full" style="width: 100%; height: 50px;">
          <img src="assets/images/leaf_logo.png" alt="Logo" class="leaf_logo" style="width: 40px; height: 50px;">
          </span>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
 <div class="menu">
          <ul class="menu-links">
            <li class="search-bar">
              <i class="bx bx-search icons"></i>
              <input type="search" placeholder="Search..." />
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-home-alt icons"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bar-chart-alt-2 icons"></i> 
                <span class="text nav-text">Our Products</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bell icons"></i>
                <span class="text nav-text">Our Product List</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="">
                <i class="bx bx-pie-chart-alt icons"></i>
                <span class="text nav-text">Feature Products</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">      
                <i class="bx bx-heart icons"></i>
                <span class="text nav-text">Feature Products List</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <i class="bx bx-wallet-alt icons"></i>
                <span class="text nav-text">Wallets</span>  
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="nav-link">
            <a href="#">
              <i class="bx bx-log-out icons"></i>
              <span class="text nav-text">LogOut</span>
            </a>
          </li>
        </div>
      </div>
    </nav>
</body>
<script>
    const body = document.querySelector("body"),
      sidebar = document.querySelector(".sidebar"),
      toggle = document.querySelector(".toggle"),
      searchBtn = document.querySelector(".search-bar");

    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });

    searchBtn.addEventListener("click", () => {
      sidebar.classList.remove("close");
    });
</script>
</html>