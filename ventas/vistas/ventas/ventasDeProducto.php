<h4>Vender un producto</h4>
    <div class="row"> 
        <div class="col-sm-2">
            <from id="frmVentasProductos">
                <lable>Selecciona Cliente</lable>
                <select class="from-control input-sm" id="clienteVenta" name="clienteVenta" style="width: 200px;">
                    <option value="A">Seleccionar</option>
                </select>
                <lable>Producto</lable>
                <select class="from-control input-sm" id="productoVenta" name="productoVenta" style="width: 200px;">
                    <option value="A">Seleccionar</option>
                </select>
                <lable>Descripcion</lable>
                <textarea id="" name="" class="from-control input-sm" style="width: 200px;"></textarea>
                <lable>Cantidad</lable>
                <input type="text" class="from-control input-sm" id="" name="" style="width: 200px;">
                <lable>Precio</lable>
                <input type="text" class="from-control input-sm" id="" name="" style="width: 200px;">
                <p></p>
            <span class="btn btn-primary" id="btnAgregaVenta">Agregar</span>
        </from>    
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#clienteVenta').select2();
        $('#productoVenta').select2();
    });
</script>
