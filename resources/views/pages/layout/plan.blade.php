<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plan Cards</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .card-plan {
      border-radius: 12px;
      padding: 2rem;
      min-height: 280px;
      position: relative;
      background-color: #111;
      transition: transform 0.2s;
    }

    .card-plan:hover {
      transform: translateY(-4px);
    }

    .plan-icon {
      position: absolute;
      top: 1rem;
      right: 1rem;
      font-size: 1.2rem;
    }

    .plan-starter .plan-icon {
      color: #3498db;
    }

    .plan-advanced .plan-icon {
      color: #00e676;
    }

    .plan-expert .plan-icon {
      color: #f39c12;
    }

    .btn-signup {
      margin-top: 2rem;
      width: 100%;
    }

    .active-text {
      color: #00ff6a;
      margin-top: 2rem;
      font-weight: 600;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row g-4 justify-content-center">

    <!-- Starter Plan -->
    <div class="col-md-4">
      <div class="card-plan plan-starter">
        <div class="plan-icon">🔹</div>
        <h5 class="fw-bold">STARTER</h5>
        <p>Default status with a basic set of accessible features</p>
        <div class="active-text">Active</div>
      </div>
    </div>

    <!-- Advanced Plan -->
    <div class="col-md-4">
      <div class="card-plan plan-advanced">
        <div class="plan-icon">🟢🟢</div>
        <h5 class="fw-bold">ADVANCED</h5>
        <p>Access to exclusive platform features for traders who want to apply more diverse strategies</p>
        <button class="btn btn-success btn-signup">Sign up</button>
      </div>
    </div>

    <!-- Expert Plan -->
    <div class="col-md-4">
      <div class="card-plan plan-expert">
        <div class="plan-icon">🟠🟠🟠</div>
        <h5 class="fw-bold">EXPERT</h5>
        <p>The widest range of tools and features available, perfect for all kinds of complex and personalized trading styles</p>
        <button class="btn btn-warning btn-signup">Sign up</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
