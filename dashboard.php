<?php
    // Iniciar la sesión
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ava Hack</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- FontAwesome CDN -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp4w5t5W0bt1DAcijBhxU0LKURvVU4z4TIs8dI" crossorigin="anonymous"> -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
        
     
    <!-- Incluye jQuery desde el CDN de Google (puedes cambiar a otro CDN si lo prefieres) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/ethers@5.7.0/dist/ethers.umd.min.js"></script>



</head>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark-red sidebar  accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center a-sidebar" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                   <!--  <i class="fa-regular fa-house"></i> -->
                   <i class="fa fa-hospital"></i>
                   
                   
                   <!--  <i class="fa-solid fa-user"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3">Home</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed a-sidebar" href="dashboard.php" >
                    <span>New Product</span>
                </a>
            </li>

            <hr class="sidebar-divider bg-light">

            <li class="nav-item">
                <a class="nav-link collapsed a-sidebar" href="allProducts.php
                " >
                    <span>All Products</span>
                </a>
            </li>

            <hr class="sidebar-divider bg-light">


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hi, <?php echo$_SESSION['name'] . ' ' . $_SESSION['surname'] ; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <!-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> -->
                                    Logout
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="mt-2">
                                <a href="#" id="connect-wallet-button" class="btn btn-primary btn-icon-split mt-2">
                                    <span id="wallet-text" class="text">Conectar Wallet</span>
                                </a>
                            </div>

                        </li>

                        <li class="pl-2">
                            <div class="mt-2">
                                <a href="#" onclick="getbalance()" class="btn btn-primary btn-icon-split mt-2">
                                    <span id="wallet-text" class="text">get balance</span>
                                </a>
                            </div>
                        </li>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-8 col-md-6">

                    <div class="card o-hidden border-0 shadow-lg mt-5">
                        <div class="card-body p-5">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <!-- <div class="col-lg-4 d-none d-lg-block bg-login-image"></div> -->
                                <div class="col-lg-12 d-none d-lg-block bg-product-form-image">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Create Product</h1>
                                           <!--  <img src="./img/foto1.jpeg" alt=""> -->
                                        </div>
                                        <form id="productForm" class="user" action="#" method="POST">

                                            <div class="form-group">
                                                <label for="productName">Name</label>
                                                <input type="text" name="productName" class="form-control form-control-user" id="productName" placeholder="Enter Product Name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="productImg">Imagen</label>
                                                <input type="text" name="productImg" class="form-control form-control-user" id="url-name" placeholder="Enter url img" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="expirationDate">Date Expiration</label>
                                                <input type="date" name="expirationDate" class="form-control form-control-user" id="expirationDate" required>
                                            </div>
                                            


                                            <button type="submit" class="btn btn-danger btn-user btn-block">Create</button>
                                        </form>
                                                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <!--  -->
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="./login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Luego cargar Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <!-- jQuery (necesario para Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js (necesario para el dropdown de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>






<script>

    // Dirección del contrato y ABI
    const medicineSystemAddress = "0x7cF220C6861724A30F26BB7a4e4b14bee4cC931E";
    const medicineSystemABI = [
        "function balanceOf(address owner) external view returns (uint256)",
        "function tokenURI(uint256 tokenId) public view override returns (string memory)",
        "function safeMint(address to , string memory tokenURI_ ) external"
    ];
/*     0x462111Ce76F6738AB2c0A9ABD967883E2c2DE00a */
    let signer;
   /*  let signerAddress = "" */  // Variable global para almacenar la dirección del signer
    

    // Función para acortar la dirección
    function shortenAddress(address) {
            const firstPart = address.slice(0, 6); // Los primeros 6 caracteres (0x...)
            const lastPart = address.slice(-4);   // Los últimos 4 caracteres
            return `${firstPart}...${lastPart}`;  // Formato 0x...612
        }

 
    // Añadir evento al botón para conectar la wallet
    document.getElementById('connect-wallet-button').addEventListener('click', connectWallet);
    

    // Conectar a MetaMask
    async function connectWallet() {
        if (window.ethereum) {
            try {
                // Solicitar conexión a la cuenta de MetaMask
                await window.ethereum.request({ method: 'eth_requestAccounts' });

                // Obtener el provider y el signer
                const provider = new ethers.providers.Web3Provider(window.ethereum);
                signer = provider.getSigner();

                

                // Obtener la dirección del signer y almacenarla en la variable global
                 const signerAddress = await signer.getAddress(); // Guardar la dirección en la variable global
                /* console.log(signerAddress) */

                const shortenedAddress = shortenAddress(signerAddress);
                

                // Reemplazar el texto "Conectar Wallet" con la dirección de la wallet
                document.getElementById('wallet-text').innerText = shortenedAddress;

                // Cambiar la clase del botón de 'btn-primary' a 'btn-success'
                const connectButton = document.getElementById('connect-wallet-button');
                connectButton.classList.remove('btn-primary');
                connectButton.classList.add('btn-success');

               
             

            } catch (error) {
                console.error("User rejected the request.", error);
            }
        } else {
            console.error("Core app is not installed.");
        }
    }

    
    document.getElementById('productForm').addEventListener('submit', async function(event) {
    event.preventDefault(); // Evitar el envío normal del formulario

    // Obtener valores del formulario
    const expirationDate = document.getElementById('expirationDate').value;
    const productName = document.getElementById('productName').value;
    const urlImg =document.querySelector('#url-name').value

    // Obtener datos de la sesión
    const companyCreation = "<?php echo $_SESSION['company']; ?>";  // Esto debería ser dinámico
    const sucursalCreation = "<?php echo $_SESSION['sucursal']; ?>";

    // Fecha de creación actual (invisible en el formulario)
    const dateCreation = new Date().toISOString().split('T')[0]; // Formato YYYY-MM-DD

    // Crear el valor para Lote (año_dia_mes_nombreDelProducto)
    const lote = `${dateCreation.split('-')[0]}_${dateCreation.split('-')[1]}_${dateCreation.split('-')[2]}_${productName}`;

    // Crear el objeto JSON con los datos del formulario
    const data = {
        date_creation: dateCreation,
        date_expiration: expirationDate,
        company_creation: companyCreation,
        sucursal_creation: sucursalCreation,
        product_name: productName,
        lote: lote,
        urlImg: urlImg
    };

    // Llamar a la función para subir a Pinata
    const jsonString = JSON.stringify(data); // Convertir data a JSON string
    console.log(jsonString);
    const urlPinata = await uploadToPinata(jsonString); // Asegúrate de que uploadToPinata devuelve una URL
    console.log("URL de IPFS:", urlPinata);
});

// Definición correcta de la función uploadToPinata
async function uploadToPinata(jsonString, signerAddress) {
    try {
        console.log("Datos enviados a Pinata:", jsonString);
        const url = `https://api.pinata.cloud/pinning/pinJSONToIPFS`; // URL para subir los metadatos
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'pinata_api_key': 'ac028bed39049344b8d2',
                'pinata_secret_api_key': '7d43ca7822d740e9c1045f9f9f6aae086246ef78860f82855b7913f3f49956d7'
            },
            body: jsonString // Enviar directamente la cadena JSON
        });

        const data = await response.json();
        console.log(data); // data contiene el hash del archivo en IPFS
        // URL para acceder a los metadatos
        /* return `https://gateway.pinata.cloud/ipfs/${data.IpfsHash}`; */
        const uri_pinata = `https://gateway.pinata.cloud/ipfs/${data.IpfsHash}`;
       /*  return url_pinata; */

       

       /* console.log(medicineSystemAddress);
       console.log(medicineSystemABI);
       console.log(signerAddress); */
       

       await window.ethereum.request({ method: 'eth_requestAccounts' });
        provider = new ethers.providers.Web3Provider(window.ethereum);
        signer = provider.getSigner();
        const signerAddress = await signer.getAddress(); // Puedes usar signerAddress si lo necesitas

       const medicineSystemContract = new ethers.Contract(medicineSystemAddress, medicineSystemABI, signer);

      /*  const signerAddress = '0x1127276076A30922484Aa85da548A4c459CeEb48'; */

       await medicineSystemContract.safeMint(signerAddress , uri_pinata);

       
        

    } catch (err) {
        console.error(err); // Imprimir el error en la consola para mayor claridad
        return err;
    }
}

async function getbalance() {

        // Dirección del contrato y ABI
        const medicineSystemAddress = "0x7cF220C6861724A30F26BB7a4e4b14bee4cC931E";
    const medicineSystemABI = [
        "function balanceOf(address owner) external view returns (uint256)",
        "function tokenURI(uint256 tokenId) public view override returns (string memory)",
        "function safeMint(address to , string memory tokenURI_ ) external"
    ];


    // Asegúrate de que el provider y el signer están configurados correctamente
    if (typeof window.ethereum !== 'undefined') {
        await window.ethereum.request({ method: 'eth_requestAccounts' });
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const signer = provider.getSigner(); // Obtiene el signer

        // Obtener la dirección del signer
        const signerAddress = await signer.getAddress(); // Puedes usar signerAddress si lo necesitas

        // Crear una instancia del contrato
        const medicineSystemContract = new ethers.Contract(medicineSystemAddress, medicineSystemABI, signer);

        // Llamar a balanceOf
        /* const signerAddress = '0x1127276076A30922484Aa85da548A4c459CeEb48'; */
        const balance = await medicineSystemContract.balanceOf(signerAddress);
        console.log(balance.toString()); // Asegúrate de convertirlo a string si es un BigNumber
    } else {
        console.error("MetaMask no está instalado.");
    }
}



    
</script>



    

</body>

</html>