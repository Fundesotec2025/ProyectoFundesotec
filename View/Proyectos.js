document.addEventListener('DOMContentLoaded', function () {
    // Ocultar el formulario de convenios al cargar la página
    ocultarConvenios();
    //ocultamos  informeAnual
    ocultarinformeAnual();
    ocultarEstadosFinancieros();
    ocultarplanOperativo();
    ocultarAuditorIndependiente();
    ocultarNombramientoDirector();
    ocultarEstatutoFundacion();
    ocultarLeyEconomiaSocial();
    ocultarAcuerdioMinisterial();
    ocultarCodigoEtica();
    ocultarManuales();
    ocultarReglamentoInterno();
    ocultarSUIOS();
    ocultarRuc();
    // Declaramos la constante del botón
    const btnConvenio = document.getElementById('btnConvenio');
    const btnInformeAnual = document.getElementById('btnInformeAnual');
    const btnestadosFinancieros = document.getElementById('btnestadosFinancieros');
    const btnPlanOperativo = document.getElementById('btnPlanOperativo');
    const btnAuditorIndependiente = document.getElementById('btnAuditorIndependiente');
    const btnNombramientoDirector = document.getElementById('btnNombramientoDirector');
    const btnEstatutoFundacion = document.getElementById('btnEstatutoFundacion');
    const btnLeyEconomiaSocial = document.getElementById('btnLeyEconomiaSocial');
    const btnAcuerdioMinisterial = document.getElementById('btnAcuerdioMinisterial');
    const btnCodigoEtica = document.getElementById('btnCodigoEtica');
    const btnManuales = document.getElementById('btnManuales');
    const btnReglamentoInterno = document.getElementById('btnReglamentoInterno');

    const btnSUIOS = document.getElementById('btnSUIOS');
    const btnRuc = document.getElementById('btnRuc');


    // Agregamos el evento click para alternar visibilidad
    btnConvenio.addEventListener('click', VerConvenios);
    btnInformeAnual.addEventListener('click', verinformeAnual);
    btnestadosFinancieros.addEventListener('click', verEstadosFinancieros);
    btnPlanOperativo.addEventListener('click', verplanOperativo);
    btnAuditorIndependiente.addEventListener('click', verAuditorIndependiente);
    btnNombramientoDirector.addEventListener('click', verNombramientoDirector);
    btnEstatutoFundacion.addEventListener('click', verEstatutoFundacion)
    btnLeyEconomiaSocial.addEventListener('click', verLeyEconomiaSocial)
    btnAcuerdioMinisterial.addEventListener('click', verAcuerdioMinisterial)
    btnCodigoEtica.addEventListener('click', verCodigoEtica)
    btnManuales.addEventListener('click', verManuales)
    btnReglamentoInterno.addEventListener('click', verReglamentoInterno)

    btnSUIOS.addEventListener('click', verSUIOS)
    btnRuc.addEventListener('click', verRuc)

});
// Función para ocultar el formulario
function ocultarConvenios() {
    $('#convenios').hide();
}
// Función para mostrar u ocultar el formulario de convenios
function VerConvenios() {
    $('#convenios').toggle(); // Alterna entre mostrar y ocultar
}
//funcion para ocultar informeAnual
function ocultarinformeAnual() {
    $('#informeAnual').hide();
}
function verinformeAnual() {
    $('#informeAnual').toggle();
}
//...............................................................Estados financieros...............................................
function ocultarEstadosFinancieros() {
    $('#estadosFinancieros').hide();
}
function verEstadosFinancieros() {
    $('#estadosFinancieros').toggle();
}
//..............................................................notas.Estados financieros...............................................

//..............................................................Plan operativo Anual ​...............................................
function ocultarplanOperativo() {
    $('#planOperativo').hide();
}
function verplanOperativo() {
    $('#planOperativo').toggle();
}
//..............................................................AuditorIndependiente ​...............................................
function ocultarAuditorIndependiente() {
    $('#AuditorIndependiente').hide();
}
function verAuditorIndependiente() {
    $('#AuditorIndependiente').toggle();
}
//..............................................................NombramientoDirector ​...............................................
function ocultarNombramientoDirector() {
    $('#NombramientoDirector').hide();
}
function verNombramientoDirector() {
    $('#NombramientoDirector').toggle();
}

//-------------------------------------------------------------EstatutoFundacion------------------------------------------------
function ocultarEstatutoFundacion() {
    $('#EstatutoFundacion').hide();
}
function verEstatutoFundacion() {
    $('#EstatutoFundacion').toggle();
}
//-------------------------------------------------------------LeyEconomiaSocial------------------------------------------------
function ocultarLeyEconomiaSocial() {
    $('#LeyEconomiaSocial').hide();
}
function verLeyEconomiaSocial() {
    $('#LeyEconomiaSocial').toggle();
}
//-------------------------------------------------------------AcuerdioMinisterial------------------------------------------------
function ocultarAcuerdioMinisterial() {
    $('#AcuerdioMinisterial').hide();
}
function verAcuerdioMinisterial() {
    $('#AcuerdioMinisterial').toggle();
}
//-------------------------------------------------------------CodigoEtica------------------------------------------------
function ocultarCodigoEtica() {
    $('#CodigoEtica').hide();
}
function verCodigoEtica() {
    $('#CodigoEtica').toggle();
}
//-------------------------------------------------------------Manuales------------------------------------------------
function ocultarManuales() {
    $('#Manuales').hide();
}
function verManuales() {
    $('#Manuales').toggle();
}
//-------------------------------------------------------------ReglamentoInterno------------------------------------------------
function ocultarReglamentoInterno() {
    $('#ReglamentoInterno').hide();
}
function verReglamentoInterno() {
    $('#ReglamentoInterno').toggle();
}
//-------------------------------------------------------------btnSUIOS------------------------------------------------
function ocultarSUIOS() {
    $('#SUIOS').hide();
}
function verSUIOS() {
    $('#SUIOS').toggle();
}
//-------------------------------------------------------------btnRuc------------------------------------------------
function ocultarRuc() {
    $('#Ruc').hide();
}
function verRuc() {
    $('#Ruc').toggle();
}