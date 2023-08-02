<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Estilo para fijar la cabecera en la parte superior */
    .fixed-header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 9999;
    }

    /* Estilo para fijar el pie en la parte inferior */
    .fixed-footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 9999;
    }

    /* Estilo para el contenido principal */
    .content {
      margin-top: 70px; /* Ajusta el margen superior para evitar que el contenido se oculte detrás de la cabecera */
      margin-bottom: 70px; /* Ajusta el margen inferior para evitar que el contenido se oculte detrás del pie */
      display: flex;
      flex-wrap: wrap;
    }

    /* Estilo para las columnas */
    .column {
      flex-basis: 50%;
      min-width: 0; /* Permite que las columnas sean más pequeñas que el ancho mínimo establecido por el contenido */
      overflow: auto; /* Añade scroll a las columnas si el contenido excede su altura */
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Cabecera fija -->
  <header class="fixed-header bg-dark text-white py-3">
    <div class="container">
      <h1>Mi Sitio Web</h1>
    </div>
  </header>

  <!-- Contenido principal -->
  <div class="content">
    <!-- Primera columna -->
    <div class="column">
      <h2>Columna 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum ante quis faucibus eleifend. Fusce scelerisque quam ut suscipit consequat. Sed placerat, nulla nec feugiat sollicitudin, erat diam pellentesque ipsum, id iaculis arcu velit id arcu. Nulla facilisi. Proin aliquet est non felis rutrum, nec dignissim ligula malesuada. Quisque lacinia massa et tortor porta, a ullamcorper enim bibendum. Donec vulputate tristique leo, at aliquet enim iaculis vitae. Sed pulvinar malesuada enim, sit amet volutpat nibh eleifend a.</p>
      <p>Curabitur non ipsum eget nunc euismod commodo eu vitae ex. Etiam lobortis dui vitae dui convallis, nec venenatis odio luctus. Nullam rhoncus tincidunt neque at consectetur. Praesent sed nibh lobortis, dapibus purus ut, commodo nunc. Nulla facilisi. Proin vel orci in tellus tempor rhoncus. Curabitur consequat urna vel ex faucibus, a luctus tellus tempus. Nunc bibendum purus nec tortor finibus fringilla.</p>
    </div>

    <!-- Segunda columna -->
    <div class="column">
      <h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p>
      <h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p>vvvv
      vvv
      v
      v
      <h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p>vv<h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p><h2>Columna 2</h2>
      <p>Suspendisse potenti. Pellentesque a ipsum rutrum, fermentum nisi non, ultrices risus. Vivamus congue, tellus vel euismod pharetra, enim lectus fermentum turpis, ac eleifend metus orci sit amet mauris. Duis non orci ac odio aliquet fermentum sed id massa. Curabitur mattis sagittis massa, ut consectetur neque efficitur at. Nam in vulputate orci. Sed facilisis eros at felis sollicitudin efficitur. Curabitur accumsan elit vitae diam gravida, eu tempus nisi facilisis.</p>
      <p>Vestibulum ac tristique erat, eu tincidunt dui. Duis eu pharetra velit. Suspendisse eget pharetra arcu, in laoreet ligula. In in semper velit, a consequat est. Nulla maximus diam sit amet ante pharetra, at ullamcorper arcu vestibulum. Morbi a erat in quam aliquam interdum. Sed quis diam lobortis, faucibus nisl ac, interdum quam.</p>
      
      
      dddddd
      <p>aaaaa</p>
      
      
      
    </div>
  </div>

  <!-- Pie fijo -->
  <footer class="fixed-footer bg-dark text-white py-3">
    <div class="container">
      <p>Derechos de autor &copy; 2023 Mi Sitio Web. Todos los derechos reservados.</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>