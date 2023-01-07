var canvas = document.getElementById('dibujo');
var ctx = canvas.getContext('2d');

// Inicializar algunas variables
var painting = false;
var lastX = -1;
var lastY = -1;

// Manejar eventos de mouse down, move y up
canvas.addEventListener('mousedown', function(e) {
  e.preventDefault();
  painting = true;
  lastX = e.offsetX;
  lastY = e.offsetY;
});
canvas.addEventListener('mousemove', function(e) {
  if (painting) {
    ctx.beginPath();
    ctx.strokeStyle = 'red';
    ctx.lineWidth = 2;
    ctx.moveTo(lastX, lastY);
    ctx.lineTo(e.offsetX, e.offsetY);
    ctx.stroke();
    lastX = e.offsetX;
    lastY = e.offsetY;
  }
  // Actualizar el campo oculto con la imagen del canvas
  var canvasData = canvas.toDataURL();
  document.getElementById('dibujo_data').value = canvasData;
});
canvas.addEventListener('mouseup', function(e) {
  painting = false;
  lastX = -1;
  lastY = -1;
});

// Manejar eventos de touch start, move y end
canvas.addEventListener('touchstart', function(e) {
    painting = true;
    lastX = e.touches[0].clientX - canvas.offsetLeft;
    lastY = e.touches[0].clientY - canvas.offsetTop;
  });
  canvas.addEventListener('touchmove', function(e) {
    if (painting) {
      ctx.beginPath();
      ctx.strokeStyle = 'red';
      ctx.lineWidth = 2;
      ctx.moveTo(lastX, lastY);
      ctx.lineTo(e.touches[0].clientX - canvas.offsetLeft, e.touches[0].clientY - canvas.offsetTop);
      ctx.stroke();
      lastX = e.touches[0].clientX - canvas.offsetLeft;
      lastY = e.touches[0].clientY - canvas.offsetTop;
    }
    // Actualizar el campo oculto con la imagen del canvas
    var canvasData = canvas.toDataURL();
    document.getElementById('dibujo_data').value = canvasData;
  });
  canvas.addEventListener('touchend', function(e) {
    painting = false;
    lastX = -1;
    lastY = -1;
  });