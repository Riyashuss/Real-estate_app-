<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deal Process</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <style>

     .custom-mt {
    margin-top: -10px;
    }

    
    .navbar-dark {
      background-color: #1b1b1b;
    }
    
    .card {
      border-radius: 15px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
    .pipeline-table th, .pipeline-table td {
      vertical-align: middle;
    }
    .alert-section {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }
    .progress-bar {
      background-color: #6f42c1;
    }
      .custom-overlap {
    margin-top: -70px; /* adjust overlap value */
    position: relative;
    z-index: 10; /* ensures it stays above */
  }
    .hero-section {
  background-color: #1b1b1b;  /* same as navbar */
  padding-bottom: -30px;       /* controls how far the black bg goes */
  border-bottom-left-radius: 20px;  /* optional curve */
  border-bottom-right-radius: 20px; /* optional curve */
}
    body {
      background-color: #f7f7f7;
      font-family: 'Segoe UI', sans-serif;
    }
    /* Navbar */
    .navbar {
      background-color: #1e1f24;
    }
    .navbar-brand {
      color: #f7931e !important;
      font-weight: bold;
    }
    .nav-link {
      color: #ccc !important;
    }
    .nav-link.active {
      background-color: #2c2d33;
      border-radius: 20px;
      color: #fff !important;
      padding: 6px 15px;
    }
    /* Header section */
    .header-section {
      background-color: #1e1f24;
      color: #fff;
      padding: 30px;
    }
    .breadcrumb {
      background: transparent;
      padding: 0;
      margin-bottom: 0.5rem;
    }
    .breadcrumb-item a {
      color: #ccc;
      text-decoration: none;
    }
    .breadcrumb-item.active {
      color: #fff;
    }
    /* Deal summary */
    .deal-summary {
      background: #ffffffff;
      border-radius: 10px;
      padding: 10px;
      margin-top: -30px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
    .deals-summary {
      background: #e9e9e9ff;
      border-radius: 10px;
      width: 78%;
      padding: 10px;
      margin-top: 20px;
      box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    }
    .deal-summary .col-md-2 {
      border-right: 1px solid #eaeaea;
      margin-bottom: 1px;
    }
    .deal-summary .col-md-2:last-child {
      border-right: none;
    }
    /* Workflow pills */
    .workflow-tabs {
  display: flex;
  gap: 7px;
  margin: 20px 0;
  max-width: 950px;
    /* display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap; */
}

.workflow-pill {
  background: #f8f9fa;
  border-radius: 12px;
  padding: 12px 20px;
  font-weight: 600;
  font-size: 14px;
  color: #000;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  width: 48%;
    /* background: #f9f9f9;
  padding: 8px 12px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 500;
  display: flex;
  flex-direction: column;
  width: 165px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1); */
}

.workflow-pill span {
  margin-bottom: 5px;
  font-size:10px;
    /* margin-bottom: 5px; */
}

.container {
  display: flex;
  gap: 20px;
  padding: 20px;
  width: 180%;            /* always stretch to viewport */
}
.progress-bar {
  width: 100%;
  height: 6px;
  background: #e9ecef;
  border-radius: 6px;
  overflow: hidden;
}

.progress-fill {
  height: 100%;
  border-radius: 6px;
}

.pill-red .progress-fill { background: #dc3545; width: 40%; }
.pill-yellow .progress-fill { background: #ffc107; width: 60%; }
.pill-green .progress-fill { background: #28a745; width: 80%; }
.pill-blue .progress-fill { background: #0d6efd; width: 50%; }
.pill-gray .progress-fill { background: #6c757d; width: 30%; }

    /* .pill-red { border-top: 4px solid #dc3545; }
    .pill-yellow { border-top: 4px solid #ffc107; }
    .pill-green { border-top: 4px solid #28a745; }
    .pill-blue { border-top: 4px solid #0d6efd; }
    .pill-gray { border-top: 4px solid #6c757d; } */
    /* Buttons */
    /* .btn-pill {
      
    } */
    .btn-orange {
      background-color: #f7931e;
      color: #fff;
    }
    .btn-orange:hover {
      background-color: #e67e00;
      color: #fff;
    }
    .navbar input[type="text"] {
  width: 220px;
  background-color: #2c2d33;
  border: none;
  color: #fff;
}
.navbar input::placeholder {
  color: #aaa;
}
.header-section {
  padding: 40px 30px 25px;
}
.deal-summary .row > div {
  padding: 15px;
  font-size: 14px;
}
/* Workflow container */
.workflow-board {
  display: flex;
  gap: 20px;
  overflow-x: auto;
  padding: 20px;
}

/* Workflow columns */
.workflow-column {
  background: #fff;
  border-radius: 12px;
  padding: 15px;
   width: 189px;
  box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
  flex-shrink: 0;
}

/* Column headers */
.workflow-column h6 {
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 15px;
  border-bottom: 2px solid #eee;
  padding-bottom: 5px;
  color: #333;
}

/* Task cards */
.task-card {
  background: #f9f9f9;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 12px;
  width:167px;
  height:140px;
  font-size: 10px;
  box-shadow: 0px 1px 3px rgba(0,0,0,0.08);
  transition: all 0.2s ease;
}
.task-card:hover {
  transform: translateY(-2px);
  box-shadow: 0px 3px 6px rgba(0,0,0,0.15);
}

/* Task meta info */
.task-meta {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  margin: 3px 0;
  color: #666;
}

/* Status badges */
.badge-status {
  display: inline-block;
  padding: 4px 8px;
  border-radius: 6px;
  font-size: 11px;
  font-weight: 600;
}
.badge-risk {
  background: #ffe5e5;
  color: #d93025;
}
.badge-pending {
  background: #fff4d9;
  color: #f7931e;
}
.badge-completed {
  background: #e6f9ec;
  color: #28a745;
}



.deals-summary .row {
  border-bottom: 1px solid #ccc; /* row divider */
  padding: 5px 0;
}

.deals-summary .row:last-child {
  border-bottom: none; /* remove border for last row */
}

.deals-summary .col-md-2 {
  border-right: 1px solid #ccc; /* column divider */
}

.deals-summary .col-md-2:last-child {
  border-right: none; /* remove border for last column */
}

.plus{
  margin-top:400px;
  font-size: 20px;
}

.workflow-pills{
   /* background: #f8f9fa; */
  /* border-radius: 12px; */
  padding: 20px 20px;
  /* font-weight: 600; */
  font-size: 14px;
  color: #000;
  /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); */
  /* display: inline-flex; */
  /* flex-direction: column; */
  /* align-items: flex-start; */
  width: 100%;
}



.workflow-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-weight: bold;
  font-size: 12px;
  margin-bottom: 10px;
  
}

.workflow-step {
  color: #6b5ce7;
}

.workflow-add {
  font-size: 20px;
  cursor: pointer;
}

.progress-bars {
  width: 100%;
  height: 6px;
  background: #e9ecef;
  border-radius: 6px;
  margin-bottom: 15px;
  overflow: hidden;
}

.progress-fill {
  width: 50%;
  height: 100%;
  background: #333;
}



.task-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.task-title {
  font-weight: bold;
  font-size: 10px;
}

.task-dot {
  width: 12px;
  height: 12px;
  margin-top:-15px;
  background: #333;
  border-radius: 50%;
}

.task-dots{
    width: 12px;
  height: 12px;
  margin-top:-15px;
  background: #0d6efd;
  border-radius: 50%;
}

.task-dotred{
  width: 12px;
  height: 12px;
  margin-top:-15px;
  background: #dc3545;
  border-radius: 50%;
  
}

.task-dotyel{
  width: 12px;
  height: 12px;
  margin-top:-15px;
  background: #ffc107;
  border-radius: 50%;
  
}

.task-dotgre{
  width: 12px;
  height: 12px;
  margin-top:-15px;
  background: #28a745;
  border-radius: 50%;
  
}

.task-progress {
  height: 5px;
  background: #e9ecef;
  border-radius: 4px;
  margin: 8px 0;
  margin-top:-8px;
}

.task-progress-fill {
  width: 40%;
  height: 100%;
  background: #333;
}

.task-progress-fill-blue {
  width: 40%;
  height: 100%;
  background: #0d6efd;
  
}
.task-progress-fill-red {
  width: 40%;
  height: 100%;
  background: #dc3545;
}

.task-progress-fill-yellow {
  width: 40%;
  height: 100%;
  background: #ffc107;
}

.task-progress-fill-green {
  width: 40%;
  height: 100%;
  background: #28a745;
}

.task-meta {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  margin: 3px 0;
  color: #666;
}

.task-meta1{
    display: flex;
  justify-content: space-between;
  font-size: 12px;

  color: #666;
  margin-top:-10px;
}
.task-date {
  background: #f8a23a;
  color: white;
  padding: 2px 8px;
  border-radius: 3px;
  font-size: 12px;
  height: 25px;
}

.task-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 7px;
}

.avatars img {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  margin-right: -8px;
  border: 2px solid #fff;
   margin-top: -10px;
}

.task-icons {
  font-size: 12px;
  color: #555;
  margin-top:-20px;
}

.task-iconss {
  font-size: 12px;
  color: #555;
  margin-top:-25px;
  margin-right:-3px;
}

.task-card1{
  background: #f9f9f9;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 12px;
  width:167px;
  height:425px;
  font-size: 10px;
  box-shadow: 0px 1px 3px rgba(0,0,0,0.08);
  transition: all 0.2s ease;
}

.task-card1:hover {
  transform: translateY(-2px);
  box-shadow: 0px 3px 6px rgba(0,0,0,0.15);
}

.task-card2{
  background: #f9f9f9;
  border-radius: 10px;
  padding: 10px;
  margin-bottom: 12px;
  width:167px;
  height:189px;
  font-size: 10px;
  box-shadow: 0px 1px 3px rgba(0,0,0,0.08);
  transition: all 0.2s ease;
}

.task-card2:hover {
  transform: translateY(-2px);
  box-shadow: 0px 3px 6px rgba(0,0,0,0.15);
}



.task-steps {
  margin: 15px 0;
  padding-left: 20px;   /* space for track */
  list-style: none;
  position: relative;
}

/* vertical line (track) */
.task-steps::before {
  content: "";
  position: absolute;
  top: 0;
  left: 9px;   /* align with dots */
  width: 2px;
  height: 100%;
  background: #e5e7eb;   /* light gray line */
}

/* each step */
.task-steps li {
  position: relative;
  margin-bottom: 15px;
  font-size: 13px;
  color: #444;
}

/* dot */
.task-steps .step-dot {
  position: absolute;
  left: -20px;
  top: 2px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #d1d5db;   /* default gray */
  border: 2px solid #fff;
  z-index: 1;
}

/* states */
.task-steps li.completed .step-dot {
  background: #16a34a;   /* green */
}
.task-steps li.current .step-dot {
  background: #facc15;   /* yellow */
}
.task-steps li small {
  display: block;
  font-size: 11px;
  color: #888;
  margin-top: 2px;
}
.task-icon{
   font-size: 12px;
  color: #555;
  margin-top:10px;
  margin-left:77px;

}

.step-btn {
  background: #efc8edff;
  border: none;
  padding: 2px 10px;
  border-radius: 8px;
  font-size: 11px;
  cursor: pointer;
  margin-right:-8px;
}

.step-content h6 {
  font-size: 10px;
  font-weight: 800;
  margin: 0;
}

.step-content small {
  display: block;
  font-size: 12px;
  color: #6b7280;
  margin-top: 2px;
}

.avatarsd img{
   width: 24px;
  height: 24px;
  border-radius: 50%;
  margin-right: -8px;
  border: 2px solid #fff;
   margin-top: -30px;
}

.avatarsdd img{
   width: 24px;
  height: 24px;
  border-radius: 50%;
  margin-right: -10px;
  border: 2px solid #fff;
   margin-top: 10px;
}

.step-btn1 {
  /* background: #f3f4f6;
  border: none;
  padding: 2px 10px;
  border-radius: 8px;
  font-size: 10px;
  cursor: pointer;
  margin-top:10px; */
  right:40px;

    background: #f3f4f6;
  border: none;
  padding: 2px 10px;
  border-radius: 8px;
  font-size: 12px;
  cursor: pointer;
}

.btn-pill {
  border-radius: 50px;
  padding: 6px 18px;
  font-size: 14px;
  font-weight: 500;
  border-radius: 20px;
  margin-top: 20px;
      
}

.btn-warning {
  background-color: #fd7e14; /* orange */
  border: none;
  color: #fff;
}


.progress-circle {
  position: relative;
  width: 50px;  
  height: 50px;
  margin-top:-55px;
  margin-left:-50px;
}
.progress-ring__background {
  fill: none;
  stroke: #e5e7eb;  
  stroke-width: 4;   
}
.progress-ring__circle {
  fill: none;
  stroke: #22c55e;   /* green */
  stroke-width: 4;   /* thinner stroke */
  stroke-linecap: round;
  stroke-dasharray: 219.91;
  stroke-dashoffset: calc(219.91 - (219.91 * 84) / 100);
  transform: rotate(-90deg);
  transform-origin: 50% 50%;
}
.progress-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 12px;    /* smaller text */
  font-weight: 600;
  color: #22c55e;     /* green */
}

/* Notification Circle (outlined, no background fill) */
.notification-circle {
  width: 140px;
  height: 40px;
  border-radius: 50%;
  border: 3.5px solid orange;   /* thinner border */
  display: flex;
  align-items: center;
  justify-content: center;
  background: white ;   /* no filled bg */
  font-size: 14px;
  color: orange;
  margin-top: -50px;
}

div.move-up {
  margin-top: -20px;
  font-size: 13px; /* adjust value as needed */
}

.chat-button {
  position: relative;   /* stays fixed even when scrolling */
  bottom: -90px;     /* adjust vertical position */
  right: -90px;      /* adjust horizontal position */
  width: 50px;
  height: 50px;
  background-color: #ff6600; 
  color: white;
  border-radius: 15px; 
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  z-index: 10;     /* ensure it's above everything */
}


/* Hover effect */
.chat-button:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 12px rgba(0,0,0,0.3);
}

.task-footer1 {
  position: relative;
}

.step-btn1 {
  position: relative;
  right: -60px;  /* distance from right */
  top: -20px;    /* distance from top */
  background: #efc8edff;
  border: none;
  padding: 2px 10px;
  border-radius: 8px;
  font-size: 10px;
  cursor: pointer;
}

/* .task-iconsss{
  position:absolute;
  font-size: 12px;
  color: #555;
  margin-top:-15px;
  margin-right:-30px;
} */

  .task-iconsss {
  position: absolute;
  right: 5px;   /* push to the right side */
  top: 70%;      /* align vertically with button */
  transform: translateY(-50%); /* perfect vertical centering */
  font-size: 11px;
  color: #555;
  display: flex;
  gap: 8px; /* space between 💬 and 🔔 */
}

  </style>
</head>
<body>

<div class="hero-section text-white bg-dark">
  <!-- Navbar -->
  <nav class="navbar navbar-dark navbar-expand-lg px-3" style="background-color: #000;">
  <a class="navbar-brand fw-bold text-warning d-flex align-items-center" href="#">
    <img src="{{ asset('assets/img/Logo.png') }}" alt="Logo" 
         style="height: 40px; width: auto; object-fit: contain;">
</a>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link active" href="welcome">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="Pipeline">Pipeline</a></li>
      <li class="nav-item"><a class="nav-link" href="open">Deal Analysis</a></li>
      <li class="nav-item"><a class="nav-link" href="deal_process_all_tabs">Deal Process</a></li>
      <li class="nav-item"><a class="nav-link" href="#">NDA Tool</a></li>
    </ul>

    <!-- Search Box -->
    <form class="d-flex me-3">
      <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-warning" type="submit">Search</button>
    </form>

    <!-- Profile Image -->
    <div class="dropdown">
  <!-- Profile Image -->
  <a href="#" class="d-block" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <img src="{{ asset('assets/img/team-4.jpg') }}" 
         alt="Profile" 
         class="rounded-circle" 
         width="40" 
         height="40" 
         style="object-fit: cover; cursor: pointer;">
  </a>

  <!-- Dropdown Menu -->
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
    <li class="dropdown-item-text">
      👋 Welcome, <strong>{{ Auth::user()->name }}</strong>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="dropdown-item text-danger">Logout</button>
      </form>
    </li>
  </ul>
</div>

  </div>
</nav>


  <!-- Header -->
  <div class="container mt-8 mb-4 py-5">
    <div class="d-flex justify-content-between align-items-center">
      <div class="move-up">
        <h4>Deal Process</h4>
        <p>Dashboard > Overview</p>
      </div>
      <div>
          <button class="btn btn-light" style="border-radius:20px; margin-left: 850px; margin-top:-60px;">Deal Timeline</button>
        <button class="btn btn-warning" style="border-radius:20px;  margin-top:-60px;">Deal Files</button>
      </div>
    </div>

    <!-- Search bar below -->
    <!-- <form class="d-flex mt-3">
      <input class="form-control me-2" type="search" placeholder="Search deals or alerts">
      <button class="btn btn-outline-secondary">Search</button>
    </form> -->
  </div>

</div>

<!-- Deal Summary -->
<div class="container mt-n5 position-relative custom-mt custom-overlap " style="z-index: 10;">
  <div class="deal-summary">
    <h5 class="mb-3">Deal Summary</h5>
      <div class="deals-summary">
    <div class="row text-center">
      <div class="col-md-2"><strong>Deal Name</strong><br>Project Sevi</div>
      <div class="col-md-2"><strong>Address</strong><br>Sevi Court, 123 Sevi Lane, SE5 1V1</div>
      <div class="col-md-2"><strong>Tenant</strong><br>Sevi Incorporated</div>
      <div class="col-md-2"><strong>Credit Rating</strong><br>A-</div>
      <div class="col-md-2"><strong>Spread</strong><br>Z+260</div>

    </div>

    <div class="row text-center mt-3">
      <div class="col-md-2"><strong>UXT</strong><br>23.5 yrs</div>
      <div class="col-md-2"><strong>Indexation</strong><br>Annual, CPI+1(0.5)</div>
      <div class="col-md-2"><strong>LTV / Income Cover</strong><br>39.1% / 14.3%</div>
      <div class="col-md-2"><strong>NIY</strong><br>3.26%</div>
      <div class="col-md-2"><strong>Price</strong><br>£79,800,000</div>
    </div>
   </div>


  <!-- Workflow Overview Pills -->
  <h5 class="mt-4">Deal Workflow Overview</h5>
  <div class="workflow-tabs">

    <!-- Pills -->
    <div class="workflow-pill pill-red">
      <span>Bid Requirements</span>
      <div class="progress-bar"><div class="progress-fill" style="width:40%"></div></div>
    </div>

    <div class="workflow-pill pill-yellow">
      <span>Board Requirements</span>
      <div class="progress-bar"><div class="progress-fill" style="width:60%"></div></div>
    </div>

    <div class="workflow-pill pill-green">
      <span>Legal Queries</span>
      <div class="progress-bar"><div class="progress-fill" style="width:80%"></div></div>
    </div>

    <div class="workflow-pill pill-red">
      <span>Due Diligence</span>
      <div class="progress-bar"><div class="progress-fill" style="width:30%"></div></div>
    </div>

    <div class="workflow-pill pill-blue">
      <span>Pre-Exchange Sign Off</span>
      <div class="progress-bar"><div class="progress-fill" style="width:70%"></div></div>
    </div>

    <div class="workflow-pill pill-gray">
      <span>Onboarding</span>
      <div class="progress-bar"><div class="progress-fill" style="width:10%"></div></div>
    </div>

    
    <div class="progress-circle">
      <svg class="progress-ring" width="50" height="50">
        <circle class="progress-ring__background" cx="25" cy="25" r="20" />
        <circle class="progress-ring__circle" cx="25" cy="25" r="20" />
      </svg>
      <span class="progress-text">84%</span>
    </div>

    <!-- Notification Bell -->
    <div class="notification-circle">
      <i class="fas fa-bell"></i>
    </div>

  </div>

    

  


  </hr>
    <div class="workflow-board">

      <!-- Column 1 -->
      <div class="workflow-column">
         <div class="workflow-header">
            <span class="workflow-step">01</span>
            <span class="workflow-title">Bid</span>
            <span class="workflow-add">+</span>
          </div>

        <!-- Progress Bar -->
        <div class="progress-bars pill-red">
          <div class="progress-fill"></div>
        </div>
        
        <div class="task-card1">
          <!-- Header -->
          <div class="task-header">
            <p class="task-title">NDA Review</p>
            <span class="task-dot red"></span>
          </div>

          <!-- Progress bar -->
          <div class="task-progress">
            <div class="task-progress-fill fill-red" style="width: 70%;"></div>
          </div>

          <!-- Meta info -->
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">1 hr ago</span>
          </div>

          <!-- Steps -->
          <ul class="task-steps">
              <li class="completed">
                <span class="step-dot"></span>
                <div class="step-content">
                  <h6>NDA Uploaded</h6>
                  <small>Uploaded by Sarah • 9 Apr</small>
                </div>
              </li>
              <li class="completed">
                <span class="step-dot"></span>
                <div class="step-content">
                  <h6>Analyzed</h6>
                </div>
              </li>
              <li class="current">
                <span class="step-dot"></span>
                <div class="step-content">
                  <h6>Marked Up Shared</h6>
                </div>
              </li>
              <li>
                <!-- <span class="step-dot"></span> -->
                <div class="step-content">
                  <h6>NDA Agreed</h6>
                </div>
              </li>
              <li>
                <!-- <span class="step-dot"></span> -->
                <div class="step-content">
                  <h6>NDA Executed</h6>
                </div>
              </li>
              <li>
                <!-- <span class="step-dot"></span> -->
                <div class="step-content">
                  <h6>File Stored</h6>
                </div>
              </li>
            </ul>



          <!-- Footer -->
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <button class="step-btn">Work on Step →</button>
          </div>

          <div class="task-icon">
            <span>💬 11</span>
            <span>🔔 04</span>
          </div>
        </div>

        <div class="task-card2">
         <div class="task-header">
            <p class="task-title">Conflict Check</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta1">
            <p>Completed</p>
            <span class="task-time">4 hrs ago</span>
          </div>
          <div class="task-footer">
            <div class="avatarsd">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-iconss">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
            
          </div>
            <div class="avatarsdd">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
          <div class="task-footer1">
            <button class="step-btn1">Work on Step →</button>
            <div class="task-iconsss">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
            
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Environmental Tool</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">8 hrs ago</span>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Pricing Approval</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">18 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">CDD Check</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Bid Letter</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
      </div>
        <!-- //board -->
      <!-- Column 2 -->
      <div class="workflow-column">
        <div class="workflow-header">
          <span class="workflow-step">02</span>
          <span class="workflow-title">Board</span>
          <span class="workflow-add">+</span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bars pill-yellow">
          <div class="progress-fill"></div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Credit Review</p>
            <span class="task-dotyel"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-yellow"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Research Review</p>
            <span class="task-dotyel"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-yellow"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">12 Apr</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">NZ DD Report</p>
            <span class="task-dotyel"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-yellow"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Board Paper</p>
            <span class="task-dotyel"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-yellow"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">IC Submission</p>
            <span class="task-dotyel"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-yellow"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
      </div>
        <!-- //Legal Queries -->
      <div class="workflow-column">
        <div class="workflow-header">
          <span class="workflow-step">03</span>
          <span class="workflow-title">Legal Queries</span>
          <span class="workflow-add">+</span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bars pill-green">
          <div class="progress-fill"></div>
        </div>
        
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Solicitor Selection</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Term Sheet</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Lease Assessment</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Sales&Purchase Agreement</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Legal Queries</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Legal Attestation</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Execute Documents</p>
            <span class="task-dotgre"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-green"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
      </div>
      <!-- //Due Diligence -->
      <div class="workflow-column">
        <div class="workflow-header">
          <span class="workflow-step">04</span>
          <span class="workflow-title">Due Diligence</span>
          <span class="workflow-add">+</span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bars pill-red">
          <div class="progress-fill"></div>
        </div>
        
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Flood Risk Assessment</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Environment Assessment</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Building Survey</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Fire Risk Audit</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Valuation</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Tax</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Finance</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Compliance</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Execute Documents</p>
            <span class="task-dotred"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-red"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <!-- <span class="task-time">2 hrs ago</span> -->
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
      </div>
        <!-- //preexchange signoff -->
      <div class="workflow-column">

       <div class="workflow-header">
          <span class="workflow-step">05</span>
          <span class="workflow-title">Pre Exchange Sign-Off</span>
          <span class="workflow-add">+</span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bars pill-blue">
          <div class="progress-fill"></div>
        </div>

        
        <div class="task-card">
         <div class="task-header">
            <p class="task-title">IC Conditions Met</p>
            <span class="task-dots"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-blue"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Credit Conditions Met</p>
            <span class="task-dots"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill-blue"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
         <div class="task-header">
            <p class="task-title">DD Completed</p>
            <span class="task-dots"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill-blue"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
         <div class="task-header">
            <p class="task-title">Attestation</p>
            <span class="task-dots"></span>
          </div>
          <div class="task-progress ">
            <div class="task-progress-fill-blue "></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
           <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        
      </div>
    <!-- ONboarding>>> -->
      <div class="workflow-column">
        <!-- Column Header -->
        <div class="workflow-header">
          <span class="workflow-step">06</span>
          <span class="workflow-title">Onboarding</span>
          <span class="workflow-add">+</span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bars">
          <div class="progress-fill"></div>
        </div>

        <!-- Task Card -->
        <div class="task-card">
          <div class="task-header">
            <p class="task-title">Confirmed Closing</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
            <span class="task-time">2 hrs ago</span>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=1" alt="user">
              <img src="https://i.pravatar.cc/30?img=2" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <!-- Another Task Card -->
        <div class="task-card">
          <div class="task-header">
            <p class="task-title">SDLT Paid</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
          <div class="task-header">
            <p class="task-title">OnboardingDocumentation</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
          <div class="task-header">
            <p class="task-title">AssetManager</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
          <div class="task-header">
            <p class="task-title">ValuerInformation</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
          <div class="task-header">
            <p class="task-title">PublicRelationsandExternal</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>

        <div class="task-card">
          <div class="task-header">
            <p class="task-title">Communication</p>
            <span class="task-dot"></span>
          </div>
          <div class="task-progress">
            <div class="task-progress-fill"></div>
          </div>
          <div class="task-meta">
            <p>Last Accessed</p>
            <span class="task-date">9 Apr</span>
          </div>
          <div class="task-meta">
            <p>Completed</p>
          </div>
          <div class="task-footer">
            <div class="avatars">
              <img src="https://i.pravatar.cc/30?img=3" alt="user">
              <img src="https://i.pravatar.cc/30?img=4" alt="user">
            </div>
            <div class="task-icons">
              <span>💬 11</span>
              <span>🔔 04</span>
            </div>
          </div>
        </div>
        <div class="chat-button">
          <i class="fas fa-comment-alt"></i> <!-- Font Awesome chat icon -->
        </div>
      </div>
      

    </div>
    
</div>

<!-- 
<div class="chat-button">
    <i class="fas fa-comment-alt"></i>
  </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
