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

            <!-- <li class="nav-item">
                <a class="nav-link collapsed a-sidebar" href="allProducts.php
                " >
                    <span>All Products</span>
                </a>
                
            </li> -->

            <li class="nav-item">
                <a class="nav-link collapsed a-sidebar" id="list-products" href="allProducts.php
                " >
                    <span>All Products</span>
                </a>
                
            </li>

             <!-- <header class="d-flex flex-grow-1 justify-content-center align-items-center">
                    <button id="list-products" class="btn btn-success">Listar Productos</button>
                </header>  -->

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
                
                <header class="d-flex flex-grow-1 justify-content-center align-items-center">
                    <button id="list-products" class="btn btn-success">See All Products</button>
                </header>
                
                <section class="container mt-4">
                    <div class="row" id="card-container">
                        <!-- // Injeccion dinamica -->
                    </div>
                </section>

                <main class="d-flex flex-grow-1 justify-content-center align-items-center">
        <!-- <div class="container">
            <form method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Categoria: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha creacion: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha expiracion: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Empresa creadora: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Empresa sucursal: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Lote: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="d-flex inline-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-danger m-5">Cancelar</button>
                    <button id="" type="button" class="btn btn-primary m-5">Crear</button>
                </div>
            </form>

        </div> -->
    </main>

                </div>

                </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                 
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
    const medicineSystemAddress = "0xe9A6C6278c473BC46B315d775c89C4e3c9168017";
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

 

    document.getElementById('connect-wallet-button').addEventListener('click', connectWallet);
    


    async function connectWallet() {
        if (window.ethereum) {
            try {
     
                await window.ethereum.request({ method: 'eth_requestAccounts' });

           
                const provider = new ethers.providers.Web3Provider(window.ethereum);
                signer = provider.getSigner();

                

             
                 const signerAddress = await signer.getAddress(); 

                const shortenedAddress = shortenAddress(signerAddress);
                

           
                document.getElementById('wallet-text').innerText = shortenedAddress;

          
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
        lote: lote
    };

    // Llamar a la función para subir a Pinata
    const jsonString = JSON.stringify(data); // Convertir data a JSON string
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
        const medicineSystemAddress = "0xe9A6C6278c473BC46B315d775c89C4e3c9168017";
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


<script>

    // import { ethers } from "ethers";
// import dotenv from 'dotenv'
// dotenv.config();

const RPC_URL = 'https://opulent-space-potato-g44q4vxg6jg53pprx-9650.app.github.dev/ext/bc/sTCLnet/rpc';
const PRIVATE_KEY = '0xfe6b67d95c8139965f8f00e6df4226491e43c0828da279f73d0cc533daec48b0';
const CONTRACT_ADDRESS = '0x7cF220C6861724A30F26BB7a4e4b14bee4cC931E';



const listBtn = document.querySelector('#list-products')
const cardContainer = document.querySelector('#card-container')
console.log(cardContainer)

const provider = new ethers.providers.JsonRpcProvider(RPC_URL);
const wallet = new ethers.Wallet(PRIVATE_KEY, provider);



const abi = [
    // ABI del contrato
    "function balanceOf(address owner) view returns (uint256)",
    "function tokenURI(uint256 tokenId) view returns (string)",
    "function getNextTokenId() view returns (uint256)",
    "function safeMint(address to, string memory tokenURI_) external"
]

const contract = new ethers.Contract(CONTRACT_ADDRESS, abi, wallet);


async function main() {
    try{

        const address = "0x1127276076A30922484Aa85da548A4c459CeEb48";


        // Obtener el balance de la direccion
        const balance = await contract.balanceOf(address)
        if(Number(balance) < 1) throw new Error("Error al traer el balance")

        
        const nextTokenId = await contract.getNextTokenId();


        const promises = [];
        for(let i = nextTokenId; i > nextTokenId - 1 - balance; --i){
            promises.push(contract.tokenURI(i))
        }


        const tokenURIs = await Promise.all(promises)
        const promisesMetada = [];


        // Procesamos la metada de los nft cuando esten disponibles todos juntos.
        tokenURIs.forEach((tokenURI, index) => {
            const URImetada = fetch(tokenURI).then(response => response.json())
            promisesMetada.push(URImetada)
        })


        const tokensMetada = await Promise.all(promisesMetada)
        tokensMetada.forEach((metadata, index) => {
            console.log(metadata)
            const card = document.createElement('div');
            card.className = 'col-md-4 mb-4';
            card.innerHTML = `
                    <div class="card" style="width: 18rem;">
                        <img src=${metadata.img} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">${metadata.name}</h5>
                            <p class="card-text">${index + 1}</p>
                            <h6 class="card-text"> ${metadata.category} </h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">${metadata.empresa_creadora}</li>
                            <li class="list-group-item">${metadata.empresa_sucursal}</li>
                            <li class="list-group-item">${metadata.lote}</li>
                        </ul>
                        <div class="card-body">
                            <li class="list-group-item">${metadata.fecha_creacion}</li>
                            <li class="list-group-item">${metadata.fecha_vencimiento}</li>
                        </div>
                    </div>
            `;
            cardContainer.appendChild(card)
        })

    } catch (error) {
        console.log("Error al traer el balanceOf: ", error)
    }

}





// const btnForm = document.querySelector('#btn-crear');


listBtn.addEventListener('click', (event) => {
    main()
})

</script>


    

</body>

</html>