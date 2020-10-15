<div class="container">
    <div class="row pt-4 justify-content-center">
        <div class="col-lg-3 col-md-6 col-12  form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="codigo_buscar" placeholder="Código">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <div class="select w-100">
                <select id="ciudad_buscar" class="">
                    <option selected="" value="0">Ciudad</option>
                </select>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <div class="select w-100">
                <select id="barrio_buscar" class="">
                    <option selected="" value="0">Barrio</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <div class="select w-100">
                <select id="tipo_gestion_buscar" class="">
                    <option selected="" value="0">Tipo de Gestión</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <div class="select w-100">
                <select id="tipo_inmueble_buscar" class="">
                    <option selected="" value="0">Tipo de Inmueble</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="banios_buscar" placeholder=" Baños">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="alcobas_buscar" placeholder=" Habitaciones">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="garajes_buscar" placeholder=" Garajes">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="area_minima_buscar" placeholder=" Área Mínima">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="area_maxima_buscar" placeholder=" Área Máxima">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="precio_minimo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Mínimo">
        </div>
        <div class="col-lg-3 col-md-6 col-12 form-group pr-md-0">
            <input type="text" class="form-control rounded-0" id="precio_maximo_buscar" onkeyup="format(this)" onchange="format(this)" placeholder=" Precio Máximo">
        </div>
        <div class="col-12 col-md-6 form-group pr-md-0">
            <button type="button" class="btn btn-danger btn-md btn-block rounded-0" id='buscar'>
                <span style="color_white">Buscar</span>
            </button>
        </div>
    </div>


</div>