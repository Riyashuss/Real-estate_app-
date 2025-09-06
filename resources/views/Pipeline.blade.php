
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sevi Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .custom-mt {
       margin-top: -55px; 
      }

    /* .progress-container {
      width: 100%;
      max-width: 1200px;
      background: #fff;
      border-radius: 20px;
      padding: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      margin-top: 20px;
    } */

    .progress-title { 
      font-weight: bold; 
      margin-bottom: 10px; 
    }
    .deal-name { 
      margin-bottom: 15px;
     }

   
    .deal-progress { 
      display: flex; 
      gap: 8px; 
    }
    .deal-step {
      flex: 1;
       height: 10px; 
       border-radius: 6px;
      background: #e0e0e0;
       position: relative;
    }
    .deal-step.filled { 
      background: #7a3cff; 
    }
    .deal-step.active::after {
      content: "60%";
      position: absolute; 
      top: -28px; 
      right: 0;
      background: #fff; 
      padding: 2px 6px;
      font-size: 12px; 
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      color: #333;
    }

    .chart-container {
     
      
        padding: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      max-width: 1300px;
       margin: auto;
    }


    .chart-header {
      display: flex; 
      justify-content: space-between;
      align-items: center;
       margin-bottom: 15px;
    }
    .chart-header h5 {
      margin: 0; 
      font-size: 16px; 
      font-weight: 600;
    }
    .dropdown { 
      font-size: 14px; 
      color: #666; 
      cursor: pointer; 
    }

    .card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      margin: 12px;
    }
    .card-header {
      display: flex; 
      align-items: center;
      justify-content: space-between;
      padding: 14px 16px; 
      border-bottom: 1px solid #e5e7eb;
      
    }
    .title {
       font-size: 14px;
        font-weight: 600;
         letter-spacing: .2px;
         }
    .controls {
       display: flex; 
       gap: 8px; 
       align-items: center; 
      }
   
    .card-body { 
      position: relative; 
      padding: 10px 8px 16px; 
    }

   
    .avg-badge {
      position: absolute; 
      left: 54px; 
      top: 42px; 
      z-index: 4;
      background: #e9f9f1; 
      color: #0f9e6d; 
      border: 1px solid #baf0d6;
      font-size: 11px; 
      font-weight: 600;
      border-radius: 10px; 
      padding: 2px 8px;
    }

    .chart-wrapper {
         position: relative; 
         height: 320px; 
        }
    .legend { 
        display: flex; 
        lex-direction: column;
         
        margin-top: 250px; 
        
    }
    .legend-item {
         display: flex;
        align-items: center; 
        justify-content: space-between; 
        }
    .legend-left { 
        display: flex; 
        align-items: center; 
        gap: 8px; 
    }
    .dot { 
        width: 30px; 
        height: 10px; 
        border-radius: 50%; +
    }
    .muted { 
        color: #6b7280; 
    }
    .money { 
        font-weight: 600; 
        font-size: 12px;
     }

    .wrap {
       max-width: 1300px; 
       margin: auto; 
      }
    .grid { 
      display: grid; 
      grid-template-columns: 2fr 1fr;
       gap: 20px; 
      }
    .donut-box { 
      display: flex; 
      gap: 20px; 
      align-items: center; 
      justify-content: center;
    }
   

.title-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.title-bar h2 {
  margin: 0;
  font-size: 16px;
  font-weight: 600;
}

.filter {
  font-size: 12px;
  color: #666;
  cursor: pointer;
}

.donut-chart svg {
  width: 120px;
  height: 120px;
  display: block;
  margin: 0 auto;
}

.status {
  display: flex;
  justify-content: space-around;
  margin-top: 10px;
  font-size: 14px;
  font-weight: 500;
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 6px;
}



  .donut-box {
  display: flex;
  align-items: center;     
  justify-content: center; 
  gap: 30px;               
}

.donut-wrap {
  width: 180px;  
  height: 180px;
}

.legend {
  display: flex;
  flex-direction: column;
  gap: 15px;      
}

.legend-item {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 150px;   
}

.legend-left {
  display: flex;
  align-items: center;
  gap: 18px;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
}

.money {
  font-weight: 600;
}

.deal-item {
  margin-bottom: 18px;
  font-size: 14px;
  line-height: 1.5;
}

.deal-header {
  display: flex;
  align-items: center;
  font-size: 13px;
  font-weight: 500;
  color: #666;
}

.deal-reason-title {
  margin-right: 10px;
  color: #666;
}

.deal-type {
  font-weight: 600;
  margin-right: 6px;
}

.deal-type.lost { 
  color: #FF647C; 
  font-weight: 600; 
}
.deal-type.win { 
  color: #3DD598; 
  font-weight: 600; }

.deal-arrow {
  margin-left: auto;
  font-size: 16px;
  color: #888;
}

.deal-description {
   position: relative;       
  margin-right: 50px;       
  text-align: right;        
  font-size: 14px;
  color: #333;
  line-height: 1.4;
}

.rating-row {
  display: flex;
  align-items: center;
  margin-bottom: 25px;
  padding: 8px;
 
}

.rating-label {
  width: 40px;
  font-weight: 500;

}

.progress-bar {
 
 flex: 1;
  background-color: #eee;
  height: 10px;
  border-radius: 5px;
  margin: 0 10px;
  overflow: hidden;
}

.progress-bar-inner {
  height: 10px;
  background-color: #f48220;
  border-radius: 5px;
}

.rating-value {
  min-width: 40px;
  text-align: right;
  font-weight: 500;
}
/* .progress-bars{
  background-color:#0000FF;
} */

.pagination-container {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2px;
      font-family: Arial, sans-serif;
    }

    .page-info {
      margin-right: 830px;
      font-size: 14px;
    }

    .pagination {
      display: flex;
      gap: 5px;
    }

    .pagination button {
      padding: 8px 12px;
      border: none;
      background-color: #fff;
      cursor: pointer;
      border-radius: 4px;
    }

    .pagination button.active {
      background-color: orange;
      color: white;
      font-weight: bold;
    }

    .pagination button:disabled {
      background-color: #ccc;
      cursor: not-allowed;
    }

    .progress-text {
    font-size: 12px;
    font-weight: 500;
    color: #333;
  }

  .progress-wrapper {
  display: flex;
  align-items: center;
  gap: 10px; /* space between bar and percentage */
}

.progress-value {
  min-width: 2px;
  text-align: right;
  font-weight: 500;
}

.progress {
  flex: 1; /* take full width */
  height: 10px;
  
  border-radius: 5px;
  overflow: hidden;
}

.progress-bars {
  height: 80%;
  max-width: 80px;
  background: blue;
  border-radius: 5px;
}

.chart-containers{
      max-width: 1300px;
       margin: auto;
}
  </style>
</head>
<body>

<!-- Hero Section + Navbar -->
<div class="hero-section text-white bg-dark">
  <nav class="navbar navbar-dark navbar-expand-lg px-3" style="background-color: #000;">
    <a class="navbar-brand fw-bold text-warning d-flex align-items-center" href="#">
    <img src="{{ asset('assets/img/Logo.png') }}" 
      alt="Logo" 
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
          <img src="{{ asset('assets/img/team-1.jpg') }}" 
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



  <div class="container  mt-4 mb-4 py-5">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h4>Let's see where your deals stand and what's moving.</h4>
        <p>Dashboard > Overview</p>
      </div>
      <div>
        <button class="btn btn-light" style="border-radius:20px;">Upload NDA</button>
      <button class="btn btn-warning" style="border-radius:20px;">+ Add New Deal</button>
      </div>
    </div>
  </div>
</div>


<div class="container mt-n5 position-relative custom-mt" style="z-index: 10;">
  <div class="card p-3">
        <div class="card p-3">
          <h5>Pipeline Overview</h5>
          <table class="table pipeline-table">
            <thead>
              <tr>
                <th>Deal Lead</th>
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
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div class="progress-bars" style="width:70%"></div>
                    </div>
                    <span class="progress-value">70%</span>
                  </div>
                </td>
                
                <td>Initial Review</td>
                <td>2023-11-02</td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" class="rowCheckbox">
                  <img src="{{ asset('assets/img/team-4.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
                  #12346
                </td>
                <td>LMN Expansion</td>
                <td>London</td>
                <td>£3.5M</td>
                <td>Income Strip</td>
                <td>Car Park</td>
                <td>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div class="progress-bars" style="width:70%"></div>
                    </div>
                    <span class="progress-value">70%</span>
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
                <td>£5M</td>
                <td>Funding</td>
                <td>Student</td>
                <td>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div class="progress-bars" style="width:70%"></div>
                    </div>
                    <span class="progress-value">70%</span>
                  </div>
                </td>
                <td>Final Approval</td>
                <td>2023-11-02</td>
              </tr>
              <tr>
                <td><input type="checkbox" class="rowCheckbox">
                  <img src="{{ asset('assets/img/team-5.jpg') }}" alt="Lead" class="rounded-circle" width="40" height="40">
                  #12348</td>
                <td>XYZ Merger</td>
                <td>Birmingham</td>
                <td>£5M</td>
                <td>Funding</td>
                <td>Student</td>
                <td>
                  <div class="progress-wrapper">
                    <div class="progress">
                      <div class="progress-bars" style="width:70%"></div>
                    </div>
                    <span class="progress-value">70%</span>
                  </div>
                </td>

                <td>Final Approval</td>
                <td>2023-11-02</td>
              </tr>
              
            </tbody>
          </table>
          
          <div class="pagination-container">
            <div class="page-info">Page 2 of 15</div>
            <div class="pagination">
              <button>&lt;</button>
              <button>1</button>
              <button class="active">2</button>
              <button>3</button>
              <span>...</span>
              <button>15</button>
              <button>&gt;</button>
            </div>
          </div>
        </div>

      
        <div class="progress-container">
                  <div class="progress-title">Deal Progression</div>
                    <div class="deal-name">Deal One</div>
                    <div class="container">
                        <div class="deal-progress">
                            <div class="deal-step filled"></div>
                            <div class="deal-step filled"></div>
                            <div class="deal-step filled"></div>
                            <div class="deal-step filled"></div>
                            <div class="deal-step filled active"></div>
                            <div class="deal-step"></div>
                            <div class="deal-step"></div>
                            <div class="deal-step"></div>
                        </div>
                    </div>    
                  </div>
        
        </div>
      
  </div>
  
</div>


<div class="chart-container mt-4">
  <div class="chart-header">
    <h5>Deals by Stage <span title="Info">ℹ️</span></h5>
    <div class="dropdown">Monthly ⌄</div>
  </div>
  <canvas id="dealsChart" height="30"></canvas>
</div>


<div class="wrap mt-4">
  <div class="grid">
 
    <section class="card">
      <div class="card-header">
        <div class="title">Deals by Sector (₹)</div>
        <div class="controls"><button class="btn">+ Custom Date</button></div>
      </div>
      <div class="card-body">
        <span class="avg-badge">Avg</span>
        <div class="chart-wrapper"><canvas id="sectorChart"></canvas></div>
      </div>
    </section>

    <!-- Right: Donut Chart -->
    <section class="card">
  <div class="card-header">
    <div class="title">Deals by Asset Class</div>
    <div class="muted" style="font-size:12px">Monthly ^</div>
  </div>

  <div class="donut-box">
    <!-- Donut -->
    <div class="donut-wrap">
      <canvas id="donutChart"></canvas>
    </div>

    <!-- Legend -->
    <div class="legend">
      <div class="legend-item">
        <div class="legend-left">
          <span class="dot" style="background:#3b82f6"></span>
          <span class="muted">Win</span>
        </div>
        <span class="money">₹500.000</span>
      </div>

      <div class="legend-item">
        <div class="legend-left">
          <span class="dot" style="background:#f97316"></span>
          <span class="muted">Lost</span>
        </div>
        <span class="money">₹1000.000</span>
      </div>
    </div>
  </div>
</section>

  </div>
</div>
<div class="chart-containers">
  <div class="row g-3"> <!-- g-3 adds spacing between columns -->

    <!-- Left: Deals Won vs Lost -->
    <div class="col-md-6">
      <div class="card p-3 h-100">
        <div class="section-header mb-3">Deals Won vs Lost</div>
        
        
        <div class="d-flex">
          <!-- Donut + Legend -->
          <div class="d-flex flex-column align-items-center me-4">
            <div class="donut-wrap mb-3">
              <canvas id="dealsDonut"></canvas>
            </div>
            <div>
              <div class="legend-item mb-2">
                <div><span class="dot win"></span> Win</div>
                <strong>$500,000</strong>
              </div>
              <div class="legend-item">
                <div><span class="dot lost"></span> Lost</div>
                <strong>$1,000,000</strong>
              </div>
            </div>
          </div>

          <!-- Reasons -->
          <div class="flex-grow-1">
            <p class="deal-item">
              <span class="deal-type lost">Reason - Lost:</span><br />
              <span class="deal-description">
                How do you create compelling presentations that wow your colleagues and impress your...
              </span>
            </p>
            <p class="deal-item">
              <span class="deal-type win">Reason - Win:</span><br />
              <span class="deal-description">
                How do you create compelling presentations that wow your colleagues and impress your...
              </span>
            </p>
            <p class="deal-item">
              <span class="deal-type win">Reason - Win:</span><br />
              <span class="deal-description">
                How do you create compelling presentations that wow your colleagues and impress your...
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right: Deals by Rating -->
    <div class="col-md-6">
      <div class="card p-3 h-100">
        <div class="section-header mb-3">Deals by Rating</div>

        <div class="rating-row">
          <div class="rating-label">A+</div>
          <div class="progress-bar">
            <div class="progress-bar-inner" style="width: 25%;"></div>
          </div>
          <div class="rating-value">25%</div>
        </div>

        <div class="rating-row">
          <div class="rating-label">A</div>
          <div class="progress-bar">
            <div class="progress-bar-inner" style="width: 50%;"></div>
          </div>
          <div class="rating-value">50%</div>
        </div>

        <div class="rating-row">
          <div class="rating-label">A-</div>
          <div class="progress-bar">
            <div class="progress-bar-inner" style="width: 45%;"></div>
          </div>
          <div class="rating-value">45%</div>
        </div>

        <div class="rating-row">
          <div class="rating-label">BBB+</div>
          <div class="progress-bar">
            <div class="progress-bar-inner" style="width: 75%;"></div>
          </div>
          <div class="rating-value">75%</div>
        </div>
      </div>
    </div>

  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Deals by Stage
  new Chart(document.getElementById('dealsChart'), {
    type: 'bar',
    data: {
      labels: ['Corporate','Board','Exclusivity','Bid','Short term','Long Term','On Hold','Dead'],
      datasets: [{ data: [8,6,9,5,7,6,10,5], backgroundColor: '#e67e22', borderRadius: 6 }]
    },
    options: { plugins:{legend:{display:false}}, scales:{ y:{beginAtZero:true,ticks:{callback:v=>v+'%'}} } }
  });

  // Deals by Sector
  const ctxBar = document.getElementById('sectorChart');
  const labels = ['CCR','Income Strip','Fundings','','',''];
  const dataVals = [5200,4800,14056,5000,5200,5100];
  const bg = dataVals.map((v,i)=> i===2 ? 'rgba(249,115,22,.9)' : 'rgba(203,213,225,.55)');
  new Chart(ctxBar, {
    type: 'bar',
    data: { labels, datasets:[{label:'Income', data: dataVals, backgroundColor:bg, borderRadius:8}] },
    options: {
      scales: { y:{ticks:{callback:v=> v>=1000 ? `₹${(v/1000).toFixed(0)}K` : v}} },
      plugins: {legend:{display:false}, tooltip:{callbacks:{title:()=> 'Apr, 2024', label:ctx=> `Income ₹${ctx.parsed.y.toLocaleString('en-IN')}`}}}
    }
  });

  // Donut Chart
  const centerText = {
    id: 'centerText',
    afterDraw(chart) {
      const {ctx} = chart;
      const {x,y} = chart.getDatasetMeta(0).data[0];
      ctx.save();
      ctx.font = '700 24px sans-serif';
      ctx.textAlign = 'center';
      ctx.fillText('100%',x,y-4);
      ctx.font = '600 11px sans-serif';
      ctx.fillStyle = '#6b7280';
      ctx.fillText('Data Recorded',x,y+18);
      ctx.restore();
    }
  };
  new Chart(document.getElementById('donutChart'), {
    type: 'doughnut',
    data: { labels:['Win','Lost'], datasets:[{ data:[12,88], backgroundColor:['#3b82f6','#f97316'], cutout:'68%' }] },
    options: {plugins:{legend:{display:false}, tooltip:{enabled:false}} },
    plugins:[centerText]
  });

  // Deals Won vs Lost (Donut)
const centerTextDeals = {
  id: 'centerTextDeals',
  afterDraw(chart) {
    const {ctx} = chart;
    const {x,y} = chart.getDatasetMeta(0).data[0];
    ctx.save();
    ctx.font = '700 22px sans-serif';
    ctx.textAlign = 'center';
    ctx.fillText('100%', x, y - 4);
    ctx.font = '600 11px sans-serif';
    ctx.fillStyle = '#6b7280';
    ctx.fillText('Data Recorded', x, y + 16);
    ctx.restore();
  }
};

new Chart(document.getElementById('dealsDonut'), {
  type: 'doughnut',
  data: {
    labels: ['Win', 'Lost'],
    datasets: [{
      data: [500000, 1000000],   // 👈 your values
      backgroundColor: ['#3DD598', '#FF647C'],
      cutout: '70%'
    }]
  },
  options: {
    plugins: { legend: { display: false } }
  },
  plugins: [centerTextDeals]
});

</script>
</body>
</html>