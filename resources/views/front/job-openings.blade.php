<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>5Core Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="footer.css">

</head>
<body>

  <style>
    /* Reset & Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: #F8FAFC;
  overflow-x: hidden;
}

/* Layout */
.dashboard {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  position: relative;
}

/* Futuristic Neon Sidebar Styles */
.cyber-sidebar {
  width: 100%;
  height: auto;
  background-color: #0D0221;
  background-image: 
    linear-gradient(rgba(5, 217, 232, 0.03) 1px, transparent 1px),
    linear-gradient(90deg, rgba(5, 217, 232, 0.03) 1px, transparent 1px);
  background-size: 20px 20px;
  border-right: 1px solid rgba(5, 217, 232, 0.3);
  box-shadow: 0 0 30px rgba(210, 0, 197, 0.2);
  font-family: 'Rajdhani', 'Arial Narrow', sans-serif;
  z-index: 1000;
  position: relative;
}

.cyber-grid {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: 
    radial-gradient(circle at center, transparent 95%, rgba(5, 217, 232, 0.1) 100%);
  pointer-events: none;
  z-index: 0;
}

.cyber-logo {
  padding: 20px;
  text-align: center;
  position: relative;
  z-index: 2;
}

.holographic-logo {
  width: 120px;
  filter: drop-shadow(0 0 10px rgba(5, 217, 232, 0.7));
  transition: all 0.5s ease;
  position: relative;
  z-index: 2;
}

.neon-pulse {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 200px;
  height: 100px;
  background: var(--neon-color, #05D9E8);
  border-radius: 50%;
  filter: blur(30px);
  opacity: 0.3;
  animation: pulse 4s infinite alternate;
  z-index: 1;
}

@keyframes pulse {
  0% { opacity: 0.1; width: 200px; height: 100px; }
  50% { opacity: 0.4; width: 220px; height: 110px; }
  100% { opacity: 0.1; width: 200px; height: 100px; }
}

.cyber-menu {
  padding: 10px;
  position: relative;
  z-index: 2;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.cyber-menu-item {
  display: flex;
  align-items: center;
  padding: 12px 15px;
  margin: 5px;
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  border-left: 2px solid transparent;
  background: rgba(13, 2, 33, 0.7);
  border-radius: 8px;
  flex: 1 1 150px;
  max-width: 200px;
}

.cyber-menu-item:hover {
  color: white;
  background: rgba(255, 255, 255, 0.05);
  border-left: 2px solid var(--neon-color);
  box-shadow: 0 0 15px rgba(5, 217, 232, 0.1);
  transform: translateX(5px);
}

.menu-icon {
  margin-right: 10px;
  font-size: 16px;
  color: var(--neon-color);
  text-shadow: 0 0 5px var(--neon-color);
  width: 20px;
  text-align: center;
}

.menu-text {
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.5px;
  flex-grow: 1;
}

.neon-line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 1px;
  background: var(--neon-color);
  box-shadow: 0 0 5px var(--neon-color);
  transition: all 0.3s ease;
  opacity: 0;
}

.cyber-menu-item:hover .neon-line {
  opacity: 1;
  width: 100%;
}

.cyber-footer {
  margin-top: auto;
  padding: 15px;
  position: relative;
  z-index: 2;
}

.scanline {
  height: 1px;
  background: linear-gradient(90deg, 
    transparent, 
    rgba(5, 217, 232, 0.8), 
    transparent);
  margin-bottom: 10px;
  animation: scan 3s linear infinite;
}

@keyframes scan {
  0% { transform: translateX(-100%); }
  100% { transform: translateX(100%); }
}

.cyber-text {
  color: rgba(5, 217, 232, 0.8);
  font-size: 10px;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-align: center;
  text-shadow: 0 0 5px rgba(5, 217, 232, 0.5);
}

/* Glow effects for active/hover */
.cyber-menu-item:hover .menu-icon,
.cyber-menu-item.active .menu-icon {
  animation: neon-flicker 1.5s infinite alternate;
}

@keyframes neon-flicker {
  0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
    text-shadow: 
      0 0 5px var(--neon-color),
      0 0 10px var(--neon-color),
      0 0 20px var(--neon-color);
  }
  20%, 24%, 55% {
    text-shadow: none;
  }
}

/* Main Content */
.main-content {
  flex: 1;
  width: 100%;
  overflow-y: auto;
  min-height: 100vh;
}

/* Hide all sections by default */
.content-section {
  display: none !important;
}

/* Only show active section */
.content-section.active-section {
  display: flex !important;
  flex-direction: column;
}

/* Video Banner Section */
.video-banner {
  position: relative;
  width: 100%;
  height: 40vh;
  overflow: hidden;
}

.video-banner video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(42, 45, 62, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  z-index: 1;
}

.welcome-text {
  position: relative;
  z-index: 2;
  max-width: 800px;
  padding: 20px;
}

.welcome-text h1 {
  font-size: 28px;
  margin-bottom: 15px;
  font-weight: 700;
  line-height: 1.2;
  color: white;
  text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.welcome-text h1 span {
  background: linear-gradient(90deg, #FF6B6B 0%, #4ECDC4 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-shadow: none;
}

.welcome-text p {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 15px;
  color: rgba(255, 255, 255, 0.9);
  text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
}

/* Careers Section */
.careers-section {
  background: white;
  padding: 40px 0;
}

.careers-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
  text-align: center;
}

.careers-section h2 {
  font-size: 28px;
  color: #2A2D3E;
  margin-bottom: 15px;
  font-weight: 700;
}

.careers-intro {
  font-size: 16px;
  color: #555;
  max-width: 800px;
  margin: 0 auto 30px;
  line-height: 1.6;
}

.divider {
  height: 1px;
  background: linear-gradient(90deg, transparent, #e63946, transparent);
  width: 80px;
  margin: 20px auto;
}

.values-title {
  font-size: 24px;
  color: #2A2D3E;
  margin-bottom: 10px;
}

.values-subtitle {
  font-size: 14px;
  color: #777;
  margin-bottom: 30px;
}

.values-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  margin-top: 30px;
}

.value-card {
  background: #F8FAFC;
  border-radius: 8px;
  padding: 20px 15px;
  transition: all 0.3s ease;
}

.value-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.value-icon {
  font-size: 28px;
  color: #e63946;
  margin-bottom: 15px;
}

.value-card h4 {
  font-size: 18px;
  color: #2A2D3E;
  margin-bottom: 10px;
}

.value-card p {
  font-size: 14px;
  color: #666;
  line-height: 1.5;
}

/* See All Openings Button */
.see-all-btn {
  display: inline-block;
  margin-top: 30px;
  padding: 10px 25px;
  background-color: #e63946;
  color: white;
  border: none;
  border-radius: 30px;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(230, 57, 70, 0.3);
}

.see-all-btn:hover {
  background-color: #d62828;
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(230, 57, 70, 0.4);
}

/* Teams Section */
.team-section {
  text-align: center;
  padding: 40px 20px;
  background: white;
}

.team-container {
  max-width: 1200px;
  margin: 0 auto;
}

.team-title {
  font-weight: 700;
  font-size: 28px;
  color: #2A2D3E;
  margin-bottom: 10px;
}

.team-subtitle {
  color: #555;
  font-size: 16px;
  margin-bottom: 30px;
}

.team-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin-top: 20px;
}

.team-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 120px;
}

.team-item img {
  width: 80px;
  height: 80px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid transparent;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}

.team-item img:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  border: 3px solid #e63946;
}

.team-label {
  font-weight: 600;
  font-size: 14px;
  color: #2A2D3E;
  margin-top: 10px;
}

/* Awards Showcase */
.awards-showcase {
  padding: 40px 0;
  background: white;
  text-align: center;
}

.section-title {
  font-size: 28px;
  color: #2A2D3E;
  margin-bottom: 20px;
  font-weight: 700;
}

.awards-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 20px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.award-item {
  background: #F8FAFC;
  border-radius: 8px;
  padding: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 150px;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  cursor: pointer;
}

.award-item:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.award-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
  filter: grayscale(20%);
  transition: filter 0.3s ease;
}

.award-item:hover .award-image {
  filter: grayscale(0%);
}

/* Modal for Award Images */
.modal {
  display: none;
  position: fixed;
  z-index: 2000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.9);
  overflow: auto;
}

.modal-content {
  margin: auto;
  display: block;
  max-width: 90%;
  max-height: 90%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.close {
  position: absolute;
  top: 15px;
  right: 25px;
  color: #f1f1f1;
  font-size: 30px;
  font-weight: bold;
  transition: 0.3s;
  cursor: pointer;
}

.close:hover {
  color: #e63946;
}

/* Memories Gallery Section */
.memories-section {
  padding: 40px 0;
  background: #F8FAFC;
}

.section-title {
  font-size: 28px;
  color: #2A2D3E;
  margin-bottom: 10px;
  font-weight: 700;
  text-align: center;
}

.section-subtitle {
  font-size: 16px;
  color: #555;
  text-align: center;
  max-width: 700px;
  margin: 0 auto 30px;
  line-height: 1.6;
}

.gallery-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 15px;
}

.gallery-item {
  position: relative;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  aspect-ratio: 4/3;
  transition: all 0.3s ease;
}

.gallery-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.gallery-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.gallery-item:hover .gallery-image {
  transform: scale(1.05);
}

.image-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
  padding: 20px 15px 15px;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.gallery-item:hover .image-overlay {
  opacity: 1;
}

.image-caption {
  color: white;
  font-size: 16px;
  font-weight: 500;
  display: block;
  transform: translateY(20px);
  transition: transform 0.3s ease;
}

.gallery-item:hover .image-caption {
  transform: translateY(0);
}

/* Job Cards Grid */
.jobs-container {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.job-card {
  background: white;
  border-radius: 10px;
  padding: 15px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;
  gap: 15px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  width: 100%;
}

.job-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.1);
}

.job-info {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.job-info h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 8px;
  color: #2A2D3E;
}

.job-info p {
  font-size: 14px;
  color: #555;
  margin: 3px 0;
}

.job-info button {
  margin-top: 10px;
  background-color: #e63946;
  color: white;
  padding: 8px 14px;
  border: none;
  border-radius: 6px;
  font-weight: 500;
  cursor: pointer;
  width: fit-content;
  font-size: 14px;
}

.job-info button:hover {
  background-color: #d62828;
}

.job-image img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  margin: 0 auto;
}

/* Team Section */
.teams-section {
  background: #F8FAFC;
  padding: 40px 0;
  text-align: center;
}

.teams-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.teams-section h2 {
  font-size: 28px;
  color: #2A2D3E;
  margin-bottom: 10px;
  font-weight: 700;
}

.teams-subtitle {
  font-size: 16px;
  color: #555;
  max-width: 800px;
  margin: 0 auto 30px;
  line-height: 1.6;
}

.teams-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 20px;
  margin-top: 30px;
}

.team-card {
  background: white;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}

.team-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

.team-icon {
  font-size: 28px;
  color: #e63946;
  margin-bottom: 15px;
}

.team-card h3 {
  font-size: 18px;
  color: #2A2D3E;
  margin-bottom: 10px;
}

.team-card p {
  font-size: 14px;
  color: #666;
  line-height: 1.5;
}

/* Hamburger Menu Styles */
.hamburger-menu {
  display: none;
  background: transparent;
  border: none;
  width: 40px;
  height: 40px;
  position: fixed;
  top: 15px;
  left: 15px;
  z-index: 1001;
  cursor: pointer;
  flex-direction: column;
  justify-content: space-around;
  padding: 5px;
}

.hamburger-menu span {
  display: block;
  width: 100%;
  height: 3px;
  background-color: var(--neon-color, #05D9E8);
  transition: all 0.3s ease;
  box-shadow: 0 0 5px var(--neon-color, #05D9E8);
}

/* Mobile styles */
@media (max-width: 767px) {
  .hamburger-menu {
    display: flex !important; /* Force show on mobile */
  }
  
  .cyber-sidebar {
    position: fixed;
    width: 280px;
    height: 100vh;
    transform: translateX(-100%);
    transition: transform 0.3s ease;
    z-index: 1000;
  }
  
  .mobile-sidebar-open .cyber-sidebar {
    transform: translateX(0);
    box-shadow: 5px 0 15px rgba(0,0,0,0.3);
  }
  
  .hamburger-menu {
    display: flex !important;
  }
  
  .hamburger-menu.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  
  .hamburger-menu.active span:nth-child(2) {
    opacity: 0;
  }
  
  .hamburger-menu.active span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }
  
  /* Add overlay when sidebar is open */
  .mobile-sidebar-open::after {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.5);
    z-index: 999;
    pointer-events: auto;
  }
}

/* Tablet Styles */
@media (min-width: 768px) {
  .dashboard {
    flex-direction: row;
  }
  
  .cyber-sidebar {
    width: 280px;
    height: 100vh;
    position: fixed;
    transform: translateX(0) !important;
  }
  
  .main-content {
    margin-left: 280px;
    width: calc(100% - 280px);
  }

  .cyber-menu {
    flex-direction: column;
    padding: 20px;
  }

  .cyber-menu-item {
    flex: 0 0 auto;
    max-width: none;
    margin-bottom: 8px;
  }

  .holographic-logo {
    width: 180px;
  }

  .hamburger-menu {
    display: none !important;
  }

  .video-banner {
    height: 60vh;
  }

  .welcome-text h1 {
    font-size: 42px;
  }

  .welcome-text p {
    font-size: 20px;
  }

  .careers-section,
  .team-section {
    padding: 60px 0;
  }

  .careers-section h2 {
    font-size: 32px;
  }

  .values-grid,
  .teams-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .jobs-container {
    grid-template-columns: repeat(2, 1fr);
  }

  .job-card {
    flex-direction: row;
  }

  .team-item {
    width: 150px;
  }

  .team-item img {
    width: 100px;
    height: 100px;
  }

  .awards-grid {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  }
}

/* Desktop Styles */
@media (min-width: 992px) {
  .cyber-sidebar {
    width: 300px;
  }
  
  .main-content {
    margin-left: 300px;
    width: calc(100% - 300px);
  }

  .video-banner {
    height: 70vh;
  }

  .welcome-text h1 {
    font-size: 52px;
  }

  .values-grid,
  .teams-grid {
    grid-template-columns: repeat(4, 1fr);
  }

  .jobs-container {
    grid-template-columns: repeat(3, 1fr);
  }

  .team-grid {
    gap: 30px;
  }

  .team-item {
    width: 180px;
  }

  .team-item img {
    width: 120px;
    height: 120px;
  }

  .awards-grid {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  }

  .gallery-grid {
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
  }
}

/* Large Desktop Styles */
@media (min-width: 1200px) {
  .careers-section h2 {
    font-size: 36px;
  }

  .careers-intro {
    font-size: 18px;
  }

  .team-title {
    font-size: 36px;
  }

  .team-subtitle {
    font-size: 18px;
  }
}

    :root {
      --primary-color: #101820;
      --secondary-color: #f8c000;
      --text-color: #ffffff;
      --text-muted: #cccccc;
      --hover-color: #ffffff;
    }
    .footer {
      background-color: var(--primary-color);
      color: var(--text-color);
      /* padding: 70px 20px 30px; */
      position: relative;
      overflow: hidden;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--secondary-color), #ff6b00, var(--secondary-color));
      background-size: 200% auto;
      animation: gradient 3s linear infinite;
    }

    @keyframes gradient {
      0% { background-position: 0% center; }
      100% { background-position: 200% center; }
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: auto;
      gap: 40px;
      position: relative;
      z-index: 1;
    }

    .footer-logo {
      position: relative;
    }

    .footer-logo img {
      width: 180px;
      transition: transform 0.3s ease;
    }

    .footer-logo:hover img {
      transform: scale(1.05);
    }

    .footer-logo::after {
      content: '';
      position: absolute;
      bottom: -15px;
      left: 0;
      width: 50px;
      height: 3px;
      background-color: var(--secondary-color);
      transition: width 0.3s ease;
    }

    .footer-logo:hover::after {
      width: 100px;
    }

    .footer-section {
      flex: 1;
      min-width: 250px;
      transition: transform 0.3s ease;
    }

    .footer-section:hover {
      transform: translateY(-5px);
    }

    .footer-section h3 {
      font-size: 18px;
      margin-bottom: 20px;
      color: var(--secondary-color);
      position: relative;
      display: inline-block;
    }

    .footer-section h3::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 40px;
      height: 2px;
      background-color: var(--secondary-color);
      transition: width 0.3s ease;
    }

    .footer-section:hover h3::after {
      width: 70px;
    }

    .footer-section p,
    .footer-section a {
      font-size: 15px;
      line-height: 1.7;
      color: var(--text-muted);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .footer-section a:hover {
      color: var(--hover-color);
      padding-left: 5px;
    }

    .footer-icons i {
      margin-right: 15px;
      color: var(--secondary-color);
      width: 20px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .footer-icons a:hover i {
      transform: scale(1.2);
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      padding-top: 25px;
      margin-top: 50px;
      font-size: 14px;
      color: var(--text-muted);
      position: relative;
    }

    .footer-bottom::before {
      content: '';
      position: absolute;
      top: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 20px;
      background: radial-gradient(ellipse at center, rgba(248, 192, 0, 0.4) 0%, rgba(248, 192, 0, 0) 70%);
    }

    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 20px;
    }

    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      color: var(--text-muted);
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background-color: var(--secondary-color);
      color: var(--primary-color);
      transform: translateY(-3px);
    }

    .newsletter {
      margin-top: 20px;
    }

    .newsletter input {
      width: 100%;
      padding: 10px 15px;
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      border-radius: 4px;
      color: white;
      margin-bottom: 10px;
    }

    .newsletter button {
      background-color: var(--secondary-color);
      color: var(--primary-color);
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .newsletter button:hover {
      background-color: #ffd700;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(248, 192, 0, 0.3);
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .footer-section {
        margin-bottom: 30px;
        align-items: center;
      }

      .footer-section h3::after {
        left: 50%;
        transform: translateX(-50%);
      }
    }
  </style>
  <div class="dashboard">
    <!-- Futuristic Neon Sidebar -->
         <!-- Mobile Header -->
    <div class="mobile-header">
      <!-- <a href="index.html" class="cyber-logo-link">
        <img src="images/5core white logo.png" alt="5Core Logo" class="holographic-logo" />
      </a> -->
      <button class="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>

    <aside class="cyber-sidebar">
      <span class="sidebar-close"><i class="fas fa-times"></i></span>
      
      <a href="{{ url('/') }}" class="cyber-logo-link">
            <div class="cyber-logo">
                <img src="{{ asset('front/assets/img/5core white logo.png') }}" alt="5Core Logo"
                    class="holographic-logo" />
                <div class="neon-pulse"></div>
            </div>
        </a>
      
      
      <nav class="cyber-menu">
        <a href="https://www.5core.com/pages/career" class="cyber-menu-item" style="--neon-color: #FF2A6D;">
          <span class="menu-icon"><i class="fas fa-briefcase"></i></span>
          <span class="menu-text">Career</span>
          <span class="neon-line"></span>
        </a>
        
        <a href="#" class="cyber-menu-item active" id="job-opportunity" style="--neon-color: #05D9E8;">
          <span class="menu-icon"><i class="fas fa-search-dollar"></i></span>
          <span class="menu-text">Job Opportunity</span>
          <span class="neon-line"></span>
        </a>
        
        <a href="https://www.5core.com/pages/why-5-core" class="cyber-menu-item" style="--neon-color: #D300C5;">
          <span class="menu-icon"><i class="fas fa-heart"></i></span>
          <span class="menu-text">Why Join 5Core</span>
          <span class="neon-line"></span>
        </a>
        
        <a href="https://www.5core.com/pages/5-core-benefits" class="cyber-menu-item" style="--neon-color: #FFEE00;">
          <span class="menu-icon"><i class="fas fa-gift"></i></span>
          <span class="menu-text">Explore Benefits</span>
          <span class="neon-line"></span>
        </a>
        
        <a href="https://www.5core.com/pages/5-core-policy" class="cyber-menu-item" style="--neon-color: #00FF85;">
          <span class="menu-icon"><i class="fas fa-file-alt"></i></span>
          <span class="menu-text">5Core Policies</span>
          <span class="neon-line"></span>
        </a>
        
        <a href="https://www.5core.com/pages/our-department" class="cyber-menu-item" style="--neon-color: #7B2BFF;">
          <span class="menu-icon"><i class="fas fa-sitemap"></i></span>
          <span class="menu-text">Our Departments</span>
          <span class="neon-line"></span>
        </a>
      </nav>
      
      
      
      <div class="cyber-grid"></div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <!-- Welcome Section (contains all non-job content) -->
      <div class="content-section welcome-section active-section" id="welcome-section">
        <div class="video-banner">
          <!-- Video Banner -->
          <video autoplay muted loop playsinline>
            <source src="{{ asset('front/assets/img/images/recruitment video.mp4') }}" type="video/mp4">
          </video>
        </div>

        <!-- Careers Section -->
        <div class="careers-section">
          <div class="careers-container">
            <h2>Turn Your Passion into a Profession</h2>
            <p class="careers-intro">
              If you're looking for more than just a job — a place where passion meets purpose — then 5 Core is the opportunity you've been waiting for.
              Join a driven, dynamic team at one of the leading names in audio and music equipment, and experience what it's like to truly love where you work.
            </p>

            <div class="divider"></div>

            <h3 class="values-title">Our Core Values</h3>
            <p class="values-subtitle">Discover what drives us — from innovation to integrity — and learn how we are building more than products;<br>we are building trust and excellence.</p>

            <div class="values-grid">
              <div class="value-card">
                <div class="value-icon"><i class="fas fa-laptop-house"></i></div>
                <h4>Remote Work Opportunity</h4>
                <p>Enjoy the freedom to work from anywhere. At 5 Core, we embrace remote work, enabling you to stay productive and connected—no matter your location.</p>
              </div>

              <div class="value-card">
                <div class="value-icon"><i class="fas fa-hands-helping"></i></div>
                <h4>Supportive Work Culture</h4>
                <p>We believe in teamwork, open communication, and mutual respect. You'll be part of a collaborative, positive environment that empowers your success.</p>
              </div>

              <div class="value-card">
                <div class="value-icon"><i class="fas fa-clock"></i></div>
                <h4>Flexible Working Hours</h4>
                <p>We understand that everyone has different peak productivity times. Our flexible schedule allows you to work when you perform best while maintaining work-life balance.</p>
              </div>

              <div class="value-card">
                <div class="value-icon"><i class="fas fa-graduation-cap"></i></div>
                <h4>Continuous Learning & Growth</h4>
                <p>At 5 Core, you'll never stop evolving. We offer continuous skill development, mentorship, and opportunities for internal promotion so you can grow along with the company.</p>
              </div>
            </div>

            <!-- See All Openings Button -->
            <button class="see-all-btn" onclick="window.location.href='https://www.5core.com/pages/job-opportunity'">
  See All Openings
</button>
          </div>
        </div>

        <!-- Our Team Section (now inside welcome-section) -->
        <div class="team-section">
          <div class="team-container">
            <h2 class="team-title">Our Collaborative Teams</h2>
            <p class="team-subtitle">Find Your Place in the 5Core Family</p>
            
            <div class="team-grid">
              <div class="team-item">
                <!-- Team Section Images -->
                <img src="{{ asset('front/assets/img/images/Sales.png') }}" alt="Sales Team">
                <p class="team-label">Sales</p>
              </div>
              
              <div class="team-item">
                <img src="{{ asset('front/assets/img/images/Technology.png') }}" alt="Technology Team">
                <p class="team-label">Technology</p>
              </div>
              
              <div class="team-item">
                <img src="{{ asset('front/assets/img/images/Marketing.png') }}" alt="Marketing Team">
                <p class="team-label">Marketing</p>
              </div>
              
              <div class="team-item">
                <img src="{{ asset('front/assets/img/images/Services.png') }}" alt="Services Team">
                <p class="team-label">Services</p>
              </div>

              <div class="team-item">
                <img src="{{ asset('front/assets/img/images/Internships.png') }}" alt="Internships">
                <p class="team-label">Internships</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Awards Section - Images Only -->
        <section class="awards-showcase">
          <div class="careers-container">
            <h2 class="section-title">Our Recognitions</h2>
            <p>At 5Core, our commitment to innovation, quality, and excellence has earned us recognition across the audio and electronics industry. From prestigious industry awards to global certifications, our milestones reflect the trust and admiration of customers and partners worldwide.</p>
            <br>
            
            <div class="awards-grid">
              <!-- Each award item now properly triggers openModal() -->
              <div class="award-item" onclick="openModal(this)">
                <!-- Awards Section Images -->
                <img src="{{ asset('front/assets/img/images/R one.png') }}" alt="Award 1" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 2.png') }}" alt="Award 2" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 3.png') }}" alt="Award 3" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 4.png') }}" alt="Award 4" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 5.png') }}" alt="Award 5" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 6.png') }}" alt="Award 6" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 7.png') }}" alt="Award 7" class="award-image">
              </div>
              <div class="award-item" onclick="openModal(this)">
                <img src="{{ asset('front/assets/img/images/R 8.png') }}" alt="Award 8" class="award-image">
              </div>
            </div>
          </div>
        </section>

        <!-- Modal for Award Images -->
        <div id="imageModal" class="modal">
          <span class="close" onclick="closeModal()">&times;</span>
          <img class="modal-content" id="modalImage">
        </div>

        <!-- Memories Gallery Section (now inside welcome-section) -->
         <!-- Modal for Memory Images -->
        <div id="memoryModal" class="modal">
          <span class="close" onclick="closeMemoryModal()">&times;</span>
          <img class="modal-content" id="memoryImage">
        </div>

        <!-- Memories Gallery Section (now inside welcome-section) -->
        <section class="memories-section">
          <div class="gallery-container">
            <h2 class="section-title">Our Memories</h2>
            <p class="section-subtitle">Capturing moments that define our 5Core journey</p>
          
            <div class="gallery-grid">
              <!-- Gallery Item 1 - Annual Meet 2023 -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 1.jpg') }}" alt="Team Event" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
              
              <!-- Gallery Item 2 - Festival Celebration -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 2.jpg') }}" alt="Office Celebration" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
              
              <!-- Gallery Item 3 - Team Outing -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 3.jpg') }}" alt="Team Building" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
              
              <!-- Gallery Item 4 - Our Workspace -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 4.jpg') }}" alt="Workspace" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
              
              <!-- Gallery Item 5 - Learning Session -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 5.jpg') }}" alt="Training Session" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
              
              <!-- Gallery Item 6 - Achievement Day -->
              <div class="gallery-item" onclick="openMemoryModal(this)">
                <img src="{{ asset('front/assets/img/images/memo 6.jpg') }}" alt="Award Ceremony" class="gallery-image">
                <div class="image-overlay">
                  <span class="image-caption"></span>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div> <!-- End of welcome-section -->

      <!-- Job Section (standalone - only shows when "Job Opportunity" is clicked) -->
      <div class="content-section" id="job-section">
        <div class="jobs-container">
          @forelse($jobLocations as $location)
                    <div class="job-card">
                        <div class="job-info">
                            <h3>{{ ucwords($location->job->title) }}</h3>
                            <p><strong>Job Type:</strong> {{ ucwords($location->location->location) }}</p>
                            <p><strong>Offered Salary:</strong>
                                {{ $location->show_salary == 1
                                    ? ($location->pay_type == 'Range'
                                        ? round($location->starting_salary / 1000) .
                                            'K - ' .
                                            round($location->maximum_salary / 1000) .
                                            'K / ' .
                                            $location->pay_according
                                        : ($location->pay_type == 'Starting'
                                            ? 'From ' . round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                            : ($location->pay_type == 'Maximum'
                                                ? 'Upto ' . round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                                : ($location->pay_type == 'Exact Amount'
                                                    ? round($location->starting_salary / 1000) . 'K / ' . $location->pay_according
                                                    : 'Upto 30K'))))
                                    : 'Upto 30K' }}
                            </p>

                            <button onclick="window.location.href='{{ route('jobs.jobDetail', [$location->job->slug, $location->location->id]) }}'">See
                                Details</button>

                        </div>
                        <div class="job-image">
                            <img src="{{ asset($location->image ?? 'images/Freshers.png') }}"
                                alt="{{ $location->title ?? 'Freshers' }}" />
                        </div>
                    </div>
                @empty
                    <h4 id="no-data" class="mx-auto mt-50 mb-40 card-title mb-0">@lang('modules.front.noData')</h4>
                @endforelse
        </div>
      </div>
            <!-- Footer -->
  <footer class="footer">

    <div class="footer-bottom">
      <p>&copy; 2025 5Core. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>
    </main>
  </div>
  <section>

  </section>

   <script>
    // Hamburger Menu Toggle
    document.querySelector('.hamburger-menu').addEventListener('click', function() {
      this.classList.toggle('active');
      document.querySelector('.dashboard').classList.toggle('mobile-sidebar-open');
      document.querySelector('.cyber-sidebar').classList.toggle('active');
    });

    // Set default: show welcome section on page load
    document.addEventListener('DOMContentLoaded', function() {
      // Hide all sections first
      document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active-section');
      });
      // Show only welcome section initially
      document.getElementById('welcome-section').classList.add('active-section');
    });

    // Job Opportunity Click Handler
    document.getElementById('job-opportunity').addEventListener('click', function(e) {
      e.preventDefault();
      
      // Update active state in sidebar
      document.querySelectorAll('.cyber-menu-item').forEach(item => {
        item.classList.remove('active');
      });
      this.classList.add('active');
      
      // Hide all sections, show ONLY job section
      document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active-section');
      });
      document.getElementById('job-section').classList.add('active-section');
      
      // Scroll to top
      window.scrollTo(0, 0);
      
      // Close sidebar if open on mobile
      document.querySelector('.dashboard').classList.remove('mobile-sidebar-open');
      document.querySelector('.cyber-sidebar').classList.remove('active');
      document.querySelector('.hamburger-menu').classList.remove('active');
    });

    // Other menu items - show welcome section
    document.querySelectorAll('.cyber-menu-item:not(#job-opportunity)').forEach(item => {
      item.addEventListener('click', function(e) {
        if(this.getAttribute('href') === '#') {
          e.preventDefault();
          // Update active state in sidebar
          document.querySelectorAll('.cyber-menu-item').forEach(menuItem => {
            menuItem.classList.remove('active');
          });
          this.classList.add('active');
          
          // Hide all sections, show welcome section
          document.querySelectorAll('.content-section').forEach(section => {
            section.classList.remove('active-section');
          });
          document.getElementById('welcome-section').classList.add('active-section');
        }
        
        // Close sidebar if open on mobile
        document.querySelector('.dashboard').classList.remove('mobile-sidebar-open');
        document.querySelector('.cyber-sidebar').classList.remove('active');
        document.querySelector('.hamburger-menu').classList.remove('active');
      });
    });

    // ======================
    // MODAL FUNCTIONALITY
    // ======================
    
    // Open modal with clicked image (for awards)
    function openModal(element) {
      const modal = document.getElementById('imageModal');
      const modalImg = document.getElementById('modalImage');
      
      // Get the image source from the clicked award item
      const imgSrc = element.querySelector('img').src;
      
      modal.style.display = "block";
      modalImg.src = imgSrc;
      
      // Prevent scrolling when modal is open
      document.body.style.overflow = 'hidden';
      
      // Close sidebar if open on mobile
      document.querySelector('.dashboard').classList.remove('mobile-sidebar-open');
      document.querySelector('.cyber-sidebar').classList.remove('active');
      document.querySelector('.hamburger-menu').classList.remove('active');
    }

    // Close modal (for awards)
    function closeModal() {
      document.getElementById('imageModal').style.display = "none";
      // Restore scrolling
      document.body.style.overflow = 'auto';
    }

    // Open memory modal with clicked image
    function openMemoryModal(element) {
      const modal = document.getElementById('memoryModal');
      const modalImg = document.getElementById('memoryImage');
      
      // Get the image source from the clicked gallery item
      const imgSrc = element.querySelector('img').src;
      
      modal.style.display = "block";
      modalImg.src = imgSrc;
      
      // Prevent scrolling when modal is open
      document.body.style.overflow = 'hidden';
      
      // Close sidebar if open on mobile
      document.querySelector('.dashboard').classList.remove('mobile-sidebar-open');
      document.querySelector('.cyber-sidebar').classList.remove('active');
      document.querySelector('.hamburger-menu').classList.remove('active');
    }

    // Close memory modal
    function closeMemoryModal() {
      document.getElementById('memoryModal').style.display = "none";
      // Restore scrolling
      document.body.style.overflow = 'auto';
    }

    // Close modals when clicking outside the image
    window.addEventListener('click', function(event) {
      const imageModal = document.getElementById('imageModal');
      const memoryModal = document.getElementById('memoryModal');
      
      if (event.target === imageModal) {
        closeModal();
      }
      if (event.target === memoryModal) {
        closeMemoryModal();
      }
    });

    // Close modals with Escape key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        closeModal();
        closeMemoryModal();
      }
    });

    // Initialize award items (alternative to inline onclick)
    document.querySelectorAll('.award-item').forEach(item => {
      item.addEventListener('click', function() {
        openModal(this);
      });
    });

    // Initialize gallery items (alternative to inline onclick)
    document.querySelectorAll('.gallery-item').forEach(item => {
      item.addEventListener('click', function() {
        openMemoryModal(this);
      });
    });
  </script>
</body>
</html>