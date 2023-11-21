function lembrarDeBeberAgua() {
  alert("Não se esqueça de beber água!");
}
const intervalo = <?php echo $_POST['tempo']; ?> * 60 * 60 * 1000; // 3 em 3h
setInterval(lembrarDeBeberAgua, intervalo);