<?php
$supplier = $data['supplier'];
?>
<div class="border border-secondary-300 p-4 ">
    <h2 class='text-info'>Borrar Proveedor</h2>
    <form action="index.php?url=supplier/remove/<?php echo $supplier['id']; ?>" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>" required>
            <input type="hidden" name="accion" value="delete">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' value="<?php echo $supplier['nombre']; ?>" readonly>
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class='form-control' value="<?php echo $supplier['email']; ?>" readonly>
        </div>
        <div class="form-group mb-3">
            <label>Teléfono</label>
            <input type="tel" name="telefono" class='form-control' value="<?php echo $supplier['telefono']; ?>" readonly>
        </div>
        <div class="form-group">
            <a href='.' class='btn btn-secondary'>Cancelar</a>
            <button class='btn btn-danger' type="submit">Confirmar Borrado</button>
        </div>
    </form>
</div>
