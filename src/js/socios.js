const socios = [
    { "Laboratorio MEDIFARMA": "https://www.medifarma.com.pe/" },
    { "Laboratorio MEGALABS": "https://megalabsperu.com.pe/" },
    { "Laboratorio BAGO": "https://www.bago.com.pe/" },
    { "Laboratorio EUROFARMA": "https://www.eurofarma.com.pe/" },
    { "Laboratorio LANSIER": "https://www.lansier.com/" },
    { "APROPO": "https://www.apropo.org.pe/" },
    { "Laboratorio SAVAL": "https://www.savalcorp.com/es/" },
    { "Laboratorio MARKOS": "https://laboratoriosmarkos.com/" },
    { "SCHICK & ENERGIZER": "#" },
    { "Laboratorio HERSIL": "https://www.hersil.com.pe/" },
    { "Laboratorio PFIZER": "https://www.pfizer.com.pe/" },
    { "ALDEA LOGÍSTICA": "https://aldealogistica.com.pe/" },
    { "KIMBERLY CLARK": "https://www.kcprofessional.com/es-pe/" },
    { "Laboratorio BAYER": "https://www.andina.bayer.com/" },
    { "PROENSA El Olivar": "https://www.elolivar.com.pe/" },
    { "NESTLE": "https://www.nestle.com.pe/" },
    { "Laboratorio MAVER": "https://www.maver.com.pe/" },
    { "CALA Moncler": "https://grupo-cala.com/marca/moncler/" },
    { "SANULAC": "#" },
    { "QUALA": "https://www.quala.com.pe/" },
    { "NUNA": "#" },
    { "MASON": "https://masonnatural.pe/" },
    { "H REPS": "#" },
]

const getSocios = (socios) => {
    let lista = ""
    for (let i = 0; i < socios.length; i++) {
        const socio = socios[i]
        const nombre = Object.keys(socio)[0]
        const link = socio[nombre]
        lista += `<a href="${link}" target="_blank" class="list-group-item list-group-item-action">${nombre}</a>`
    }
    return lista
}

const elementSocios = document.getElementById("socios")
elementSocios.innerHTML = getSocios(socios)