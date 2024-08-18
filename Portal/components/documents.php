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
            <nav
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
            </nav>

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
                      src="assets/img/profile.jpg"
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
                            src="assets/img/profile.jpg"
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
          <div
            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Research & Papers Documents</h3>
              <button class="btn btn-success" id="downloadAllBtn">Download All Documents</button>
            </div>
          
            <!-- <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div> -->
          </div>
         
          

          <div class="row">
            <div class="card w-100">
              <div class="card-body">
                <table class="table table-hover " id="documents">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Document</th>
                      <th scope="col">Owned</th>
                      <th scope="col">Uploaded Data</th>
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


  <!-- end -->

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

    //  donwload all
    document.getElementById('downloadAllBtn').addEventListener('click', function() {
    const documents = document.querySelectorAll('#documents .document');

    documents.forEach(doc => {
        const filename = doc.textContent.trim();
        const filePath = `../uploads/${filename}`;

        fetch(filePath, { method: 'HEAD' })
            .then(response => {
                if (response.ok) {
                    const link = document.createElement('a');
                    link.href = filePath;
                    link.download = filename;
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                } else {
                    console.warn(`File ${filename} does not exist. Skipping.`);
                }
            })
            .catch(error => {
                console.error(`Error downloading ${filename}:`, error);
            });
    });

    alert('Download process initiated for available files, Completed.');
});


    readAllData();
   
    function readAllData() {
      $.ajax({
        method: "POST",
        dataType: "json",
        url: "../api/scholar.api.php",
        data: {
          "action": "ReadAllDocs",

        },
        success: function(response) {
          var tr = "<tr>";
          response.data.forEach(value => {
            tr += `<td>${value.id}</td>`
            tr += `<td class='document'>${value.name}</td>`
            tr += `<td>${value.title}</td>`
            tr += `<td>${value.action}</td>`
            tr += `<td><a class='btn btn-danger del' onclick="Download('${value.name}')">Download</a></td>`;
            tr += `</tr>`

          })
          $("#documents tbody").html("")
          $("#documents tbody").html(tr)
          if ($("#documents").DataTable().settings().length) {
        // If DataTable is already initialized, destroy and reinitialize
        $("#documents").DataTable().clear().rows.add($("#documents").find('tbody tr')).draw();
      } else {
    
        $("#documents").DataTable({
         
        });
      }
          console.log(response)
        },
        error: function(res) {
          console.log(res);
        }
      })
    }
    function Download(filename) {
    const filePath = `../uploads/${filename}`;
    
    fetch(filePath, { method: 'HEAD' })
        .then(response => {
            if (response.ok) {
      
                const link = document.createElement('a');
                link.href = filePath;
                link.download = filename;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
            
                alert('Error: File does not exist, In this folder. Check if it exists');
            }
        })
        .catch(error => {
        
            alert('Error: Unable to check file status.');
            console.error('Error:', error);
        });
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
          $(this).modal("hide");
          console.log(response)
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