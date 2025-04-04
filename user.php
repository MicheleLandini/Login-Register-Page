<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Reindirizza se non è loggato
    exit();
}
?>

 <!DOCTYPE html>
<html>
<head>
<title>Pagina utente</title>
</head>
<style>
/* General card styles */
.user-card {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  border-radius: 1rem;
  background-color: white;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

/* Card cover styles */
.card-cover {
  margin-bottom: 2rem;
  height: 200px;
  background-size: cover;
  background-position: center;
  position: relative;
}

/* Avatar wrapper - positioned relative to contain the absolutely positioned avatar */
.avatar-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 95%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
}

/* Avatar styling */
.avatar {
  position: relative;
  background-color: rgba(169, 169, 169, 0.5); /* Light mode */
  padding: 0.5rem;
  background-color: rgba(97, 97, 97, 0.5); /* Dark mode */
  border-radius: 50%;
  z-index: 10;
}

.avatar-img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 3px solid white; /* Optional, adds a border for visual emphasis */
}

/* Card body styling */
.card-body {
  padding: 1.25rem;
  text-align: center;
  flex-grow: 1;
  z-index: 5;
  position: relative;
}

/* Card name styling */
.card-name {
  margin-top: 1rem;
  margin-bottom: 0.25rem;
  font-size: 1.125rem;
  font-weight: 600;
}

/* Card information styling */
.card-info {
  font-size: 0.875rem;
  font-weight: 500;
  color: #4b5563;
}

/* Dark mode styles */
body {
   background-color: #080710;  
}

body.dark-mode .user-card {
  background-color: #2d3748;
}

body.dark-mode .card-info {
  color: #cbd5e0;
}
</style>
<body>
  <div class="user-card">
    <!-- Card Cover/Avatar -->
    <div class="card-cover" style="background-image: url('https://cdn.tailkit.com/media/placeholders/photo-JgOeRuGD_Y4-800x400.jpg');">
      <div class="avatar-wrapper">
        <div class="avatar">
          <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
        </div>
      </div>
    </div>
    <!-- END Card Cover/Avatar -->

    <!-- Card Body -->
    <div class="card-body">
      <h3 class="card-name"><?php echo htmlspecialchars($_SESSION['nome_utente']); ?></h3>
      <p class="card-info">voglio ballare la samba!</p>
    </div>
    <!-- END Card Body -->
  </div>
</body>
</html> 
