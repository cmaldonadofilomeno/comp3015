<?php
$supplier = $data['supplier'];
?>
<div class="border border-secondary-300 p-4 ">
    <h2 class='text-info'>Actualizar Proveedor</h2>
    <form action="index.php?url=supplier/save/<?php echo $supplier['id']; ?>" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>" required>
            <input type="hidden" name="accion" value="update">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' value="<?php echo $supplier['nombre']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class='form-control' value="<?php echo $supplier['email']; ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Teléfono</label>
            <input type="tel" name="telefono" class='form-control' value="<?php echo $supplier['telefono']; ?>" required>
        </div>
        <div class="form-group">
            <a href='.' class='btn btn-secondary'>Cancelar</a>
            <button class='btn btn-primary' type="submit">Guardar</button>
        </div>
    </form>
</div>
