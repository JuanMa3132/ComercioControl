<!-- resources/views/components/nueva-venta-modal.blade.php -->

<style>
    #myDialog {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        z-index: 999;
        position: absolute;
        top: 0;
        user-select: none;
        opacity: 0; /* Inicialmente invisible */
        transition: opacity 0.1s ease-in-out;
        backdrop-filter: blur(5px); /* Filtro de fondo */
    }

    #myDialog.show {
        opacity: 1; /* Visible cuando tiene la clase 'show' */
    }

    #modalContent {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
        position: relative;
    }

    #closeButton {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    h2 {
        color: #333;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<div id="myDialog">
    <div id="modalContent">
        <span id="closeButton" onclick="closeDialog()">&times;</span>
        <h2>Nueva Venta</h2>
        <form>
            <!-- Campos del formulario -->
            <label for="producto">Producto:</label>
            <input type="text" id="producto" name="producto" required>

            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" required>

            <!-- Agrega más campos según sea necesario -->

            <!-- Botón de envío del formulario -->
            <input type="submit" value="Guardar">
        </form>
    </div>
</div>

<script>
    // Obtener referencias a los elementos
    var modal = document.getElementById("myDialog");
    var interface = document.getElementById("body")
    // Establecer estilos con JavaScript
    modal.style.opacity = 0;

    function closeDialog() {
        modal.style.opacity = 0;
        setTimeout(() => {
            modal.style.display = "none";
        }, 500); // Espera 0.5 segundos antes de ocultar
    }

    function openModal() {
        modal.style.display = "flex";
        setTimeout(() => {
            modal.style.opacity = 1;
            modal.style.userselect = "all";
            
        }, 10); // Espera un breve momento antes de mostrar para que la transición funcione
    }
</script>
