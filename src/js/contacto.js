const correo = "comercial@difarlib.com.pe"
const telefono = "(044) 289317"
const fax = "(044) 289319"
const direccion = "Av. Antenor Orrego Mz. A3 Lote 2C Urb. San Judas Tadeo - Trujillo - La Libertad - Perú"

const elementCorreo = document.getElementById("correo")
const elementTelefono = document.getElementById("telefono")
const elementFax = document.getElementById("fax")
const elementDireccion = document.getElementById("direccion")

elementCorreo.href = "mailto:" + correo
elementCorreo.innerText = correo
elementTelefono.innerText = telefono
elementFax.innerText = fax
elementDireccion.innerText = direccion