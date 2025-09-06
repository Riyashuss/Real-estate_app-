<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sevi Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>

    .custom-mt {
    margin-top: -10px;
    }

    body {
      background-color: #f8f9fa;
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
    margin-top: -80px; /* adjust overlap value */
    position: relative;
    z-index: 10; /* ensures it stays above */
  }
    .hero-section {
  background-color: #1b1b1b;  /* same as navbar */
  padding-bottom: -30px;       /* controls how far the black bg goes */
  border-bottom-left-radius: 20px;  /* optional curve */
  border-bottom-right-radius: 20px; /* optional curve */
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <!-- Hero Section -->
<!-- Hero Section -->
<div class="hero-section text-white bg-dark">
  <!-- Navbar -->
  <nav class="navbar navbar-dark navbar-expand-lg px-3" style="background-color: #000;">
  <a class="navbar-brand fw-bold text-warning d-flex align-items-center" href="#">
    <img src="{{ asset('assets/logo/Logo.png') }}" alt="Logo" 
         style="height: 40px; width: auto; object-fit: contain;">
</a>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav me-auto">
      <li class="nav-item"><a class="nav-link active" href="welcome">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="Pipeline">Pipeline</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Deal Analysis</a></li>
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
 <div class="container mt-4 mb-4 py-5">
  <div class="d-flex justify-content-between align-items-center">
    <div>
      <h4>Welcome back, Sam! Let’s power through your deals.</h4>
      <p class=" ">Dashboard > Overview</p>
    </div>
    <div>
         <button class="btn btn-light" style="border-radius:20px;">Upload NDA</button>
      <button class="btn btn-warning" style="border-radius:20px;">+ Add New Deal</button>
    </div>
  </div>

  <!-- Search bar below -->
  <!-- <form class="d-flex mt-3">
    <input class="form-control me-2" type="search" placeholder="Search deals or alerts">
    <button class="btn btn-outline-secondary">Search</button>
  </form> -->
</div>

</div>

<!-- Stats Cards (Overlap Hero) -->
<div class="container mt-n5 position-relative custom-mt custom-overlap " style="z-index: 10;">
  <div class="row g-3">
    <div class="col-md-3">
      <div class="card p-3">
        <h6>Total Active Deals</h6>
        <h4>6</h4>
        <small class="text-success">+ D440m</small>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3">
        <h6>Deals in Analysis</h6>
        <h4>2</h4>
        <small class="text-success">1% Closing this week</small>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3">
        <h6>Average Return</h6>
        <h4>5234</h4>
        <small class="text-danger">-2.1% VS This Month</small>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3">
        <h6>Weighted Rating</h6>
        <h4>523</h4>
        <small class="text-danger">-2.1% VS This Month</small>
      </div>
    </div>
  </div>
</div>

    <div class="container mt-3">
    <div class="row g-3">
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Completed</h6>
          <h4>6</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Board</h6>
          <h4>523</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Exclusivity</h6>
          <h4>2</h4>
          <small class="text-success">1% Closing This Week</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Bid</h6>
          <h4>5234</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-3">
    <div class="row g-3">
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Short Term</h6>
          <h4>23%</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Long Term</h6>
          <h4>523</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>On Hold</h6>
          <h4>2</h4>
         <small class="text-success ">1% Closing This Week</small>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card p-3">
          <h6>Dead4</h6>
          <h4>523</h4>
          <small class="text-danger">-2.1% VS This Month</small>
        </div>
      </div>
    </div>
  </div>
  <!-- Pipeline Overview -->
  <div class="container mt-4">
    <div class="card p-3">
      <h5>Pipeline Overview</h5>
      <table class="table pipeline-table">
        <thead>
          <tr>
            <th><input type="checkbox" class="rowCheckbox">Deal Lead</th>
            <th>Deal Name</th>
            <th>Location</th>
            <th>£ Value</th>
            <th>Asset Class</th>
            <th>Sector</th>
            <th>Progress</th>
            <th>Stage</th>
            <th>Last Updated</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" class="rowCheckbox">
            <img src="{{ asset('assets/img/team-3.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
 
            #12345</td>
            <td>XYZ Merger</td>
            <td>Manchester</td>
            <td>£5M</td>
            <td>CGR</td>
            <td>Hotel</td>
            <td>
              <div class="progress">
                <div class="progress-bar" style="width:70%"></div>
              </div>
            </td>
            <td>Initial Review</td>
            <td>2023-11-02</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="rowCheckbox">
            <img src="{{ asset('assets/img/team-4.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
            #12346</td>
            <td>LMN Expansion</td>
            <td>London</td>
            <td>£3.5M</td>
            <td>Income Strip</td>
            <td>Car Park</td>
            <td>
              <div class="progress">
                <div class="progress-bar" style="width:70%"></div>
              </div>
            </td>
            <td>Due Diligence</td>
            <td>2023-11-02</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="rowCheckbox">
            <img src="{{ asset('assets/img/team-2.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
            #12347</td>
            <td>XYZ Merger</td>
            <td>Birmingham</td>
            <td>£3.5M</td>
            <td>Income Strip</td>
                      <td>Student</td>

            <td>
              <div class="progress">
                <div class="progress-bar" style="width:70%"></div>
              </div>
            </td>
            <td>Due Diligence</td>
            <td>2023-11-02</td>
          </tr>
          <tr>
            <td><input type="checkbox" class="rowCheckbox">
            <img src="{{ asset('assets/img/team-5.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
            #12348</td>
            <td>LMN Expansion</td>
            <td>Birmingham</td>
            <td>£3.5M</td>
            <td>Income Strip</td>
            <td>Student</td>
            <td>
              <div class="progress">
                <div class="progress-bar" style="width:70%"></div>
              </div>
            </td>
            <td>Due Diligence</td>
            <td>2023-11-02</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Alerts -->
<div class="container mt-3"style="border-radius:15px;">
  <div class="p-3 bg-white rounded shadow-sm">
    <h5 class="fw-bold mb-3">AI Alerts</h5>
    <div class="alert-section d-flex gap-3">
      <div class="alert alert-danger flex-fill">⚠️ 2 Deals Require Final Pricing Approval.</div>
      <div class="alert alert-success flex-fill">✅ Compliance Alert</div>
      <div class="alert alert-warning flex-fill">⚠️ 1 Transaction Missing Tax Clearance.</div>
    </div>
  </div>
</div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
