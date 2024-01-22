const farma = [
    { "Laboratorio MEDIFARMA": "shared/listaFarmaMedifarma.php" },
    { "Laboratorio MEGALABS": "shared/listaFarmaMegalabs.php" },
    { "Laboratorio BAGO": "shared/listaFarmaBago.php" },
    { "Laboratorio EUROFARMA": "shared/listaFarmaEurofarma.php" },
    { "Laboratorio LANSIER": "shared/listaFarmaLansier.php" },
    { "Laboratorio SAVAL": "shared/listaFarmaSaval.php" },
    { "Laboratorio MARKOS": "shared/listaFarmaMarkos.php" },
    { "Laboratorio HERSIL": "shared/listaFarmaHersil.php" },
    { "Laboratorio PFIZER": "shared/listaFarmaPfizer.php" },
    { "Laboratorio BAYER": "shared/listaFarmaBayer.php" },
    { "H REPS": "shared/listaFarmaHreps.php" },
]

const consumo = [
    { "Laboratorio MEDIFARMA": "shared/listaConsumoMedifarma.php" },
    { "Laboratorio MEGALABS": "shared/listaConsumoMegalabs.php" },
    { "APROPO": "shared/listaConsumoApropo.php" },
    { "SCHICK & ENERGIZER": "shared/listaConsumoSchickEnergizer.php" },
    { "ALDEA LOGÍSTICA": "shared/listaConsumoAldea.php" },
    { "KIMBERLY CLARK": "shared/listaConsumoKimberlyClark.php" },
    { "Laboratorio BAYER": "shared/listaConsumoBayer.php" },
    { "PROENSA El Olivar": "shared/listaConsumoProensa.php" },
    { "NESTLE": "shared/listaConsumoNestle.php" },
    { "Laboratorio MAVER": "shared/listaConsumoMaver.php" },
    { "CALA Moncler": "shared/listaConsumoCala.php" },
    { "SANULAC": "shared/listaConsumoSanulac.php" },
    { "QUALA": "shared/listaConsumoQuala.php" },
    { "NUNA": "shared/listaConsumoNuna.php" },
    { "MASON": "shared/listaConsumoMason.php" },
]

const getProductos = (productos) => {
    let lista = ""
    for (let i = 0; i < productos.length; i++) {
        const producto = productos[i]
        const nombre = Object.keys(producto)[0]
        const pdf = producto[nombre]
        lista += `<a href="${pdf}" target="_blank" class="list-group-item list-group-item-action">${nombre}</a>`
    }
    return lista
}

const elementFarma = document.getElementById("farma")
const elementConsumo = document.getElementById("consumo")

elementFarma.innerHTML = getProductos(farma)
elementConsumo.innerHTML = getProductos(consumo)