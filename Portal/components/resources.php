<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>JUST SCHOLAR RESOURCES</title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />
  <!-- <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    /> -->

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["../assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins.min.css">
  <link rel="stylesheet" href="../assets/css/kaiadmin.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="../assets/css/demo.css">

  <style>
    .modal-dialog .inner-body {
      max-height: 800px;
      overflow-y: scroll;

    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img
              src="../assets/img/images.png"
              alt="navbar brand"
              class="navbar-brand"
              height="55" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item active">
              <a
                data-bs-toggle="collapse"
                href="#dashboard"
                class="collapsed"
                aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="dashboard">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="../index.html">
                      <span class="sub-item">Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Sections</h4>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#base">
                <i class="fas fa-layer-group"></i>
                <p>Portal</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="base">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="./resources.php">
                      <span class="sub-item">Resources List</span>
                    </a>
                  </li>
                  <li>
                    <a href="./documents.php">
                      <span class="sub-item">Documents List</span>
                    </a>
                  </li>
                  <li>
                    <a href="components/gridsystem.html">
                      <span class="sub-item">Users</span>
                    </a>
                  </li>

                  <li>
                    <a href="./faq.php">
                      <span class="sub-item">Questions - FAQ</span>
                    </a>
                  </li>
                  <li>
                    <a href="components/notifications.html">
                      <span class="sub-item">Student Papers</span>
                    </a>
                  </li>


                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#sidebarLayouts">
                <i class="fas fa-th-list"></i>
                <p>Student Portal</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="sidebarLayouts">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="sidebar-style-2.html">
                      <span class="sub-item">Scholar Resources</span>
                    </a>
                  </li>
                  <li>
                    <a href="icon-menu.html">
                      <span class="sub-item">Ask Question</span>
                    </a>
                  </li>
                  <li>
                    <a href="icon-menu.html">
                      <span class="sub-item">My Papers</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>




          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav
          class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <!-- <nav
              class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pe-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input
                  type="text"
                  placeholder="Search ..."
                  class="form-control" />
              </div>
            </nav> -->

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li
                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  href="#"
                  role="button"
                  aria-expanded="false"
                  aria-haspopup="true">
                  <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                  <form class="navbar-left navbar-form nav-search">
                    <div class="input-group">
                      <input
                        type="text"
                        placeholder="Search ..."
                        class="form-control" />
                    </div>
                  </form>
                </ul>
              </li>


              <li class="nav-item topbar-user dropdown hidden-caret">
                <a
                  class="dropdown-toggle profile-pic"
                  data-bs-toggle="dropdown"
                  href="#"
                  aria-expanded="false">
                  <div class="avatar-sm">
                    <img
                      src="../assets/img/profile.jpg"
                      alt="..."
                      class="avatar-img rounded-circle" />
                  </div>
                  <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold">Hizrian</span>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box">
                        <div class="avatar-lg">
                          <img
                            src="../assets/img/profile.jpg"
                            alt="image profile"
                            class="avatar-img rounded" />
                        </div>
                        <div class="u-text">
                          <h4>Hizrian</h4>
                          <p class="text-muted">hello@example.com</p>
                          <a
                            href="profile.html"
                            class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">My Profile</a>

                      <a class="dropdown-item" href="#">Inbox</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Account Setting</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>

      <div class="container">
        <div class="page-inner">
        <div id="loadingOverlay" class="d-none">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

          <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Scholars Resources</h3>
              <button class="btn btn-success import" id="import-button">Import</button>
              <button class="btn btn-success" id="export" onclick="ExportData('resources','resources.csv')">Export</button>
              <button class="btn btn-success" id="manual">Add Manual</button>
              
              <input type="file" id="file-input" hidden />

            </div>
          
            <!-- <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div> -->
          </div>
         
          

          <div class="row">
            <div class="card w-100">
              <div class="card-body">
                <table class="table table-hover " id="resources">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Author(s)</th>
                      <th scope="col">Year</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>


                  </tbody>
                </table>
              </div>
            </div>
          </div>



        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">

          <div class="copyright">
            2024, made with <i class="fa fa-heart heart text-danger"></i> by
            <a href="#">JUST DEVELOPERS</a>
          </div>

        </div>
      </footer>
    </div>


    <!-- End Custom template -->
  </div>
  <!-- add -->

  <div class="modal fade bd-example-modal-lg addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="">Title</label>
              <input type="text" class="form-control title">
            </div>

          </div>
          <div class="col-12">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Problem</label>
            <textarea class="form-control problem" id="problem" rows="3"></textarea>
          </div>
            
          </div>
          <div class="col-12">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Authors</label>
            <textarea class="form-control author" id="author" rows="2"></textarea>
           
          </div>
            
          </div>

          <div class="col-12">
            <div class="row">
              <div class="col-6">
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Year</label>
                  <select class="form-control year">
  <option value="2024">2024</option>
  <option value="2023">2023</option>
</select>
                
                </div>
              </div>
              <div class="col-6">
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Category</label>
                  <select class="form-control category">
                  <option value="machine learn">ML</option>
                  <option value="iOT">IOT</option>
                
                </select>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
         <div class="row">
          <div class="col-6">
            <div class="form-group">
                <label for="">Future Work</label>
                <input type="text" class="form-control futurework">
              </div>
          </div>
          <div class="col-6">
              <div class="form-group">
                  <label for="">Recommendation</label>
                  <input type="text" class="form-control recomm">
                </div>
          </div>
          </div>
          
          </div>
         <div class="col-12">
          
         <div class="row">
            <div class="col-6">
            <label for="">Faculty</label>
          <select class="form-control faculty">
            <option value="IT">IT</option>
            <option value="health">Health</option>
          </select>
            </div>
            <div class="col-6">
            <label for="">Group Number</label>
            <input type="text" class="form-control groupNo">
            </div>
          </div>

         </div>
         <div class="col-12">
         <div class="form-group">
    <label for="exampleFormControlFile1">Document</label>
    <input type="file" class="form-control-file doc" id="exampleFormControlFile1">
  </div>
         </div>

         <div class="col-12">
         <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </div>


         </div>
       
        <div class="my-3 mx-2">
          <button class="btn btn-success" id="save">Save</button>
          <button class="btn btn-danger" id="cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- end -->

  <div class="modal fade info-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>WARNING!</strong> You should check Sample Format To Upload Data.
  <a href="#"  onclick="ExportData('sample','sampleResources.csv')">Download Sample</a>
  
</div>
      </div>
     
    </div>
  </div>
</div>
<!-- e -->
<table class="table table-striped" hidden id="sample">
          <thead>
            <tr>
              <th scope="col">title</th>
              <th scope="col">problem</th>
              <th scope="col">author</th>
              <th scope="col">year</th>
              <th scope="col">category</th>
              <th scope="col">futurework</th>
              <th scope="col">recomm</th>
              <th scope="col">description</th>
              <th scope="col">groupNo</th>
              <th scope="col">faculty</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>BRAIN STROKE</td>
              <td>ct scans</td>
              <td>Abdirahman, Mohamed</td>
              <td>2024</td>
              <td>Machine Learning</td>
              <td>EHR INTEGRATION</td>
              <td>NONE</td>
              <td>TEST</td>
              <td>100</td>
              <td>Computer and IT</td>
            </tr>
          </tbody>
        </table>
<!-- e -->
  <div class="modal fade bd-example-modal-lg preview" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content inner-body">
        <table class="table table-striped" id="preview-table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Author(s)</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
        <div class="my-3">
          <button class="btn btn-success" id="save-data">Upload</button>
          <button class="btn btn-danger" id="cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Moment JS -->
  <script src="../assets/js/plugin/moment/moment.min.js"></script>

  <!-- Chart JS -->
  <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="../assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="../assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="../assets/js/setting-demo2.js"></script>
  <!-- <script src="assets/js/demo.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  <script>
    $("#manual").click(()=>{
      $(".addModal").modal("show")
    })
    $("#save").click(()=>{
      const formData = new FormData();
  
  // Manually append form fields to the FormData object
  formData.append('title', document.querySelector('.title').value);
  formData.append('problem', document.querySelector('.problem').value);
  formData.append('author', document.querySelector('.author').value);
  formData.append('year', document.querySelector('.year').value);
  formData.append('category', document.querySelector('.category').value);
  formData.append('futurework', document.querySelector('.futurework').value);
  formData.append('recomm', document.querySelector('.recomm').value);
  formData.append('faculty', document.querySelector('.faculty').value);
  formData.append('groupNo', document.querySelector('.groupNo').value);
  formData.append('description', document.querySelector('.description').value);
  formData.append('doc', $(".doc")[0].files[0]);
  formData.append('action',"InsertData");
  SaveData(formData);
      
    })
    function SaveData(data){
      $.ajax({
        method: "POST",
        processData : false,
        cache : false,
        contentType : false,
        dataType: "json",
        url: "../api/scholar.api.php",
        data:data,
        success: function(response) {
          alert(response.message)
          readAllData();
        },
        error: function(res) {
          console.log(res);
    
        }
      })
    }
    readAllData();
    function readAllData() {
     
      $.ajax({
        method: "POST",
        dataType: "json",
        url: "../api/scholar.api.php",
        data: {
          "action": "ReadAllResources",

        },
        success: function(response) {
          console.log(response)
          var tr = "<tr>";
          response.data.forEach(value => {
            var authors = value.author.split(",");
            var authorsList = authors.map((author, index) => {
              const colorClasses = ['bg-primary', 'bg-secondary', 'bg-success', 'bg-danger', 'bg-warning', 'bg-info'];
              const colorClass = colorClasses[index % colorClasses.length];
              return `<span class="badge ${colorClass} me-2">${author}</span>`;
            });

            tr += `<td>${value.id}</td>`
            tr += `<td>${value.title}</td>`
            if (authors.length > 5)
              tr += `<td>${authorsList[0]} <span class="badge bg-secondary">et al.</span></td>`
            else
              tr += `<td>${authorsList.join("-")}</td>`
            tr += `<td>${value.year}</td>`
            tr += `<td><a class='btn btn-danger del' onclick="DeleteData('${value.id}')">Delete</a></td>`;

            tr += `</tr>`
          })
          
        // First, clear the existing rows
$("#resources tbody").html(tr);

// Check if DataTable is already initialized
if ($.fn.DataTable.isDataTable("#resources")) {
    // If it is, destroy the old DataTable instance
    $("#resources").DataTable().clear().destroy();
}

// Reinitialize the DataTable
$("#resources").DataTable({
    paging: true,       // Enable pagination
    searching: true,    // Enable searching
    ordering: true,     // Enable column ordering
    pageLength: 10,     // Set initial page length
});

       
          console.log(response)
        },
        error: function(res) {
          console.log(res);
        },
        complete: function() {
            // Hide the loading overlay by adding the 'd-none' class
          
        }
      })
    }
    function DeleteData(id) {
      $.ajax({
        method: "POST",
        dataType: "json",
        url: "../api/scholar.api.php",
        data: {
          "action": "DeleteData",
          id: id

        },
       
        success: function(response) {
          alert(response.message)
          readAllData();
       
        },
        error: function(res) {
          console.log(res);
    
        }
      })
    }
    var date_file = {}
    $("#save-data").click(() => {
      $.ajax({
        method: "POST",
        dataType: "json",
        url: "../api/scholar.api.php",
        data: {
          "action": "UploadResearchProjects",
          "data": date_file
        },
        beforeSend: () => {
          $("#save-data").text("Uploading....");
        },
        success: function(response) {
          $("#save-data").text("Upload");
          readAllData();
          $("#preview").modal("hide");
          console.log(response)
          alert("All data uploaded successfully")
        },
        error: function(res) {
          $("#save-data").text("Upload");
          console.log(res);
        }
      })

      console.log("data is n", date_file)
    })
    document.getElementById('file-input').addEventListener('change', handleFile, false);

    function handleFile(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        const data = new Uint8Array(e.target.result);
        const workbook = XLSX.read(data, {
          type: 'array'
        });

        // Get the first sheet
        const worksheet = workbook.Sheets[workbook.SheetNames[0]];
        console.log("Worksheet:", worksheet);

        // Convert to JSON
        const jsonData = XLSX.utils.sheet_to_json(worksheet);
        console.log("Data:", jsonData);
        const requiredKeys = [`title`, `problem`, `author`, `year`, `category`, `futurework`, `recomm`, `description`, `groupNo`, `faculty`];
        const isValid = jsonData.every(row =>
          requiredKeys.every(key => Object.hasOwn(row, key))
        );
        if (isValid) {
          date_file = jsonData;
          var tr = "<tr>"
          jsonData.forEach(value => {
            tr += `<td>${value.title}</td>`
            tr += `<td>${value.author}</td>`
            tr += `</tr>`
          })
          $("#preview-table tbody").html("")
          $("#preview-table tbody").html(tr)
          $(".preview").modal("show")
        } else {
            $(".info-modal").modal("show")
       //   alert("Error: Data is missing required keys.");
        }
        document.getElementById('file-input').value = '';
      };

      reader.readAsArrayBuffer(file);
    }
    document.getElementById('import-button').addEventListener('click', function() {
      // Trigger the file input click event
      document.getElementById('file-input').click();
    });

    function ExportData(tbl, fileName, btn=''){
      
    const table = document.getElementById(tbl);
    const rows = table.querySelectorAll('tr');
    let csvContent = '';

    rows.forEach(row => {
        const cells = row.querySelectorAll('td, th');
        const rowContent = Array.from(cells).map(cell => `"${cell.textContent}"`).join(',');
        csvContent += rowContent + '\n';
    });

    // Create a blob and download it
    const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
    const link = document.createElement('a');
    const url = URL.createObjectURL(blob);

    link.setAttribute('href', url);
    link.setAttribute('download',fileName);
    link.style.visibility = 'hidden';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
    csvContent=""
    }
    

  </script>
</body>

</html>