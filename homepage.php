<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="wrapper">
    <aside id="sidebar">
      <div class="h-100">
        <div class="sidebar-logo">
          <a href="#">Senior Citizen Management System</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-header">
            pages
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link">
             <i class="bi bi-grid"></i> <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
           <a href="senioregistration.php" class="sidebar-link">
           <i class="bi bi-folder"></i> <span>Module 1</span>
           </a>
          </li>
          <li class="sidebar-item">
           <a href="#" class="sidebar-link">
           <i class="bi bi-folder"></i> <span>Module 2</span>
           </a>
          </li>
          <li class="sidebar-item">
           <a href="#" class="sidebar-link">
           <i class="bi bi-folder"></i> <span>Module 3</span>
           </a>
          </li>
          <li class="sidebar-item">
           <a href="#" class="sidebar-link">
           <i class="bi bi-folder"></i> <span>Module 4</span>
           </a>
          </li>
          <li class="sidebar-item">
           <a href="#" class="sidebar-link">
           <i class="bi bi-folder"></i> <span>Module 5</span>
           </a>
          </li>
          <li class="sidebar-header">
            Module with sub module
          </li>
          <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#module6" aria-expanded="false" aria-controls="module6">
            <i class="bi bi-folder"></i>
            <span>Module 6</span>
          </a>
          <ul id="module6" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Sub Module 1</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Sub Module 2</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Sub Module 3</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Sub Module 4</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Sub Module 5</a>
            </li>
          </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#module7" aria-expanded="true" aria-controls="module7">
              <i class="bi bi-folder"></i>
              <span>Module 7</span>
            </a>
            <ul id="module7" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Sub Module 1</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Sun Module 2</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">Sub Module 3</a>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </aside>
    <div class="main">
      <nav class="dashboard-navbar">
        <button type="button" class="toggle-btn">
          <i class="bi bi-list"></i>
        </button>
        <div class="navbar-content">
          <button class="theme-toggle" type="button">
         <i class="bi bi-brightness-high"></i>
        <i class="bi bi-moon-fill"></i>
        </button>
          <ul class="main-nav">
            <li class="message">
              <a href="#" class="message-na">
             <i class="bi bi-chat"></i>
              </a>
            </li>
            <li class="notif">
              <a href="#" class="notif-nav">
             <i class="bi bi-bell"></i>
              </a>
            </li>
            <li class="user-link">
              <a href="#" class="user-profile">
                <img src="image/user.jpg" alt="Profile" class="avatar">
              </a>
              <div class="user-link-dropdown">
                <a href="dropdown-item">Profile</a>
                <a href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
      </div>
      </nav>
      <main class="content">
        <div class="dashboard-container">
          <h4>Admin Dashboard</h4>
        </div>
        </div>
      </main>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="script1.js"></script>
</body>
</html>